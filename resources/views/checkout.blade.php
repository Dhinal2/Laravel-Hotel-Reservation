@extends('layouts.app') {{-- This tells Laravel to use your main layout --}}

{{-- This section pushes CSS rules to the head of your app.blade.php (if you have @stack('styles')) --}}
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
    {{-- If you already have Font Awesome in your main layout, you can remove this. --}}
    <script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>

    {{-- This new wrapper will center your checkout container --}}
    <div class="main-checkout-content-wrapper">
        <div class="checkout-container">
            <div class="left-side">
                <div class="text-box">
                    <h1 class="home-heading">{{ $room->name }}</h1> {{-- Display the dynamic room name --}}
                    <p class="home-price"><em>{{ $room->price }} USD </em>/ 1 night</p> {{-- Display the dynamic room price --}}
                    <hr class="left-hr" />
                    <p class="home-desc"><em>Entire home </em>for <em>2 guest</em></p>
                    <p class="home-desc">
                        <em>Tue, July 23, 2022 </em>to <em>Thu, July 25, 2022</em>
                    </p>
                </div>
            </div>

            <div class="right-side">
                <div class="receipt">
                    <h2 class="receipt-heading">Receipt Summary</h2>
                    <div>
                        <table class="table">
                            <tr>
                                <td>249.50 x 2 nights</td>
                                <td class="price">499.00 USD</td>
                            </tr>
                            <tr>
                                <td>Discount</td>
                                <td class="price">0.00 USD</td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td class="price">499.00 USD</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td class="price">47.41 USD</td>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <td class="price">546.41 USD</td>
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