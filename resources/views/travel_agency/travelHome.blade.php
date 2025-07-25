@extends('layouts.app') {{-- This line links this view to your main layout --}}

@section('title', 'Urban Hotels - Luxury Hotel & Resort') {{-- Sets the title for this specific page --}}

@section('content')
    <!-- banner area -->
    <div class="rts__section banner__area is__home__one banner__height banner__center">
        <div class="banner__slider overflow-hidden">
            <div class="swiper-wrapper">
                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image">
                        <img src="{{ asset('assets/images/banner/1.webp') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Welcome to Our Hotel</span>
                                    <h1>Luxury Stay Hotel Experience Comfort & Elegance</h1>
                                    <p class="sub__text">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner</p>
                                    <a href="room-two.html" class="theme-btn btn-style fill no-border "><span>Discover Room</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image">
                        <img src="{{ asset('assets/images/banner/2.webp') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Welcome to Our Spa</span>
                                    <h1>Lavish Getaway A Blend of Comfort & Style</h1>
                                    <p class="sub__text">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner</p>
                                    <a href="room-one.html" class="theme-btn btn-style fill no-border "><span>Discover Room</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image">
                        <img src="{{ asset('assets/images/banner/banner-3.webp') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Welcome to Our Spa</span>
                                    <h1> A Perfect Fusion of Comfort and Elegance</h1>
                                    <p class="sub__text">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner</p>
                                    <a href="room-one.html" class="theme-btn btn-style fill no-border "><span>Discover Room</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

            </div>
            <div class="rts__slider__nav">
                <div class="rts__slide">
                    <div class="next">
                        <svg width="40" height="22" viewBox="0 0 40 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.255 9.75546H39.0404C39.7331 9.75546 40.2927 10.3151 40.2927 11.0078C40.2927 11.7005 39.7331 12.2601 39.0404 12.2601H4.28018L11.8803 19.8603C12.3695 20.3495 12.3695 21.1439 11.8803 21.6331C11.3911 22.1223 10.5967 22.1223 10.1075 21.6331L0.366619 11.8923C0.00657272 11.5322 -0.0990982 10.9961 0.0965805 10.5264C0.292259 10.0607 0.750149 9.75546 1.255 9.75546Z" fill="#F1F1F1" />
                            <path d="M11.0077 0.00274277C11.3286 0.00274277 11.6495 0.124063 11.8921 0.370618C12.3813 0.859813 12.3813 1.65426 11.8921 2.14346L2.13955 11.896C1.65036 12.3852 0.855906 12.3852 0.366712 11.896C-0.122483 11.4068 -0.122483 10.6124 0.366712 10.1232L10.1193 0.370618C10.3658 0.124063 10.6868 0.00274277 11.0077 0.00274277Z" fill="#F1F1F1" />
                        </svg>
                    </div>
                </div>
                <div class="rts__slide">
                    <div class="prev">
                        <svg width="40" height="22" viewBox="0 0 40 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.0377 12.2445L1.25234 12.2445C0.559636 12.2445 -2.04305e-06 11.6849 -1.92194e-06 10.9922C-1.80082e-06 10.2995 0.559637 9.73987 1.25234 9.73987L36.0125 9.73987L28.4124 2.13974C27.9232 1.65055 27.9232 0.856096 28.4124 0.366901C28.9016 -0.122294 29.6961 -0.122293 30.1853 0.366901L39.9261 10.1077C40.2861 10.4678 40.3918 11.004 40.1961 11.4736C40.0005 11.9393 39.5426 12.2445 39.0377 12.2445Z" fill="#F1F1F1" />
                            <path d="M29.2852 21.9973C28.9643 21.9973 28.6433 21.8759 28.4007 21.6294C27.9115 21.1402 27.9115 20.3457 28.4007 19.8565L38.1533 10.104C38.6425 9.61476 39.4369 9.61476 39.9261 10.104C40.4153 10.5932 40.4153 11.3876 39.9261 11.8768L30.1736 21.6294C29.927 21.8759 29.6061 21.9973 29.2852 21.9973Z" fill="#F1F1F1" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- banner area end -->

    <!-- advance search -->
    <div class="rts__section advance__search__section is__home__one">
        <div class="container">
            <div class="row">
                <form action="{{ route('urbanRedRooms.index') }}" method="post" class="advance__search">
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
    <div class="rts__section about__area is__home__main section__padding">
        <div class="section__shape d-none d-xl-block">
            <img src="{{ asset('assets/images/about/section__shape.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="about__wrapper">
                    <div class="image ">
                        <div class="position-relative  wow fadeInUp" data-wow-delay=".3s">
                            <div class="jara-mask-1 jarallax image-height">
                                <img src="{{ asset('assets/images/about/about-1.webp')}}" class="jarallax-img" alt="">
                            </div>
                        </div>
                        <div class="image__card radius-10 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon radius-10 center-item">
                                <i class="flaticon-people"></i>
                            </div>
                            <div class="content">
                                <span class="h5">50+</span>
                                <p>Experience Staff</p>
                            </div>
                        </div>
                        <div class="image__card__image wow fadeInUp">
                            <img src="{{ asset('assets/images/about/about-main.webp')}}" width="312" height="230" alt="">
                        </div>
                    </div>
                    <div class="content">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">About Us</span>
                        <h2 class="content__title wow fadeInUp">Welcome To Our Urban Hotel & Resort</h2>
                        <p class="content__subtitle wow fadeInUp" data-wow-delay=".3s">Welcome to Bokinn, where luxury meets comfort in the heart of canada. Since 1999,
                            we have been dedicated to providing an exceptional stay for our guests, blending
                            modern amenities with timeless elegance.Our beautifully designed rooms and suites
                            offer stunning views and plush accommodations, ensuring a restful retreat whether
                            you're here for business or leisure.</p>
                        <a href="#" class="theme-btn btn-style fill no-border wow fadeInUp" data-wow-delay=".5s"><span>Learn More</span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- facilities -->
    <div class="rts__section facilities__area has__background has__shape py-90">
        <div class="section__shape">
            <img src="{{ asset('assets/images/shape/facility-1.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Facilities</span>
                        <h2 class="section__title">Hotel Facilities</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6">
                        <div class="card-body">
                            <div class="icon"><img src="{{ asset('assets/images/icon/bed.svg')}}" alt=""></div>
                            <a href="#">
                                <h6 class="card-title h6 mb-15">Rooms and Suites</h6>
                            </a>
                            <p class="card-text">Varied types of rooms, from standard to luxury suites, equipped with essentials like beds.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6">
                        <div class="card-body">
                            <div class="icon"><img src="{{ asset('assets/images/icon/security.svg')}}" alt=""></div>
                            <a href="#">
                                <h6 class="card-title h6 mb-15">24-Hour Security</h6>
                            </a>
                            <p class="card-text">On-site security personnel and best surveillance. from standard to luxury suites,Secure storage for valuables.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6">
                        <div class="card-body">
                            <div class="icon"><img src="{{ asset('assets/images/icon/gym.svg')}}" alt=""></div>
                            <a href="#">
                                <h6 class="card-title h6 mb-15">Fitness Center</h6>
                            </a>
                            <p class="card-text">Equipped with exercise machines and weights.Offering massages, facials, and other treatments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6">
                        <div class="card-body">
                            <div class="icon"><img src="{{ asset('assets/images/icon/swimming-pool.svg')}}" alt=""></div>
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
    <!-- facilities end -->

    <!-- our room -->
    <div class="rts__section pt-120">
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Room</span>
                        <h2 class="content__title h2 lh-1">Our Rooms</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest. Each room features plush bedding, high-quality linens, and a selection of pillows to ensure a restful night's sleep.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="main__room__slider overflow-hidden wow fadeInUp" data-wow-delay=".5s">
                <div class="swiper-wrapper">
                    {{-- Loop through each room in the $rooms collection --}}
                    @foreach ($rooms as $room)
                        <div class="swiper-slide">
                            <div class="room__slide__box radius-6">
                                <div class="room__thumbnail jara-mask-2 jarallax">
                                    {{-- Dynamic image path using asset() and $loop->index for unique images --}}
                                    <img height="585" width="420" class="radius-6 jarallax-img"
                                         src="{{ asset('assets/images/room/' . ($loop->index + 1) . '.webp') }}" alt="room image">
                                    {{-- IMPORTANT: Check the original image path. If it was 'assets/images/room/1.webp', then keep 'assets/images/room/'. --}}
                                    {{-- If it was 'assets/images/pages/room/', adjust accordingly. --}}
                                </div>
                                <div class="room__content">
                                    {{-- Dynamic room type --}}
                                    <a href="{{ route('room.show', $room->id) }}">
                                        <h5>{{ $room->room_name }}</h5> {{-- Assuming 'room_type' is the correct attribute --}}
                                    </a>
                                    <div class="room__content__meta">
                                        {{-- These are hardcoded in the original, update if dynamic from DB --}}
                                        <span><i class="flaticon-construction"></i> 35 sqm</span>
                                        <span><i class="flaticon-user"></i>2 Person</span>
                                    </div>
                                    {{-- Dynamic price --}}
                                    <span class="h4 rent mb-0 mt-15 d-block">${{ number_format($room->room_rate, 2) }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
                {{-- If your original slider had navigation arrows or pagination dots, they would go here --}}
                {{-- <div class="swiper-button-next"></div> --}}
                {{-- <div class="swiper-button-prev"></div> --}}
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
        </div>
    </div>

            <!-- pagination button -->
            <div class="rts__pagination">
                <div class="rts-pagination"></div>
            </div>
            <!-- pagination button end -->
        </div>
    </div>
    <!-- our room end -->

    <!-- special section start -->
    <div class="rts__section offer__area is__home__one has__shape">
        <div class="container">
            <div class="row position-relative justify-content-center text-center mb-30">
                <div class="col-lg-6 wow fadeInUp">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Special Offer</span>
                        <h2 class="section__title">Special Offer</h2>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row justify-content-center g-30">
                <div class="col-lg-10 col-xl-6 col-xxl-5">
                    <div class="single__offer__card">
                        <a href="#">
                            <img src="{{ asset('assets/images/offer/5.webp')}}" alt="">
                        </a>
                        <div class="single__offer__card__content">
                            <a href="#" class="h4">Family Fun Package</a>
                            <ul class="offer__included list-unstyled">
                                <li><i class="flaticon-check-circle"></i> 15% off on family suites</li>
                                <li><i class="flaticon-check-circle"></i> Free meals for kids under 12</li>
                                <li><i class="flaticon-check-circle"></i> Complimentary tickets</li>
                                <li><i class="flaticon-check-circle"></i> The local amusement park</li>
                            </ul>
                            <h3 class="offer__price mb-0">$39.00</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-xl-6 col-xxl-7">
                    <div class="d-flex flex-column gap-30">

                        <div class="single__offer__card is__flex">
                            <a href="#">
                                <img src="{{ asset('assets/images/offer/6.webp')}}" width="265" height="310" alt="">
                            </a>
                            <div class="single__offer__card__content">
                                <a href="#" class="h5">Spa Retreat</a>
                                <ul class="offer__included list-unstyled">
                                    <li><i class="flaticon-check-circle"></i> A two-night stay in a room</li>
                                    <li><i class="flaticon-check-circle"></i> Daily spa treatments</li>
                                    <li><i class="flaticon-check-circle"></i> Healthy breakfast and lunch</li>
                                    <li><i class="flaticon-check-circle"></i> Access to all spa </li>
                                </ul>
                                <h4 class="offer__price mb-0">$39.00</h4>
                            </div>
                        </div>

                        <div class="single__offer__card is__flex">
                            <a href="#">
                                <img src="{{ asset('assets/images/offer/7.webp" width="265')}}" height="310" alt="">
                            </a>
                            <div class="single__offer__card__content">
                                <a href="#" class="h5">Romantic Getaway</a>
                                <ul class="offer__included list-unstyled">
                                    <li><i class="flaticon-check-circle"></i> A two-night stay in a room</li>
                                    <li><i class="flaticon-check-circle"></i> Daily spa treatments</li>
                                    <li><i class="flaticon-check-circle"></i> Healthy breakfast and lunch</li>
                                    <li><i class="flaticon-check-circle"></i> Access to all spa </li>
                                    <h4 class="offer__price mb-0">$39.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- special section end -->

    <!-- gallery -->
    <div class="rts__section is__home__main">
        <div class="container-fluid">
            <div class="row position-relative justify-content-center text-center mb-30">
                <div class="col-lg-6 wow fadeInUp">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Instagram Post</span>
                        <h2 class="section__title">Follow on Instagram</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="insta__gallery__slider overflow-hidden">
                    <div class="swiper-wrapper gallery">
                        <!-- single gallery image -->
                        <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{ asset('assets/images/insta/1.webp')}}" height="300" width="300" alt="">
                                <a href="{{ asset('assets/images/insta/1.webp')}}" class="gallery__popup">
                                    <img src="{{ asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single gallery image end -->
                        <!-- single gallery image -->
                        <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{ asset('assets/images/insta/2.webp')}}" height="300" width="300" alt="">
                                <a href="{{ asset('assets/images/insta/2.webp')}}" class="gallery__popup">
                                    <img src="{{ asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single gallery image end -->
                        <!-- single gallery image -->
                        <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{ asset('assets/images/insta/3.webp')}}" height="300" width="300" alt="">
                                <a href="{{ asset('assets/images/insta/3.webp')}}" class="gallery__popup">
                                    <img src="{{ asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single gallery image end -->
                        <!-- single gallery image -->
                        <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{ asset('assets/images/insta/4.webp')}}" height="300" width="300" alt="">
                                <a href="{{ asset('assets/images/insta/4.webp')}}" class="gallery__popup">
                                    <img src="{{ asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single gallery image end -->
                        <!-- single gallery image -->
                        <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{ asset('assets/images/insta/5.webp')}}" height="300" width="300" alt="">
                                <a href="{{ asset('assets/images/insta/5.webp')}}" class="gallery__popup">
                                    <img src="{{ asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single gallery image end -->

                        <!-- single gallery image -->
                        <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{ asset('assets/images/insta/6.webp')}}" height="300" width="300" alt="">
                                <a href="{{ asset('assets/images/insta/6.webp')}}" class="gallery__popup">
                                    <img src="{{ asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single gallery image end -->

                        <!-- single gallery image -->
                        <div class="swiper-slide">
                            <div class="gallery__item">
                                <img src="{{ asset('assets/images/insta/1.webp')}}" height="300" width="300" alt="">
                                <a href="{{ asset('assets/images/insta/1.webp')}}" class="gallery__popup">
                                    <img src="{{ asset('assets/images/icon/instagram.svg')}}" height="40" width="40" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single gallery image end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery end -->




@endsection

{{--
@push('scripts')
    <script src="{{ asset('assets/js/homepage-animations.js') }}"></script>
@endpush
--}}
