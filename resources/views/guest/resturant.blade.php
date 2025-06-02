@extends('layouts.app') {{-- This line links this view to your main layout --}}

@section('title', 'Urban Hotels - Luxury Hotel & Resort') {{-- Sets the title for this specific page --}}

@section('content')
    <div class="rts__section page__hero__height page__hero__bg" style="background-image: url(assets/images/pages/header__bg.webp);">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="page__hero__content">
                        <h1 class="wow fadeInUp">The Restaurant</h1>
                        <p class="wow fadeInUp font-sm">Whether you are in the mood for a leisurely breakfast, a business lunch, or a romantic dinner.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page header end -->
    <!-- about us -->
    <div class="rts__section about is__resturant section__padding">
        <div class="container">
            <div class="row g-4 align-items-center  ">
                <div class="col-lg-5">
                    <div class="about__images">
                        <div class="image__left wow fadeInUp">
                            <img height="648" width="428" src="assets/images/pages/resturant/1.webp" alt="">
                        </div>
                        <div class="image__right wow fadeInUp">
                            <img width="428" height="648" src="assets/images/pages/resturant/2.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__content">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Hotel Experience</span>
                        <h2 class="font-xl wow fadeInUp">From Farm to Fork: Enjoy Fresh, Seasonal Dishes at Bokinn</h2>
                        <p class="font-sm mt-30 wow fadeInUp" data-wow-delay=".3s">
                            Welcome to Bokinn, where luxury meets comfort in the heart of canada. Since 1999,
                            we have been dedicated to providing an exceptional stay for our guests, blending
                            modern amenities with timeless elegance.Our beautifully designed rooms and suites
                            offer stunning views and plush accommodations, ensuring a restful retreat whether
                            you're here for business or leisure.
                        </p>
                        <div class="reservation__meta wow fadeInUp">
                            <div class="reservation__item">
                                <p class="font-sm">Reservation By Phone</p>
                                <a href="tel:+12505550199"><img src="assets/images/icon/phone.svg" alt=""> +12505550199</a>
                            </div>
                            <div class="reservation__item">
                                <p class="font-sm">Opening Hours</p>
                                <span><img src="assets/images/icon/clock.svg" alt="">10 Am - 12Pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- restaurant room -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Gallery</span>
                        <h2 class="section__title">Our Restaurant Gallery</h2>
                    </div>
                    <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest Each room features plush bedding.</p>
                </div>
            </div>
            <div class="row g-30 gallery">

                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="assets/images/pages/resturant/gallery/1.webp" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="assets/images/pages/resturant/gallery/1.webp" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="assets/images/pages/resturant/gallery/2.webp" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="assets/images/pages/resturant/gallery/2.webp" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="assets/images/pages/resturant/gallery/3.webp" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="assets/images/pages/resturant/gallery/3.webp" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="gallery__item">
                        <a href="assets/images/pages/resturant/gallery/4.webp" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="assets/images/pages/resturant/gallery/4.webp" alt="gallery">
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="gallery__item">
                        <a href="assets/images/pages/resturant/gallery/5.webp" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="assets/images/pages/resturant/gallery/5.webp" alt="gallery">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- restaurant room end -->

    <!-- restaurant menu -->
    <div class="rts__section resturant__menu__bg section__padding">
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Menu</span>
                        <h2 class="content__title h2 lh-1">Restaurant Menu</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="resturant__menu__list">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">Small Plates</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cold" aria-controls="cold">Cold Appetizers</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#vegan" aria-controls="vegan">Vegetarian & Vegan</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#burger" type="button" role="tab" aria-controls="burger" aria-selected="true">Burgers & Sandwiches</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dips" aria-controls="dips">Dips & Spreads</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#seafood" aria-controls="seafood">Seafood Specialties</button>
                        </div>
                    </div>
                    <!-- resturant menu content -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all">
                            <div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/1.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/2.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/3.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/4.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/5.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/6.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cold" role="tabpanel" aria-labelledby="cold">
                            <div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/1.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/2.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/3.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/4.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/5.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/6.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="vegan" role="tabpanel" aria-labelledby="vegan">
                            <div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/1.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/2.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/3.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/4.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/5.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/6.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="burger" role="tabpanel" aria-labelledby="burger">
                            <div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/1.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/2.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/3.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/4.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/5.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/6.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dips" role="tabpanel" aria-labelledby="dips">
                            <div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/1.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/2.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/3.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/4.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/5.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/6.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seafood" role="tabpanel" aria-labelledby="seafood">
                            <div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/1.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/2.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/3.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/4.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>

                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/5.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="assets/images/pages/resturant/6.jpg" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- resturant menu content end -->
                </div>
            </div>
        </div>
    </div>
    <!-- restaurant menu end -->

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
@endsection