<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Urban Hotel - Hotel and Resort">
    <meta name="keywords" content="hotel, resort, Spa">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Hotel and Resort">
    <meta property="og:description" content="Urban Hotel - Hotel and Resort">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hotel and Resort">
    <meta name="twitter:description" content="Urban Hotel - Hotel and Resort">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <title>@yield('title', 'Urban Hotel - Hotel and Restaurant')</title>

    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon_bokinn.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Optional: For page-specific CSS that you push from individual views --}}
    @stack('styles')
</head>

<body>
    <div class="header__top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="social__links">
                        <a class="link__item gap-10" href="callto:#"><i class="flaticon-phone-flip"></i> 081232323</a>
                        <a class="link__item gap-10" href="mailto:#"><i class="flaticon-envelope"></i> urbanhotel@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="location">
                        <a class="link__item gap-10" href="#"><i class="flaticon-marker"></i>Greenlands Lane, Colombo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="main__header header__function">
        <div class="container">
            <div class="row">
                <div class="main__header__wrapper">
                    <div class="main__nav">
                        <div class="navigation d-none d-lg-block">
                            <nav class="navigation__menu" id="main__menu">
                                <ul class="list-unstyled">
                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="#" class="navigation__menu--item__link">Home</a>
                                        <div class="has__mega__menu">
                                            <div class="row g-30 row-cols-1 row-cols-md-3 row-cols-lg-5">
                                                <div class="menu__item">
                                                    <a href="{{ url('/') }}">
                                                        <img src="{{ asset('assets/images/menu/main.webp') }}" height="250" alt="">
                                                        <span>Urban Red</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ route('urbanblue.index') }}"> 
                                                        <img src="{{ asset('assets/images/menu/4.webp') }}" height="250" alt="">
                                                        <span>Urban Blue</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ route('urbangreen.index') }}">
                                                        <img src="{{ asset('assets/images/menu/5.webp') }}" height="250" alt="">
                                                        <span>Urban Green</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>



                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="#" class="navigation__menu--item__link">Pages</a>
                                        <ul class="submenu sub__style" role="menu">
                                            <li role="menuitem"><a href="{{ route('resturant.index') }}">Restaurant</a></li>
                                            <li role="menuitem"><a href="{{ route('gallery.index') }}">Gallery</a></li>
                                            <li role="menuitem"><a href="{{ url('/about') }}">About</a></li>
                                        </ul>
                                    </li>

                                    <li class="navigation__menu--item">
                                        <a href="{{ url('/contact') }}" class="navigation__menu--item__link">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="main__logo">
                        <a href="{{ url('/') }}"><img class="logo__class" src="{{ asset('assets/images/logo/urbanlogo.png') }}" alt="Urban Hotels"></a>
                    </div>
                    <div class="main__right">
                        @guest
                            {{-- Display Sign In and Sign Up buttons ONLY if the user is NOT logged in --}}
                            <a href="#" class="theme-btn btn-style sm-btn border d-none d-lg-block" aria-label="Login Button" data-bs-toggle="modal" data-bs-target="#loginModal"><span>Sign In</span></a>
                            <a href="#" class="theme-btn btn-style sm-btn border d-none d-lg-block" aria-label="Sign Up Button" data-bs-toggle="modal" data-bs-target="#signupModal"><span>Sign Up</span></a>
                        @endguest
                    
                        @auth
                            {{-- Display content ONLY if the user IS logged in --}}
                            @if (Auth::user()->role === 'admin')
                                {{-- Link for Admin users --}}
                                <a href="{{ route('admin.index') }}" class="theme-btn btn-style sm-btn fill d-none d-lg-block"><span>Admin Dashboard</span></a>
                            @elseif (Auth::user()->role === 'travel_agent')
                                {{-- Link for Travel Agent users --}}
                                <a href="{{ route('travel_agent.home') }}" class="theme-btn btn-style sm-btn fill d-none d-lg-block"><span>Agent Portal</span></a>
                            @else {{-- This covers 'individual' users and any other roles not explicitly handled --}}
                                {{-- Link for Individual users (e.g., to their profile or a general user dashboard) --}}
                                <a href="{{ url('/') }}" class="theme-btn btn-style sm-btn fill d-none d-lg-block"><span>My Profile</span></a>
                            @endif
                    
                            {{-- Add a Logout button that is visible when any user is logged in --}}
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf {{-- CSRF token for security --}}
                                <button type="submit" class="theme-btn btn-style sm-btn border d-none d-lg-block"><span>Logout</span></button>
                            </form>
                        @endauth
                    
                        {{-- The Book Now button and Mobile Menu button remain for all states --}}
                        <a href="{{ url('/room-details-1') }}" class="theme-btn btn-style sm-btn fill"><span>Book Now</span></a>
                        <button class="theme-btn btn-style sm-btn fill menu__btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span><img src="{{ asset('assets/images/icon/menu-icon.svg') }}" alt=""></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </header>
    {{-- The dynamic content of each page will be injected here --}}
    @yield('content')

 <!-- footer style one -->
 <footer class="rts__section rts__footer is__common__footer footer__background has__shape">
    <div class="section__shape">
        <div class="shape__1">
            <img src="{{ asset('assets/images/footer/shape-1.svg') }}" alt="">
        </div>
        <div class="shape__2">
            <img src="{{ asset('assets/images/footer/shape-2.svg') }}" alt="">
        </div>
        <div class="shape__3">
            <img src="{{ asset('assets/images/footer/shape-3.svg') }}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="footer__newsletter">
                <span class="h2">Join Our Newsletter</span>
                <div class="rts__form">
                    <form action="#" method="post">
                        <input type="email" name="email" id="subscription" placeholder="Enter your mail" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer__widget__wrapper">
                <div class="rts__widget">
                    <a href="{{ url('/') }}"><img class="footer__logo" src="{{ asset('assets/images/logo/logo.svg') }}" alt="footer logo"></a>
                    <p class="font-sm max-290 mt-20">
                        Each room features plush bedding, high-quality linens, and a selection of ensure a restful night's sleep.
                    </p>
                </div>
                <div class="rts__widget">
                    <span class="widget__title">Quick Links</span>
                    <ul>
                        <li><a href="#" aria-label="footer__link">Rooms & Suites</a></li>
                        <li><a href="#" aria-label="footer__link">Dining</a></li>
                        <li><a href="#" aria-label="footer__link">Spa & Wellness</a></li>
                        <li><a href="#" aria-label="footer__link">Special Offers</a></li>
                    </ul>
                </div>
                <div class="rts__widget">
                    <span class="widget__title">Guest Service</span>
                    <ul>
                        <li>24/7 Front Desk</li>
                        <li>Parking</li>
                        <li>Room Service</li>
                        <li>Free Wi-Fi</li>
                        <li>Concierge Service</li>
                    </ul>
                </div>
                <div class="rts__widget">
                    <span class="widget__title">Contact Us</span>
                    <ul>
                        <li><a aria-label="footer__contact" href="tel:+12505550199"><i class="flaticon-phone-flip"></i> +12505550199</a></li>
                        <li><a aria-label="footer__contact" href="mailto:UjJw6@example.com"><i class="flaticon-envelope"></i>Moonlit@gmail.com</a></li>
                        <li><a aria-label="footer__contact" href="#"><i class="flaticon-marker"></i>M5T 2L9 Toronto, Canada</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__text">
        <div class="container">
            <div class="row">
                <div class="copyright__wrapper">
                    <p class="mb-0">Copyright © 2024 Urban Hotels. All rights reserved.</p>
                    <div class="footer__social__link">
                        <a href="#" aria-label="footer__social" class="link__item">Facebook</a>
                        <a href="#" aria-label="footer__social" class="link__item">Linkedin</a>
                        <a href="#" aria-label="footer__social" class="link__item">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer style one end -->
