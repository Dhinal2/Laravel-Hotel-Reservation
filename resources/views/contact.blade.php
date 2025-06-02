@extends('layouts.app') 

@section('title', 'Urban Hotels - Luxury Hotel & Resort')

@section('content')

    <!-- page header -->
    <div class="rts__section page__hero__height page__hero__bg" style="background-image: url(assets/images/pages/header__bg.webp);">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="page__hero__content">
                        <h1 class="wow fadeInUp">Contact Us</h1>
                        <p class="wow fadeInUp font-sm">Whether you have questions, need assistance, or simply want to share.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page header end -->

    <!-- contact area -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row g-30 align-items-center">
                <div class="col-lg-6">
                    <div class="rts__contact">
                        <span class="h4 d-block mb-30 text-center">Love to hear from you
                            Get in touch!</span>
                        <form action="mailer.php" method="post" class="rts__contact__form" id="contact-form">
                            <div class="form-input">
                                <label for="name">Your Name</label>
                                <div class="pr">
                                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="email">Your Email</label>
                                <div class="pr">
                                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                                    <i class="flaticon-envelope"></i>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="msg">Your Message</label>
                                <div class="pr">
                                    <textarea id="msg" name="msg" placeholder="Message" required></textarea>
                                    <img src="assets/images/icon/message.svg" width="20" height="20" alt="">
                                </div>
                            </div>
                            <button type="submit" class="theme-btn btn-style fill w-100"><span>Send Message</span></button>
                        </form>
                        <div id="form-messages" class="mt-20"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__image">
                        <img class="rounded-2 w-100 img-fluid" src="assets/images/pages/contact.webp" width="645" height="560" alt="contact__image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-120">
            <div class="row g-30 align-items-center">
                <div class="col-lg-6">
                    <div class="contact__map">
                        <iframe class="w-100" height="560" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=phuket+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__info">

                        <div class="contact__info__item">
                            <h4>Hotel Info Center</h4>
                            <p>
                                Open Hours: Monday – Sunday <br>
                                Telephone: +12505550199 <br>
                                Fax: +12505550199 <br>
                                Email: info@moonlit.com
                            </p>
                        </div>
                        <div class="contact__info__item">
                            <h4>Hotel location</h4>
                            <p>
                                Address: The Ritz-Carlton (California, USA) <br>
                                Telephone: +12505550199 <br>
                                Fax: +12505550199 <br>
                                Email: info@moonlit.com
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- footer style one -->


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

    <!-- offcanvase menu -->
    <div class="offcanvas offcanvas-start" id="offcanvasRight">
        <div class="rts__btstrp__offcanvase">
            <div class="offcanvase__wrapper">
                <div class="left__side mobile__menu">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="offcanvase__top">
                        <div class="offcanvase__logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo__two.svg" alt="logo">
                            </a>
                        </div>
                        <p class="description">
                            Welcome to Moonlit, where luxury meets comfort in the heart of canada. Since 1999, we have been dedicated to providing.
                        </p>
                    </div>
                    <div class="offcanvase__mobile__menu">
                        <div class="mobile__menu__active"></div>
                    </div>
                    <div class="offcanvase__bottom">
                        <div class="offcanvase__address">

                            <div class="item">
                                <span class="h6">Phone</span>
                                <a href="tel:+1234567890"><i class="flaticon-phone-flip"></i> +1234567890</a>
                            </div>
                            <div class="item">
                                <span class="h6">Email</span>
                                <a href="mailto:info@hostie.com"><i class="flaticon-envelope"></i>info@hostie.com</a>
                            </div>
                            <div class="item">
                                <span class="h6">Address</span>
                                <a href="#"><i class="flaticon-marker"></i> 280 Augusta Avenue, M5T 2L9 Toronto, Canada</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="right__side desktop__menu">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="rts__desktop__menu">
                        <nav class="desktop__menu offcanvas__menu">
                            <ul class="list-unstyled">
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="#">Home
                                        <span class="toggle"></span>
                                    </a>
                                    <ul class="slide__menu">
                                        <li><a href="index.html">Luxury Hotel</a></li>
                                        <li><a href="index-2.html">Luxe Vista Hotel</a></li>
                                        <li><a href="index-3.html">Ocean Breeze Hotel</a></li>
                                        <li><a href="index-4.html">Apartment Hotel</a></li>
                                        <li><a href="index-5.html">Mountain Hotel</a></li>
                                        <li><a href="index-6.html">City Hotel</a></li>
                                        <li><a href="index-7.html">Beach Hotel</a></li>
                                        <li><a href="index-dark.html">Hotel Dark</a></li>
                                        <li><a href="index-video.html">Hotel Seaside</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="slide__menu__item" href="about.html">About us
                                    </a>
                                </li>
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="#">Rooms
                                        <span class="toggle"></span>
                                    </a>
                                    <ul class="slide__menu">
                                        <li><a href="room-one.html">Room One</a></li>
                                        <li><a href="room-two.html">Room Two</a></li>
                                        <li><a href="room-three.html">Room Three</a></li>
                                        <li><a href="room-four.html">Room Four</a></li>
                                        <li><a href="room-details-1.html">Room Details One</a></li>
                                        <li><a href="room-details-2.html">Room Details Two</a></li>
                                    </ul>
                                </li>
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="#">Blog
                                        <span class="toggle"></span>
                                    </a>
                                    <ul class="slide__menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="#">Pages
                                        <span class="toggle"></span>
                                    </a>
                                    <ul class="slide__menu">
                                        <li><a href="resturant.html">Resturant</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="event.html">Event</a></li>
                                        <li><a href="activities.html">Activities</a></li>
                                    </ul>
                                </li>
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="contact.html">Contact Us
                                    </a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection