@extends('layouts.app')

@section('styles')
    <style>
        /* This applies a background and blur effect to the body ONLY when this checkout page is loaded */
        body {
            background: url('{{ asset('assets/images/pages/event/2.webp') }}') center/cover;
            backdrop-filter: blur(8px);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* This new wrapper ensures your checkout-container is centered both horizontally and vertically */
        .main-checkout-content-wrapper {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 0;
        }

        /* --- STYLES FOR CHECKOUT PAGE LAYOUT AND ELEMENTS --- */

        /* Left Side Of Container - KEEP AS IS FOR BACKGROUND IMAGE */
        .left-side {
            background: url('{{ asset('assets/images/pages/room/1.webp') }}') center/cover; /* Keeping the background image here */
            position: relative; /* For text-box absolute positioning */
            min-height: 100%;
            display: flex; 
            flex-direction: column; 
            justify-content: flex-end; /* Pushes text-box to the bottom */
        }
        
        .text-box {
            background: rgba(95, 121, 134, 0.8);
            width: 100%;
            padding: 1rem 2rem;
            position: absolute; 
            bottom: 0;
            z-index: 10;
        }
        
        /* Payment Method Selection - NOW STACKED AND WITH ICONS */
        .payment-method-selection {
            margin-bottom: 2rem;
            display: flex; 
            flex-direction: column; /* THIS MAKES THEM STACK VERTICALLY */
            gap: 1.5rem; /* Vertical space between stacked radio button labels */
            font-size: 1.4rem;
            color: #64645f;
        }

        .payment-method-selection label {
            display: flex; /* Use flexbox to align radio button, icon, and text */
            align-items: center; /* Vertically center them */
            cursor: pointer;
        }

        .payment-method-selection input[type="radio"] {
            margin-right: 0.8rem;
            transform: scale(1.2); /* Make radio buttons slightly larger */
        }

        /* Styling for the icons */
        .payment-method-selection .payment-icon {
            margin-right: 0.6rem; /* Space between the icon and the text */
            font-size: 1.8rem; /* Make icons slightly larger than text for visibility */
            color: #5f7986; /* A subtle color for the icons */
            /* Add this if the icon isn't aligned well, it ensures consistent baseline */
            vertical-align: middle; 
        }

        /* Card Payment Details section - toggled by JS */
        #card-payment-details {
            transition: opacity 0.3s ease-in-out;
        }

        /* Ensure form inputs and selects have consistent styling */
        .form-box input[type="text"],
        .form-box select {
            font-family: inherit;
            font-size: 1.2rem;
            padding: 0.5rem;
            width: 100%;
            border: 1px solid #ccc;
            background-color: #f8f8f8;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        /* Specific styling for select dropdowns for custom arrow and padding */
        .form-box select {
            min-width: 8em;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23000%22%20d%3D%22M287%2C114.7L159.2%2C242.5c-4.5%2C4.5-10.6%2C6.7-16.7%2C6.7s-12.2-2.2-16.7-6.7L5.3%2C114.7c-9.1-9.1-9.1-23.7%2C0-32.8c9.1-9.1%2C23.7-9.1%2C32.8%2C0l115.6%2C115.6l115.6-115.6c9.1-9.1%2C23.7-9.1%2C32.8%2C0C296.1%2C91%2C296.1%2C105.6%2C287%2C114.7z%22%2F%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-position: right 1em center;
            background-size: 0.65em auto, 100%;
            padding-right: 2.5em;
        }
    </style>
@endsection

@section('content')
<script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>

<div class="main-checkout-content-wrapper">
    <div class="checkout-container">
        <div class="left-side">
            {{-- Room image is a background of .left-side as requested --}}
            <div class="text-box">
                <h1 class="home-heading">{{ $room->room_name }}</h1>
                <p class="home-price"><em>{{ number_format($room->room_rate, 2) }} USD </em>/ night</p>
                <hr class="left-hr" />
                <p class="home-desc"><em>Entire Room </em>for <em>{{ $adults }} guest{{ $adults > 1 ? 's' : '' }}</em></p>
                <p class="home-desc">
                    <em>{{ $checkIn ?? 'Check-in N/A' }} </em>to <em>{{ $checkOut ?? 'Check-out N/A' }}</em> ({{ $nights }} nights)
                </p>
            </div>
        </div>

        <div class="right-side">
            <div class="receipt">
                <h2 class="receipt-heading">Receipt Summary</h2>
                <div>
                    <table class="table">
                        <tr>
                            <td>Number of Rooms</td>
                            <td class="price">{{ $numRooms }}</td>
                        </tr>
                        <tr>
                            <td>Room Price, Per Night, Per Room ({{ number_format($room->room_rate, 2) }} x {{ $nights }} nights x {{ $numRooms }} rooms)</td>
                            <td class="price">{{ number_format($baseRoomPrice, 2) }} USD</td>
                        </tr>
    
                        @foreach($selectedAddOnsDetails as $addOn)
                        <tr>
                            <td>{{ $addOn['label'] }}</td>
                            <td class="price">{{ number_format($addOn['price'], 2) }} USD</td>
                        </tr>
                        @endforeach
    
                        <tr>
                            <td>Subtotal</td>
                            <td class="price">{{ number_format($subtotal, 2) }} USD</td>
                        </tr>
                        <tr>
                            <td>Tax ({{ number_format($taxRate * 100, 0) }}%)</td>
                            <td class="price">{{ number_format($taxAmount, 2) }} USD</td>
                        </tr>
                        <tr class="total">
                            <td>Total</td>
                            <td class="price">{{ number_format($finalTotal, 2) }} USD</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="payment-info">
                <h3 class="payment-heading">Payment Information</h3>

                {{-- Payment Method Selection - STACKED with icons --}}
                <div class="payment-method-selection">
                    <label for="payment-method-card">
                        <input type="radio" name="payment_method" value="card" id="payment-method-card" checked> 
                        <i class="fa-solid fa-credit-card payment-icon"></i> Pay with Card
                    </label>
                    <label for="payment-method-cash">
                        <input type="radio" name="payment_method" value="cash" id="payment-method-cash"> 
                        <i class="fa-solid fa-money-bill payment-icon"></i> Pay with Cash
                    </label>
                </div>
                {{-- END Payment Method Selection --}}

                <form
                  class="form-box"
                  enctype="text/plain" {{-- Remember to change this to application/x-www-form-urlencoded for POST --}}
                  method="get"         {{-- Remember to change this to POST --}}
                  target="_blank"      {{-- Remember to remove this for a proper submission --}}
                >
                    <div id="card-payment-details">
                        <div>
                            <label for="full-name">Full Name</label>
                            <input
                              id="full-name"
                              name="full_name"
                              placeholder="Card Holder Name"
                              required
                              type="text"
                            />
                        </div>
                    
                        <div>
                            <label for="credit-card-num">Card Number
                                <span class="card-logos">
                                    <i class="card-logo fa-brands fa-cc-visa"></i>
                                    <i class="card-logo fa-brands fa-cc-amex"></i>
                                    <i class="card-logo fa-brands fa-cc-mastercard"></i>
                                    <i class="card-logo fa-brands fa-cc-discover"></i>
                                </span>
                            </label>
                            <input
                              id="credit-card-num"
                              name="credit_card_num"
                              placeholder="1111-2222-3333-4444"
                              required
                              type="text"
                            />
                        </div>
                    
                        <div>
                            <p class="expires">Expires on:</p>
                            <div class="card-experation">
                                <label for="expiration-month">Month</label>
                                <select id="expiration-month" name="expiration_month" required>
                                    <option value="">Month:</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                    
                                <label for="expiration-year">Year</label>
                                <select id="expiration-year" name="expiration_year" required>
                                    <option value="">Year</option>
                                    @for ($year = date('Y'); $year <= date('Y') + 10; $year++)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    
                        <div>
                            <label for="cvv">CVV</label>
                            <input
                              id="cvv"
                              name="cvv"
                              placeholder="415"
                              type="text"
                              required
                            />
                            <a class="cvv-info" href="#">What is CVV?</a>
                        </div>
                    </div> 
            
                    <button class="btn">
                        <i class="fa-solid fa-lock"></i> Book Securely
                    </button>
                </form>
            
                <p class="footer-text">
                    <i class="fa-solid fa-lock"></i> Your credit card information is encrypted
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const paymentMethodRadios = document.querySelectorAll('input[name="payment_method"]');
        const cardPaymentDetails = document.getElementById('card-payment-details');
        const fullNameInput = document.getElementById('full-name');
        const creditCardNumInput = document.getElementById('credit-card-num');
        const expirationMonthSelect = document.getElementById('expiration-month');
        const expirationYearSelect = document.getElementById('expiration-year');
        const cvvInput = document.getElementById('cvv');

        function toggleCardFields() {
            const selectedMethod = document.querySelector('input[name="payment_method"]:checked').value;

            if (selectedMethod === 'card') {
                cardPaymentDetails.style.display = 'block'; // Or 'grid' if you styled it as grid
                // Re-add 'required' attribute when card is selected
                fullNameInput.setAttribute('required', 'required');
                creditCardNumInput.setAttribute('required', 'required');
                expirationMonthSelect.setAttribute('required', 'required');
                expirationYearSelect.setAttribute('required', 'required');
                cvvInput.setAttribute('required', 'required');
            } else {
                cardPaymentDetails.style.display = 'none';
                // Remove 'required' attribute when cash is selected
                fullNameInput.removeAttribute('required');
                creditCardNumInput.removeAttribute('required');
                expirationMonthSelect.removeAttribute('required');
                expirationYearSelect.removeAttribute('required');
                cvvInput.removeAttribute('required');
                // Optionally clear values when hidden to prevent accidental submission
                fullNameInput.value = '';
                creditCardNumInput.value = '';
                expirationMonthSelect.value = '';
                expirationYearSelect.value = '';
                cvvInput.value = '';
            }
        }

        // Add event listeners
        paymentMethodRadios.forEach(radio => {
            radio.addEventListener('change', toggleCardFields);
        });

        // Initial check on page load to set correct visibility
        toggleCardFields();
    });
</script>
@endpush