<!-- back to top -->
<button type="button" class="rts__back__top" id="rts-back-to-top">
    <svg width="20" height="20" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.30201 1.51317L7.29917 21.3422C7.29912 21.7057 6.97211 21.9993 6.5674 21.9993C6.16269 21.9992 5.83577 21.7055 5.83582 21.342L5.83844 3.10055L1.39753 7.08842C1.11169 7.34511 0.647535 7.34506 0.361762 7.0883C0.0759894 6.83155 0.0760493 6.41464 0.361896 6.15795L6.05367 1.04682C6.26405 0.857899 6.5773 0.802482 6.85167 0.905201C7.12374 1.00792 7.30205 1.24823 7.30201 1.51317Z" fill="#FFF" />
        <path d="M12.9991 6.6318C12.9991 6.80021 12.9282 6.96861 12.7841 7.09592C12.4983 7.35261 12.0341 7.35256 11.7483 7.0958L6.05118 1.97719C5.76541 1.72043 5.76547 1.30352 6.05131 1.04684C6.33716 0.790152 6.80131 0.790206 7.08709 1.04696L12.7842 6.16557C12.9283 6.29498 12.9991 6.46339 12.9991 6.6318Z" fill="#FFF" />
    </svg>

</button>
<!-- back to top end -->


<div class="modal similar__modal fade " id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="max-content similar__form form__padding">
                <div class="d-flex mb-3 align-items-center justify-content-between">
                    <h6 class="mb-0">Login To Urban Hotels</h6> <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('login') }}" method="post" class="d-flex flex-column gap-3">
                    @csrf <div class="form-group">
                        <label for="email-popup" class="text-dark mb-3">Your Email</label>
                        <div class="position-relative">
                            <input type="email" name="email" id="email-popup" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-dark mb-3">Password</label>
                        <div class="position-relative">
                            <input type="password" name="password" id="password" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center ">
                        <div class="form-check d-flex align-items-center gap-2">
                            <input class="form-check-input mt-0" type="checkbox" name="remember" id="flexCheckDefault">
                            <label class="form-check-label mb-0" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <a href="#" class="forgot__password text-para" data-bs-toggle="modal" data-bs-target="#forgotModal">Forgot Password?</a>
                    </div>
                    <div class="form-group my-3">
                        <button class="theme-btn btn-style sm-btn fill w-100"><span>Login</span></button>
                    </div>
                </form>
                <div class="d-block has__line text-center">
                    <p>Or</p>
                </div>
                <div class="d-flex gap-4 flex-wrap justify-content-center mt-20 mb-20">
                    <div class="is__social google">
                        <button class="theme-btn btn-style sm-btn"><span>Continue with Google</span></button>
                    </div>
                    <div class="is__social facebook">
                        <button class="theme-btn btn-style sm-btn"><span>Continue with Facebook</span></button>
                    </div>
                </div>
                <span class="d-block text-center ">Don`t have an account? <a href="#" data-bs-target="#signupModal" data-bs-toggle="modal" class="text-primary">Sign Up</a> </span>
            </div>
        </div>
    </div>
</div>


<!-- THEME PRELOADER START -->
<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- THEME PRELOADER END -->


    <script src="{{ asset('assets/js/plugins/a-jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/b-bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/gdpr.js') }}"></script> 
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    
    {{-- Optional: For page-specific JS that you push from individual views --}}
    @stack('scripts')
</body>

</html>