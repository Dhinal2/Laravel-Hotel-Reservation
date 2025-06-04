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
        // --- NEW: Get adults count ---
        $adults = $request->query('adults', 1); // Default to 1 if not provided
        $selectedAddOnKeys = $request->query('add_ons') ? explode(',', $request->query('add_ons')) : [];

        $nights = 0;
        if ($checkIn && $checkOut) {
            try {
                $startDate = Carbon::parse($checkIn);
                $endDate = Carbon::parse($checkOut);
                $nights = $startDate->diffInDays($endDate);
                if ($nights < 1) { 
                    $nights = 1; 
                }
            } catch (\Exception $e) {
                $nights = 1;
                $checkIn = null; 
                $checkOut = null; 
            }
        } else {
            $nights = 1;
        }

        $availableAddOns = [
            'clean' => ['label' => 'Room Clean', 'price' => 12.00],
            'parking' => ['label' => 'Parking', 'price' => 0.00], 
            'transport' => ['label' => 'Airport Transport', 'price' => 30.00],
            'pet' => ['label' => 'Pet-Friendly', 'price' => 40.00],
        ];

        $baseRoomPrice = $room->room_rate * $nights;

        $totalAddOnsPrice = 0;
        $selectedAddOnsDetails = [];

        foreach ($selectedAddOnKeys as $key) {
            if (isset($availableAddOns[$key])) {
                $addOnPricePerStay = $availableAddOns[$key]['price'] * $nights;
                $totalAddOnsPrice += $addOnPricePerStay;
                $selectedAddOnsDetails[] = [
                    'label' => $availableAddOns[$key]['label'],
                    'price' => $addOnPricePerStay
                ];
            }
        }

        $subtotal = $baseRoomPrice + $totalAddOnsPrice;
        $taxRate = 0.05; 
        $taxAmount = $subtotal * $taxRate;
        $finalTotal = $subtotal + $taxAmount;

        return view('checkout', compact(
            'room',
            'checkIn',
            'checkOut',
            'nights',
            'baseRoomPrice',
            'selectedAddOnsDetails', 
            'subtotal',
            'taxAmount',
            'taxRate',
            'finalTotal',
            'adults' // --- NEW: Pass adults count to the view ---
        ));
    }
}