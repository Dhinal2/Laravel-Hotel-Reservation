@extends('layouts.app')

@section('styles')
    <style>
        /* This applies a background and blur effect to the body ONLY when this checkout page is loaded */
        body {
            background: url('{{ asset('assets/images/pages/event/2.webp') }}') center/cover; /* Using a local image. Adjust path if needed. */
            backdrop-filter: blur(8px);
            /* Ensure the body itself allows its content to be centered and fill height */
            min-height: 100vh;
            display: flex; /* Make body a flex container to center its main content */
            flex-direction: column; /* Stack content vertically */
        }

        /* This new wrapper ensures your checkout-container is centered both horizontally and vertically */
        .main-checkout-content-wrapper {
            flex-grow: 1; /* Allows this wrapper to take up available space */
            display: flex;
            justify-content: center; /* Centers horizontally */
            align-items: center; /* Centers vertically */
            padding: 2rem 0; /* Add back any body padding you had from checkout.css */
        }
    </style>
@endsection

@section('content')
{{-- Font Awesome CDN (only if it's not already in app.blade.php's head/body) --}}
<script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>

<div class="main-checkout-content-wrapper">
    <div class="checkout-container">
        <div class="left-side">
            <div class="text-box">
                <h1 class="home-heading">{{ $room->room_name }}</h1>
                <p class="home-price"><em>{{ number_format($room->room_rate, 2) }} USD </em>/ night</p>
                <hr class="left-hr" />
                <p class="home-desc"><em>Entire home </em>for <em>2 guest</em></p>
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
                            <td>{{ number_format($room->room_rate, 2) }} x {{ $nights }} nights</td>
                            <td class="price">{{ number_format($baseRoomPrice, 2) }} USD</td>
                        </tr>

                        {{-- Display SELECTED ADD-ONS from the backend --}}
                        @foreach($selectedAddOnsDetails as $addOn)
                        <tr>
                            <td>{{ $addOn['label'] }}</td>
                            <td class="price">{{ number_format($addOn['price'], 2) }} USD</td>
                        </tr>
                        @endforeach
                        {{-- END SELECTED ADD-ONS SECTION --}}

                        <tr>
                            <td>Subtotal</td>
                            {{-- DIRECTLY use $subtotal from controller --}}
                            <td class="price">{{ number_format($subtotal, 2) }} USD</td>
                        </tr>
                        <tr>
                            <td>Tax ({{ number_format($taxRate * 100, 0) }}%)</td>
                            {{-- DIRECTLY use $taxAmount from controller --}}
                            <td class="price">{{ number_format($taxAmount, 2) }} USD</td>
                        </tr>
                        <tr class="total">
                            <td>Total</td>
                            {{-- DIRECTLY use $finalTotal from controller --}}
                            <td class="price">{{ number_format($finalTotal, 2) }} USD</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="payment-info">
                <h3 class="payment-heading">Payment Information</h3>
                <form
                  class="form-box"
                  enctype="text/plain"
                  method="get"
                  target="_blank"
                >
                  <div>
                    <label for="full-name">Full Name</label>
                    <input
                      id="full-name"
                      name="full-name"
                      placeholder="Satoshi Nakamoto"
                      required
                      type="text"
                    />
                  </div>
            
                  <div>
                    <label for="credit-card-num"
                      >Card Number
                      <span class="card-logos">
                        <i class="card-logo fa-brands fa-cc-visa"></i>
                        <i class="card-logo fa-brands fa-cc-amex"></i>
                        <i class="card-logo fa-brands fa-cc-mastercard"></i>
                        <i class="card-logo fa-brands fa-cc-discover"></i> </span
                    ></label>
                    <input
                      id="credit-card-num"
                      name="credit-card-num"
                      placeholder="1111-2222-3333-4444"
                      required
                      type="text"
                    />
                  </div>
            
                  <div>
                    <p class="expires">Expires on:</p>
                    <div class="card-experation">
                      <label for="expiration-month">Month</label>
                      <select id="expiration-month" name="expiration-month" required>
                        <option value="">Month:</option>
                        <option value="">January</option>
                        <option value="">February</option>
                        <option value="">March</option>
                        <option value="">April</option>
                        <option value="">May</option>
                        <option value="">June</option>
                        <option value="">July</option>
                        <option value="">August</option>
                        <option value="">September</option>
                        <option value="">October</option>
                        <option value="">November</option>
                        <option value="">Decemeber</option>
                      </select>
            
                      <label class="expiration-year">Year</label>
                      <select id="experation-year" name="experation-year" required>
                        <option value="">Year</option>
                        <option value="">2023</option>
                        <option value="">2024</option>
                        <option value="">2025</option>
                        <option value="">2026</option>
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
            
                  <button class="btn">
                    <i class="fa-solid fa-lock"></i> Book Securely
                  </button>
                </form>
            
                <p class="footer-text">
                  <i class="fa-solid fa-lock"></i>
                  Your credit card infomration is encrypted
                </p>
              </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
{{-- REMOVE THE JAVASCRIPT FOR CALCULATING ADD-ONS FROM HERE --}}
{{-- The total calculation logic is now handled by the backend (CheckoutController). --}}
{{-- You can put any other checkout-specific JS here if needed (e.g., payment form validation). --}}
<script>
    // Any other checkout-specific JS (e.g., payment form validation) can go here.
    // The total calculation logic is now handled by the backend.
    // Example: If you need to add client-side validation for the credit card form, this is where it would go.
</script>
@endpush