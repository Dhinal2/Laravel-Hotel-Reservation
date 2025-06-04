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
        $adults = $request->query('adults', 1); 
        $children = $request->query('children', 0); 
        $extraBeds = $request->query('extra_beds', 0); 
        $numRooms = $request->query('num_rooms', 1); 
        
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

        // Define ALL available add-ons and their FLAT prices on the BACKEND
        $availableAddOns = [
            'clean' => ['label' => 'Room Clean', 'price' => 12.00], // Flat rate per booking
            'parking' => ['label' => 'Parking', 'price' => 0.00],   // Flat rate per booking
            'transport' => ['label' => 'Airport Transport', 'price' => 30.00], // Flat rate per booking
            'pet' => ['label' => 'Pet-Friendly', 'price' => 40.00], // Flat rate per booking
            'extra_bed_cost' => ['label' => 'Extra Bed', 'price' => 20.00], // Flat rate per bed, NOT per night or per room
        ];

        // This calculation remains the same, as it's the core room booking cost
        $baseRoomPrice = $room->room_rate * $nights * $numRooms;

        $totalAddOnsPrice = 0;
        $selectedAddOnsDetails = []; 

        // Process standard add-ons (now using flat rates)
        foreach ($selectedAddOnKeys as $key) {
            if (isset($availableAddOns[$key])) {
                $addOnPrice = $availableAddOns[$key]['price'];
                $addOnLabel = $availableAddOns[$key]['label'];
                
                // All these add-ons are now treated as flat rates per booking
                $addOnTotalCost = $addOnPrice;
                
                $totalAddOnsPrice += $addOnTotalCost;
                $selectedAddOnsDetails[] = [
                    'label' => $addOnLabel,
                    'price' => $addOnTotalCost
                ];
            }
        }

        // Calculate and add Extra Bed cost if selected (now using flat rate per bed)
        if ($extraBeds > 0 && isset($availableAddOns['extra_bed_cost'])) {
            // Extra bed cost is per bed, flat rate per booking (not multiplied by nights or rooms)
            $extraBedTotalCost = $availableAddOns['extra_bed_cost']['price'] * $extraBeds; 
            $totalAddOnsPrice += $extraBedTotalCost;
            $selectedAddOnsDetails[] = [
                'label' => $availableAddOns['extra_bed_cost']['label'] . ' x ' . $extraBeds, 
                'price' => $extraBedTotalCost
            ];
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
            'adults', 
            'children', 
            'extraBeds', 
            'numRooms'   
        ));
    }
}