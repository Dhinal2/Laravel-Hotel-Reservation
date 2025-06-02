@extends('layouts.app') {{-- This line links this view to your main layout --}}

@section('title', 'Urban Hotels - Luxury Hotel & Resort') {{-- Sets the title for this specific page --}}

@section('content')
    <div class="rts__section banner__area is__home__four banner__height banner__center">
        <div class="banner__content jara-mask-3 jarallax">
            <div class="banner__slider__image">
                <img class="jarallax-img" src="assets/images/index-4/banner/banner.webp" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-11">
                        <div class="banner__slide__content if__not__slider">
                            <h1 class="wow fadeInUp">Elevate Your Stay Luxury and Adventure in the Mountains</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- advance search -->
    <div class="rts__section advance__search__section is__home__four wow fadeInUp" data-wow-delay='.5s'>
        <div class="container">
            <div class="row">
                <form action="{{ route('urbanBlueRooms.index') }}" method="post" class="advance__search">
                    @csrf
                    <div class="advance__search__wrapper wow fadeInUp">
                        <!-- single input -->
                        <div class="query__input">
                            <label for="check__in" class="query__label">Check In</label>
                            <input type="text" id="check__in" name="check__in" placeholder="15 Jun 2024" required>
                            <div class="query__input__icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                        </div>
                        <!-- single input end -->

                        <!-- single input -->
                        <div class="query__input">
                            <label for="check__out" class="query__label">Check Out</label>
                            <input type="text" id="check__out" name="check__out" placeholder="15 May 2024" required>
                            <div class="query__input__icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                        </div>
                        <!-- single input end -->

                        <!-- single input -->
                        <div class="query__input">
                            <label for="adult" class="query__label ">Adult</label>
                            <select name="adult" id="adult" class="form-select">
                                <option value="1">1 Person</option>
                                <option value="2">2 Person</option>
                                <option value="3">3 Person</option>
                                <option value="4">4 Person</option>
                                <option value="5">5 Person</option>
                                <option value="6">6 Person</option>
                                <option value="7">7 Person</option>
                                <option value="8">8 Person</option>
                                <option value="9">9 Person</option>
                            </select>
                            <div class="query__input__icon">
                                <i class="flaticon-user"></i>
                            </div>
                        </div>
                        <!-- single input end -->

                        <!-- single input -->
                        <div class="query__input">
                            <label for="child" class="query__label ">Child</label>
                            <select name="child" id="child" class="form-select">
                                <option value="1">1 Child</option>
                                <option value="2">2 Child</option>
                                <option value="3">3 Child</option>
                                <option value="4">4 Child</option>
                                <option value="5">5 Child</option>
                                <option value="6">6 Child</option>
                                <option value="7">7 Child</option>
                                <option value="8">8 Child</option>
                                <option value="9">9 Child</option>
                            </select>
                            <div class="query__input__icon">
                                <i class="flaticon-user"></i>
                            </div>
                        </div>
                        <!-- single input end -->

                        <!-- submit button -->
                        <button class="theme-btn btn-style fill no-border search__btn">
                            <span>Check Now</span>
                        </button>
                        <!-- submit button end -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- advance search end -->

    <!-- about us -->
    <div class="rts__section about is__home__four section__padding">
        <div class="container">
            <div class="row g-4 align-items-center  ">
                <div class="col-lg-5">
                    <div class="about__images">
                        <div class="image__left wow fadeInUp">
                            <img height="474" width="450" src="assets/images/index-4/about/1.webp" alt="">
                        </div>
                        <div class="image__right wow fadeInLeft">
                            <img width="365" height="385" src="assets/images/index-4/about/2.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__content">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">About Us</span>
                        <h2 class="font-xl wow fadeInUp">Welcome To Our Moonlit Hotel & Resort</h2>
                        <p class="font-sm mt-30 wow fadeInUp" data-wow-delay=".3s">
                            Welcome to Bokinn, where luxury meets comfort in the heart of canada. Since 1999,
                            we have been dedicated to providing an exceptional stay for our guests, blending
                            modern amenities with timeless elegance.Our beautifully designed rooms and suites
                            offer stunning views and plush accommodations, ensuring a restful retreat whether
                            you're here for business or leisure.
                        </p>
                        <div class="hotel__owner__sign mt-40 wow fadeInUp" data-wow-delay=".5s">
                            <img src="assets/images/index-4/about/sign.webp" alt="sign">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- our rooms -->
    <div class="rts__section room has__background has__shape section__padding">
        <div class="section__shape">
            <div class="shape__1 wow fadeInLeft">
                <img src="assets/images/shape/room-3.png" alt="">
            </div>
            <div class="shape__2 wow fadeInRight">
                <img src="assets/images/shape/room-4.png" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row position-relative justify-content-center text-center mb-60">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar is__home__two">
                        <span class="h6 subtitle__icon__three mx-auto text-white">Room</span>
                        <h2 class="section__title text-white">Our Rooms</h2>
                    </div>
                </div>
                <div class="full__width__nav is__room__slider">
                    <div class="rts__slide">
                        <div class="next slider-button-prev">
                            <svg width="41" height="22" viewBox="0 0 41 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25536 9.75546H39.0408C39.7335 9.75546 40.2931 10.3151 40.2931 11.0078C40.2931 11.7005 39.7335 12.2601 39.0408 12.2601H4.28054L11.8807 19.8603C12.3699 20.3495 12.3699 21.1439 11.8807 21.6331C11.3915 22.1223 10.597 22.1223 10.1078 21.6331L0.366985 11.8923C0.00693893 11.5322 -0.098732 10.9961 0.0969467 10.5264C0.292625 10.0607 0.750515 9.75546 1.25536 9.75546Z" fill="#65676B" />
                                <path d="M11.0079 0.0028038C11.3288 0.0028038 11.6497 0.124125 11.8924 0.370679C12.3816 0.859874 12.3816 1.65432 11.8924 2.14352L2.13979 11.8961C1.6506 12.3853 0.856151 12.3853 0.366956 11.8961C-0.122239 11.4069 -0.122239 10.6125 0.366956 10.1233L10.1195 0.370679C10.3661 0.124125 10.687 0.0028038 11.0079 0.0028038Z" fill="#65676B" />
                            </svg>

                        </div>
                    </div>
                    <div class="rts__slide">
                        <div class="prev slider-button-next">
                            <svg width="41" height="22" viewBox="0 0 41 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.0374 12.2499L1.25198 12.245C0.55928 12.2449 -0.000286104 11.6852 -0.000196778 10.9925C-0.000107452 10.2998 0.559603 9.74024 1.2523 9.74033L36.0125 9.74481L28.4134 2.14371C27.9242 1.65445 27.9243 0.859997 28.4136 0.370865C28.9029 -0.118267 29.6973 -0.118164 30.1864 0.371094L39.926 10.1132C40.286 10.4733 40.3916 11.0095 40.1959 11.4791C40.0001 11.9447 39.5422 12.2499 39.0374 12.2499Z" fill="#65676B" />
                                <path d="M29.2835 22.0013C28.9626 22.0012 28.6417 21.8799 28.3991 21.6333C27.9099 21.144 27.91 20.3496 28.3993 19.8604L38.1531 10.1091C38.6424 9.61998 39.4368 9.62008 39.926 10.1093C40.4151 10.5986 40.415 11.393 39.9257 11.8822L30.1719 21.6335C29.9253 21.88 29.6044 22.0013 29.2835 22.0013Z" fill="#65676B" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="room__slider is__home__four">
                    <div class="swiper-wrapper">

                        <!-- single slider item -->
                        <div class="swiper-slide">
                            <div class="room__slider__box">
                                <div class="room__slider__thumb">
                                    <a href="#" class="link__item">
                                        <figure>
                                            <img src="assets/images/index-4/room/1.webp" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="room__slide__content">
                                    <div class="slider__meta">
                                        <a href="room-details-1.html" class="room__title">
                                            <h5>Timberline Hideaway Hotel</h5>
                                        </a>
                                        <div class="room__content__meta">
                                            <span><i class="flaticon-construction"></i>Size: 35 sqm</span>
                                            <span><i class="flaticon-user"></i>Person: 5 Person</span>
                                        </div>
                                    </div>
                                    <span class="price h4">200$</span>
                                </div>
                            </div>
                        </div>
                        <!-- single slider item end -->

                        <!-- single slider item -->
                        <div class="swiper-slide">
                            <div class="room__slider__box">
                                <div class="room__slider__thumb">
                                    <a href="#" class="link__item">
                                        <figure>
                                            <img src="assets/images/index-4/room/2.webp" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="room__slide__content">
                                    <div class="slider__meta">
                                        <a href="room-details-1.html" class="room__title">
                                            <h5>Rocky Ridge Room</h5>
                                        </a>
                                        <div class="room__content__meta">
                                            <span><i class="flaticon-construction"></i>Size: 35 sqm</span>
                                            <span><i class="flaticon-user"></i>Person: 5 Person</span>
                                        </div>
                                    </div>
                                    <span class="price h4">140$</span>
                                </div>
                            </div>
                        </div>
                        <!-- single slider item end -->

                        <!-- single slider item -->
                        <div class="swiper-slide">
                            <div class="room__slider__box">
                                <div class="room__slider__thumb">
                                    <a href="#" class="link__item">
                                        <figure>
                                            <img src="assets/images/index-4/room/3.webp" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="room__slide__content">
                                    <div class="slider__meta">
                                        <a href="room-details-1.html" class="room__title">
                                            <h5>Timberline Hideaway Hotel</h5>
                                        </a>
                                        <div class="room__content__meta">
                                            <span><i class="flaticon-construction"></i>Size: 35 sqm</span>
                                            <span><i class="flaticon-user"></i>Person: 5 Person</span>
                                        </div>
                                    </div>
                                    <span class="price h4">200$</span>
                                </div>
                            </div>
                        </div>
                        <!-- single slider item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our rooms end -->

    <!-- our services -->
    <div class="rts__section service is__home__four section__padding">
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Our Service</span>
                        <h2 class="content__title h2 lh-1">Our Services</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest. Each room features plush bedding, high-quality linens, and a selection of pillows to ensure a restful night's sleep.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="service__slider full__width">
            <div class="swiper-wrapper">
                <!-- single slide -->
                <div class="swiper-slide">
                    <div class="service__item__slide">
                        <div class="service__thumb">
                            <img height="460" width="420" src="assets/images/index-4/service/1.webp" alt="">
                        </div>
                        <div class="service__meta">
                            <h5><a href="service.html">Family Fun Package</a></h5>
                            <span class="d-block h4 price">250$</span>
                        </div>
                    </div>
                </div>
                <!-- single slide end -->
                <!-- single slide -->
                <div class="swiper-slide">
                    <div class="service__item__slide">
                        <div class="service__thumb">
                            <img height="460" width="420" src="assets/images/index-4/service/2.webp" alt="">
                        </div>
                        <div class="service__meta">
                            <h5><a href="service.html">Spa Retreat</a></h5>
                            <span class="d-block h4 price">120$</span>
                        </div>
                    </div>
                </div>
                <!-- single slide end -->
                <!-- single slide -->
                <div class="swiper-slide">
                    <div class="service__item__slide">
                        <div class="service__thumb">
                            <img height="460" width="420" src="assets/images/index-4/service/3.webp" alt="">
                        </div>
                        <div class="service__meta">
                            <h5><a href="service.html">Romantic Getaway</a></h5>
                            <span class="d-block h4 price">100$</span>
                        </div>
                    </div>
                </div>
                <!-- single slide end -->
                <!-- single slide -->
                <div class="swiper-slide">
                    <div class="service__item__slide">
                        <div class="service__thumb">
                            <img height="460" width="420" src="assets/images/index-4/service/4.webp" alt="">
                        </div>
                        <div class="service__meta">
                            <h5><a href="service.html">Business Traveler Special</a></h5>
                            <span class="d-block h4 price">450$</span>
                        </div>
                    </div>
                </div>
                <!-- single slide end -->
                <!-- single slide -->
                <div class="swiper-slide">
                    <div class="service__item__slide">
                        <div class="service__thumb">
                            <img height="460" width="420" src="assets/images/index-4/service/5.webp" alt="">
                        </div>
                        <div class="service__meta">
                            <h5><a href="service.html">Spa Retreat Package</a></h5>
                            <span class="d-block h4 price">250$</span>
                        </div>
                    </div>
                </div>
                <!-- single slide end -->

                <!-- single slide -->
                <div class="swiper-slide">
                    <div class="service__item__slide">
                        <div class="service__thumb">
                            <img height="460" width="420" src="assets/images/index-4/service/2.webp" alt="">
                        </div>
                        <div class="service__meta">
                            <h5><a href="service.html">Couple Package</a></h5>
                            <span class="d-block h4 price">250$</span>
                        </div>
                    </div>
                </div>
                <!-- single slide end -->
            </div>
            <!-- pagination button -->
            <div class="rts__pagination">
                <div class="rts-pagination"></div>
            </div>
            <!-- pagination button end -->
        </div>

    </div>
    <!-- our services end -->

    <!-- facility -->
    <div class="rts__section facility has__background py-80">
        <div class="container">
            <div class="row position-relative justify-content-center text-center mb-60">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar is__home__two">
                        <span class="h6 subtitle__icon__three mx-auto text-white">Facilities</span>
                        <h2 class="section__title text-white">Hotel Facilities</h2>
                    </div>
                </div>
            </div>
            <div class="row g-30 align-items-center">

                <div class="col-xl-6 col-lg-12">
                    <div class="facility__content">
                        <div class="row gy-4 wow fadeInUp" data-wow-delay=".5s">
                            <div class="col-lg-6 col-md-6">
                                <div class="card rts__card is__home__four">
                                    <div class="card-body">
                                        <div class="icon"><img src="assets/images/icon/bed.svg" alt=""></div>
                                        <a href="#">
                                            <h6 class="card-title h6 mb-15">Rooms and Suites</h6>
                                        </a>
                                        <p class="card-text">Varied types of rooms, from standard to luxury suites, equipped with essentials like beds.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card rts__card is__home__four">
                                    <div class="card-body">
                                        <div class="icon"><img src="assets/images/icon/security.svg" alt=""></div>
                                        <a href="#">
                                            <h6 class="card-title h6 mb-15">24-Hour Security</h6>
                                        </a>
                                        <p class="card-text">On-site security personnel and best surveillance. from standard to luxury suites,Secure storage for valuables.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card rts__card is__home__four">
                                    <div class="card-body">
                                        <div class="icon"><img src="assets/images/icon/gym.svg" alt=""></div>
                                        <a href="#">
                                            <h6 class="card-title h6 mb-15">Fitness Center</h6>
                                        </a>
                                        <p class="card-text">Equipped with exercise machines and weights.Offering massages, facials, and other treatments.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card rts__card is__home__four">
                                    <div class="card-body">
                                        <div class="icon"><img src="assets/images/icon/swimming-pool.svg" alt=""></div>
                                        <a href="#">
                                            <h6 class="card-title h6 mb-15">Swimming Pool</h6>
                                        </a>
                                        <p class="card-text">Indoor or outdoor pools for leisure or exercise.Offering massages, facials, and other treatments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="facility__thumb jarallax">
                        <figure class="m-0">
                            <img class="jarallax-img" src="assets/images/index-4/facility.webp" width="645" height="610" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- facility end -->

    <!-- blog style -->
    <div class="rts__section blog is__home__three">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Blog</span>
                        <h2 class="section__title">See Our Latest Blog</h2>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row g-30">
                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="blog__item is__has__radius">
                        <div class="blog__item__thumb">
                            <a href="blog-details.html">
                                <img height="250" width="360" src="assets/images/index-4/blog/1.webp" alt="">
                            </a>
                        </div>
                        <div class="blog__item__meta">
                            <a href="#" class="blog__item__meta__cat">Alpine Retreat</a>
                            <a href="blog-details.html" class="blog__item__meta__title">
                                <h6>Experience the Majesty of the Mountains</h6>
                            </a>
                            <div class="blog__item__meta__list">
                                <span class="blog__item__meta__list__item">
                                    <img src="assets/images/icon/calendar.svg" alt="">March 26, 2024
                                </span>
                                <span class="blog__item__meta__list__item">
                                   <a href="#"><img src="assets/images/icon/person.svg" alt="">Ashique</a> 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="blog__item is__has__radius">
                        <div class="blog__item__thumb">
                            <a href="blog-details.html">
                                <img height="250" width="360" src="assets/images/index-4/blog/2.webp" alt="">
                            </a>
                        </div>
                        <div class="blog__item__meta">
                            <a href="#" class="blog__item__meta__cat">Summit Suite</a>
                            <a href="blog-details.html" class="blog__item__meta__title">
                                <h6>Nestled in Nature: Your Hotel Mountain Sanctuary</h6>
                            </a>
                            <div class="blog__item__meta__list">
                                <span class="blog__item__meta__list__item">
                                    <img src="assets/images/icon/calendar.svg" alt="">March 26, 2024
                                </span>
                                <span class="blog__item__meta__list__item">
                                   <a href="#"><img src="assets/images/icon/person.svg" alt=""> Hasan</a> 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="blog__item is__has__radius">
                        <div class="blog__item__thumb">
                            <a href="blog-details.html">
                                <img height="250" width="360" src="assets/images/index-4/blog/3.webp" alt="">
                            </a>
                        </div>
                        <div class="blog__item__meta">
                            <a href="#" class="blog__item__meta__cat">Urban Oasis Living</a>
                            <a href="blog-details.html" class="blog__item__meta__title">
                                <h6>Discover the Ultimate Mountain Getaway</h6>
                            </a>
                            <div class="blog__item__meta__list">
                                <span class="blog__item__meta__list__item">
                                    <img src="assets/images/icon/calendar.svg" alt="">March 26, 2024
                                </span>
                                <span class="blog__item__meta__list__item">
                                   <a href="#"><img src="assets/images/icon/person.svg" alt="">Rh Emran</a> 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog style end -->

    <div class="modal similar__modal fade " id="loginModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="max-content similar__form form__padding">
                    <div class="d-flex mb-3 align-items-center justify-content-between">
                        <h6 class="mb-0">Login To Moonlit</h6>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form action="candidate-dashboard.html" method="post" class="d-flex flex-column gap-3">
                        <div class="form-group">
                            <label for="email-popup" class="text-dark mb-3">Your Email</label>
                            <div class="position-relative">
                                <input type="email" name="email-popup" id="email-popup" placeholder="Enter your email" required>

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
                                <input class="form-check-input mt-0" type="checkbox" value="" id="flexCheckDefault">
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

    <!-- signup form -->
    <div class="modal similar__modal fade " id="signupModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="max-content similar__form form__padding">
                    <div class="d-flex mb-3 align-items-center justify-content-between">
                        <h6 class="mb-0">Create A Free Account</h6>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>

                    <form action="#" class="d-flex flex-column gap-3">
                        <div class="form-group">
                            <label for="sname" class=" text-dark mb-3">Your Name</label>
                            <div class="position-relative">
                                <input type="text" name="sname" id="sname" placeholder="Candidate" required>
                                <i class="fa-light fa-user icon"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="signemail" class=" text-dark mb-3">Your Email</label>
                            <div class="position-relative">
                                <input type="email" name="signemail" id="signemail" placeholder="Enter your email" required>
                                <i class="fa-sharp fa-light fa-envelope icon"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="spassword" class=" text-dark mb-3">Password</label>
                            <div class="position-relative">
                                <input type="password" name="spassword" id="spassword" placeholder="Enter your password" required>
                                <i class="fa-light fa-lock icon"></i>
                            </div>
                        </div>

                        <div class="form-group my-3">
                            <button class="theme-btn btn-style sm-btn fill w-100"><span>Register</span></button>
                        </div>
                    </form>
                    <div class="d-block has__line text-center">
                        <p>Or</p>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center gap-4 mt-20 mb-20">
                        <div class="is__social google">
                            <button class="theme-btn btn-style sm-btn"><span>Continue with Google</span></button>
                        </div>
                        <div class="is__social facebook">
                            <button class="theme-btn btn-style sm-btn"><span>Continue with Facebook</span></button>
                        </div>
                    </div>
                    <span class="d-block text-center ">Have an account? <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal" class="text-primary">Login</a> </span>
                </div>
            </div>
        </div>
    </div>

    <!-- forgot password form -->
    <div class="modal similar__modal fade " id="forgotModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="max-content similar__form form__padding">
                    <div class="d-flex mb-3 align-items-center justify-content-between">
                        <h6 class="mb-0">Forgot Password</h6>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form action="#" class="d-flex flex-column gap-3">
                        <div class="form-group">
                            <label for="fmail" class=" text-dark mb-3">Your Email</label>
                            <div class="position-relative">
                                <input type="email" name="email" id="fmail" placeholder="Enter your email" required>
                                <i class="fa-sharp fa-light fa-envelope icon"></i>
                            </div>
                        </div>
                        <div class="form-group my-3">
                            <button class="theme-btn btn-style sm-btn fill w-100"><span>Reset Password</span></button>
                        </div>
                    </form>

                    <span class="d-block text-center ">Remember Your Password? 
                <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal" class="text-primary">Login</a> </span>
                </div>
            </div>
        </div>
    </div>
@endsection