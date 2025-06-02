@extends('layouts.app') {{-- This line links this view to your main layout --}}

@section('title', 'Urban Hotels - Luxury Hotel & Resort') {{-- Sets the title for this specific page --}}

@section('content')
    <!-- page header -->
    <div class="rts__section page__hero__height page__hero__bg if__has__search" style="background-image: url(assets/images/pages/header__bg.webp);">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="page__hero__content">
                        <h1 class="wow fadeInUp">Deluxe Room</h1>
                        <p class="wow fadeInUp font-sm">A step up from the standard room, often with better views, more space, and additional amenities.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-60 text-start">
                <form action="#" method="post" class="advance__search">
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
                            <label for="adult" class="query__label">Adult</label>
                            <div class="query__input__position">
                                <select name="adult" id="adult" class="form-select">
                                    <option value="1">1 Person</option>
                                    <option value="2">2 Person</option>
                                    <option value="3">3 Person</option>
                                    <option value="4">4 Person</option>
                                    <option value="5">5 Person</option>
                                    <option value="6">6 Person</option>
                                    <option value="7">7 Person</option>
                                </select>
                                <div class="query__input__icon">
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                        </div>
                        <!-- single input end -->

                        <!-- single input -->
                        <div class="query__input">
                            <label for="child" class="query__label">Child</label>
                            <div class="query__input__position">
                                <select name="child" id="child" class="form-select">
                                    <option value="1">1 Child</option>
                                    <option value="2">2 Child</option>
                                    <option value="3">3 Child</option>
                                    <option value="4">4 Child</option>
                                    <option value="5">5 Child</option>
                                    <option value="6">6 Child</option>
                                    <option value="7">7 Child</option>
                                </select>
                                <div class="query__input__icon">
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                        </div>
                        <!-- single input end -->

                        <!-- submit button -->
                        <button class="theme-btn btn-style fill no-border search__btn">
                            <span><i class="flaticon-search-1"></i> Search</span>
                        </button>
                        <!-- submit button end -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- page header end -->

    <!-- single rooms -->
    <div class="rts__section section__padding">
        <div class="container">
            <!-- row -->
            <div class="row g-30">
                <!-- single room -->
                <div class="col-lg-6">
                    <div class="room__card is__style__three">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                <a href="room-details-1.html">
                                    <img src="assets/images/pages/room/1.webp" width="645" height="415" alt="room card">
                                </a>
                            </div>
                            <div class="room__price__tag">
                                <span class="h6 d-block">120$</span>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            <a href="room-details-1.html" class="room__card__title h4">Deluxe Room</a>
                            <div class="room__card__meta__info">
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <p class="font-sm">A step up from the standard room, often with better views, more space, and additional amenities.</p>
                            <a href="room-details-1.html" class="room__card__link">Discover More</a>

                        </div>
                    </div>
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    <div class="room__card is__style__three">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                <a href="room-details-1.html">
                                    <img src="assets/images/pages/room/2.webp" width="645" height="415" alt="room card">
                                </a>
                            </div>
                            <div class="room__price__tag">
                                <span class="h6 d-block">140$</span>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            <a href="room-details-1.html" class="room__card__title h4">Single Room</a>
                            <div class="room__card__meta__info">
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <p class="font-sm">A step up from the standard room, often with better views, more space, and additional amenities.</p>
                            <a href="room-details-1.html" class="room__card__link">Discover More</a>

                        </div>
                    </div>
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    <div class="room__card is__style__three">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                <a href="room-details-1.html">
                                    <img src="assets/images/pages/room/3.webp" width="645" height="415" alt="room card">
                                </a>
                            </div>
                            <div class="room__price__tag">
                                <span class="h6 d-block">122$</span>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            <a href="room-details-1.html" class="room__card__title h4">Triple Room</a>
                            <div class="room__card__meta__info">
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <p class="font-sm">Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.</p>
                            <a href="room-details-1.html" class="room__card__link">Discover More</a>

                        </div>
                    </div>
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    <div class="room__card is__style__three">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                <a href="room-details-1.html">
                                    <img src="assets/images/pages/room/4.webp" width="645" height="415" alt="room card">
                                </a>
                            </div>
                            <div class="room__price__tag">
                                <span class="h6 d-block">120$</span>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            <a href="room-details-1.html" class="room__card__title h4">Connecting Room</a>
                            <div class="room__card__meta__info">
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <p class="font-sm">Designed for business travelers, these rooms usually have additional workspaces and business amenities.</p>
                            <a href="room-details-1.html" class="room__card__link">Discover More</a>

                        </div>
                    </div>
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    <div class="room__card is__style__three">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                <a href="room-details-1.html">
                                    <img src="assets/images/pages/room/5.webp" width="645" height="415" alt="room card">
                                </a>
                            </div>
                            <div class="room__price__tag">
                                <span class="h6 d-block">120$</span>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            <a href="room-details-1.html" class="room__card__title h4">Accessible Room</a>
                            <div class="room__card__meta__info">
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <p class="font-sm">A larger room or a series of connected rooms, often with separate living and sleeping areas. Types of suites include</p>
                            <a href="room-details-1.html" class="room__card__link">Discover More</a>

                        </div>
                    </div>
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-lg-6">
                    <div class="room__card is__style__three">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                <a href="room-details-1.html">
                                    <img src="assets/images/pages/room/6.webp" width="645" height="415" alt="room card">
                                </a>
                            </div>
                            <div class="room__price__tag">
                                <span class="h6 d-block">120$</span>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            <a href="room-details-1.html" class="room__card__title h4">Double Room</a>
                            <div class="room__card__meta__info">
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <p class="font-sm">Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.</p>
                            <a href="room-details-1.html" class="room__card__link">Discover More</a>

                        </div>
                    </div>
                </div>
                <!-- single room end -->


            </div>
            <!-- row end -->
            <div class="load__more__link">
                <a href="#">Load More</a>
            </div>
        </div>
    </div>
    <!-- single rooms end -->


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