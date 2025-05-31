<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Moonlit - Hotel and Resort HTML Template">
    <meta name="keywords" content="hotel, resort, Spa">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Hotel and Resort">
    <meta property="og:description" content="Moonlit - Hotel and Resort HTML Template">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hotel and Resort">
    <meta name="twitter:description" content="Moonlit - Hotel and Resort HTML Template">
    <link rel="icon" href="{{ asset('public/assets/images/favicon.ico') }}" type="image/x-icon">
    <title>@yield('title', 'Moonlit - Hotel and Restaurant Template')</title>

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
                        <a class="link__item gap-10" href="callto:#"><i class="flaticon-phone-flip"></i> +12505550199</a>
                        <a class="link__item gap-10" href="mailto:#"><i class="flaticon-envelope"></i> moonlit@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="location">
                        <a class="link__item gap-10" href="#"><i class="flaticon-marker"></i>280 Augusta Avenue, M5T 2L9 Toronto, Canada</a>
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
                                                        <span>Luxury Hotel</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ url('/index-2') }}"> {{-- Assuming you'll create routes for these --}}
                                                        <img src="{{ asset('assets/images/menu/01.webp') }}" height="250" alt="">
                                                        <span>LuxeVista Hotel</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ url('/index-3') }}">
                                                        <img src="{{ asset('assets/images/menu/03.webp') }}" height="250" alt="">
                                                        <span>OceanBreeze Resort</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ url('/index-4') }}">
                                                        <img src="{{ asset('assets/images/menu/04.webp') }}" height="250" alt="">
                                                        <span>Apartment Hotel</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ url('/index-5') }}">
                                                        <img src="{{ asset('assets/images/menu/4.webp') }}" height="250" alt="">
                                                        <span>Mountain Hotel</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ url('/index-6') }}">
                                                        <img src="{{ asset('assets/images/menu/5.webp') }}" height="250" alt="">
                                                        <span>City Hotel</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ url('/index-7') }}">
                                                        <img src="{{ asset('assets/images/menu/6.webp') }}" height="250" alt="">
                                                        <span>Beach Hotel</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ url('/index-dark') }}">
                                                        <img src="{{ asset('assets/images/menu/hotel-dark.webp') }}" height="250" alt="">
                                                        <span>Beach Hotel</span>
                                                    </a>
                                                </div>
                                                <div class="menu__item">
                                                    <a href="{{ url('/index-video') }}">
                                                        <img src="{{ asset('assets/images/menu/08.webp') }}" height="250" alt="">
                                                        <span>Hotel Seaside</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="#" class="navigation__menu--item__link">Rooms</a>
                                        <ul class="submenu sub__style" role="menu">
                                            <li role="menuitem" class="has-child has-arrow">
                                                <a href="#">Room Style</a>
                                                <ul class="sub__style" role="menu">
                                                    <li role="menuitem"><a href="{{ url('/room-one') }}">Room One</a></li>
                                                    <li role="menuitem"><a href="{{ url('/room-two') }}">Room Two</a></li>
                                                    <li role="menuitem"><a href="{{ url('/room-three') }}">Room Three</a></li>
                                                    <li role="menuitem"><a href="{{ url('/room-four') }}">Room Four</a></li>
                                                </ul>
                                            </li>
                                            <li role="menuitem" class="has-child has-arrow">
                                                <a href="#">Room Details</a>
                                                <ul class="sub__style" role="menu">
                                                    <li role="menuitem"><a href="{{ url('/room-details-1') }}">Room Details 1</a></li>
                                                    <li role="menuitem"><a href="{{ url('/room-details-2') }}">Room Details 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="#" class="navigation__menu--item__link">Pages</a>
                                        <ul class="submenu sub__style" role="menu">
                                            <li role="menuitem"><a href="{{ url('/about') }}">About</a></li>
                                            <li role="menuitem"><a href="{{ url('/restaurant') }}">Restaurant</a></li>
                                            <li role="menuitem"><a href="{{ url('/gallery') }}">Gallery</a></li>
                                            <li role="menuitem"><a href="{{ url('/service') }}">Service</a></li>
                                            <li role="menuitem"><a href="{{ url('/event') }}">Event</a></li>
                                            <li role="menuitem"><a href="{{ url('/activities') }}">Activities</a></li>
                                        </ul>
                                    </li>
                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="#" class="navigation__menu--item__link">Blog</a>
                                        <ul class="submenu sub__style" role="menu">
                                            <li role="menuitem"><a href="{{ url('/blog') }}">Blog</a></li>
                                            <li role="menuitem"><a href="{{ url('/blog-details') }}">Blog Details</a></li>
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
                        <a href="{{ url('/') }}"><img class="logo__class" src="{{ asset('assets/images/logo/logo.svg') }}" alt="moonlit"></a>
                    </div>
                    <div class="main__right">
                        <a href="#" class="theme-btn btn-style sm-btn border d-none d-lg-block" aria-label="Login Button" data-bs-toggle="modal" data-bs-target="#loginModal"><span>Sign In</span></a>
                        <a href="#" class="theme-btn btn-style sm-btn border d-none d-lg-block" aria-label="Sign Up Button" data-bs-toggle="modal" data-bs-target="#signupModal"><span>Sign Up</span></a>
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

    {{-- You will likely have a common footer here. Since you only shared the top part, I'll add a placeholder. --}}
    {{-- Please paste your template's footer HTML here, converting paths with asset(). --}}
    <footer>
        <p style="text-align: center; padding: 20px;">&copy; {{ date('Y') }} Moonlit Hotel. All Rights Reserved.</p>
    </footer>

    {{-- Common JavaScript files for the entire template --}}
    {{-- These are typically at the end of the body for performance --}}

    <script src="{{ asset('assets/js/plugins/a-jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/b-bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    {{-- Optional: For page-specific JS that you push from individual views --}}
    @stack('scripts')
</body>

</html>