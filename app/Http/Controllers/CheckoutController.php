<?php

namespace App\Http\Controllers;
use App\Models\Room; 
use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function index(Request $request, $roomid)
    {
        $room = Room::findOrFail($roomid);

        $checkIn = $request->query('check_in');
        $checkOut = $request->query('check_out');
        $selectedAddOnKeys = $request->query('add_ons') ? explode(',', $request->query('add_ons')) : []; // Get selected add-ons

        $nights = 0;
        if ($checkIn && $checkOut) {
            try {
                $startDate = Carbon::parse($checkIn);
                $endDate = Carbon::parse($checkOut);
                $nights = $startDate->diffInDays($endDate);
                if ($nights < 1) { $nights = 1; }
            } catch (\Exception $e) {
                $nights = 1;
                $checkIn = null;
                $checkOut = null;
            }
        } else {
            $nights = 1;
        }

        // Define ALL available add-ons and their prices on the BACKEND
        // This is important for security to prevent manipulation from frontend.
        $availableAddOns = [
            'clean' => ['label' => 'Room Clean', 'price' => 12.00],
            'parking' => ['label' => 'Parking', 'price' => 0.00], // Free
            'transport' => ['label' => 'Airport Transport', 'price' => 30.00],
            'pet' => ['label' => 'Pet-Friendly', 'price' => 40.00],
        ];

        $baseRoomPrice = $room->room_rate * $nights; // Use room_rate

        $totalAddOnsPrice = 0;
        $selectedAddOnsDetails = []; // To pass details of selected add-ons to the view

        foreach ($selectedAddOnKeys as $key) {
            if (isset($availableAddOns[$key])) {
                $totalAddOnsPrice += $availableAddOns[$key]['price'];
                $selectedAddOnsDetails[] = $availableAddOns[$key]; // Store full details
            }
        }

        // Calculate total after add-ons, before tax
        $subtotal = $baseRoomPrice + $totalAddOnsPrice;

        $taxRate = 0.05; // Example tax rate (5%)
        $taxAmount = $subtotal * $taxRate;
        $finalTotal = $subtotal + $taxAmount;


        return view('checkout', compact(
            'room',
            'checkIn',
            'checkOut',
            'nights',
            'baseRoomPrice',
            'selectedAddOnsDetails', // Pass the details of only selected add-ons
            'subtotal',
            'taxAmount',
            'taxRate',
            'finalTotal'
        ));
    }
}
