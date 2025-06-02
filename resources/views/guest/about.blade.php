@extends('layouts.app') {{-- This line links this view to your main layout --}}

@section('title', 'Urban Hotels - Luxury Hotel & Resort') {{-- Sets the title for this specific page --}}

@section('content')
    <div class="rts__section page__hero__height page__hero__bg" style="background-image: url(assets/images/pages/header__bg.webp);">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="page__hero__content">
                        <h1 class="wow fadeInUp">About Us</h1>
                        <p class="wow fadeInUp font-sm">Welcome to Bokinn, where luxury meets comfort in the heart of canada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page header end -->
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

    <!-- our facility -->
    <div class="rts__section facility__area is__about has__background has__shape">
        <div class="section__shape wow fadeInRight" data-wow-delay=".5s">
            <img src="assets/images/pages/about-shape.svg" alt="">
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="facility__content">
                        <div class="section__content__left">
                            <span class="h6 subtitle__icon__two d-block wow fadeInUp">Facilities</span>
                            <h2 class="content__title h2 lh-1">Hotel Facilities</h2>
                        </div>
                        <div class="row mt-20 g-5 wow fadeInUp" data-wow-delay=".5s">
                            <div class="col-lg-6 col-md-6">
                                <div class="card rts__card no-border is__home__three">
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
                                <div class="card rts__card no-border is__home__three">
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
                                <div class="card rts__card no-border is__home__three">
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
                                <div class="card rts__card no-border is__home__three">
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
                <div class="col-lg-6">
                    <div class="facility__image jara-mask-3 jarallax">
                        <img height="765" width="605" class="jarallax-img" src="assets/images/index-3/facility.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our facility end -->

    <!-- team -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Our Team</span>
                        <h2 class="section__title">Meet The Team</h2>
                    </div>
                </div>
            </div>
            <div class="row g-30">
                <div class="col-lg-3 col-md-6">
                    <div class="team__member">
                        <a href="#">
                            <div class="team__member__thumb">
                                <img src="assets/images/pages/team/1.webp" alt="">
                            </div>
                        </a>
                        <div class="team__member__meta">
                            <a href="#" class="h6">Emma Elizabeth</a>
                            <span class="designation">Manager</span>
                            <div class="team__member__social">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-linkedin"></i></a>
                                <a href="#"><i class="flaticon-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team__member">
                        <a href="#">
                            <div class="team__member__thumb">
                                <img src="assets/images/pages/team/2.webp" alt="">
                            </div>
                        </a>
                        <div class="team__member__meta">
                            <a href="#" class="h6">Jonathon Doe</a>
                            <span class="designation">Assitant Manager</span>
                            <div class="team__member__social">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-linkedin"></i></a>
                                <a href="#"><i class="flaticon-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team__member">
                        <a href="#">
                            <div class="team__member__thumb">
                                <img src="assets/images/pages/team/3.webp" alt="">
                            </div>
                        </a>
                        <div class="team__member__meta">
                            <a href="#" class="h6">Emma Elizabeth</a>
                            <span class="designation">General Manager</span>
                            <div class="team__member__social">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-linkedin"></i></a>
                                <a href="#"><i class="flaticon-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team__member">
                        <a href="#">
                            <div class="team__member__thumb">
                                <img src="assets/images/pages/team/4.webp" alt="">
                            </div>
                        </a>
                        <div class="team__member__meta">
                            <a href="#" class="h6">Jhon Doe</a>
                            <span class="designation">Quality Inspector</span>
                            <div class="team__member__social">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-linkedin"></i></a>
                                <a href="#"><i class="flaticon-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- team end -->


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