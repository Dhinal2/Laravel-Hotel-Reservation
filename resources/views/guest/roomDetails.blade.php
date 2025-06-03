@extends('layouts.app') {{-- This line links this view to your main layout --}}

@section('title', 'Urban Hotels - Luxury Hotel & Resort') {{-- Sets the title for this specific page --}}

@section('content')

    <!-- page header -->
    ---
    <div class="rts__section page__hero__height page__hero__bg no__shadow" style="background-image: url('{{ asset('assets/images/pages/header__bg.webp') }}');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="page__hero__content visually-hidden">
                        <h1 class="wow fadeInUp">no-title</h1>
                        <p class="wow fadeInUp font-sm">visually-hidden</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page header end -->

    <!-- Room Details Begins -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row g-5 sticky-wrap">
                <div class="col-xxl-8 col-xl-7">
                    <div class="room__details">
                        <span class="h4 price">{{ $room->room_rate }}$</span>
                        <h2 class="room__title">{{ $room->room_name }}</h2>
                        <div class="room__meta">
                            <span><i class="flaticon-construction"></i>35 sqm</span>
                            <span><i class="flaticon-user"></i>5 Person</span>
                        </div>
                        <p>
                            Our elegantly appointed rooms and suites are designed to offer the utmost in comfort and
                            style. Each room features modern amenities, plush furnishings, and thoughtful touches to
                            ensure a relaxing stay.
                            <br> <br>
                            Indulge in a culinary journey at our on-site restaurants, where our talented chefs create
                            mouthwatering dishes using the freshest local ingredients. Start your day with a sumptuous
                            breakfast, enjoy a leisurely lunch, and savor a gourmet dinner in an elegant setting.
                        </p>
                        <div class="room__image__group row row-cols-md-2 row-cols-sm-1 mt-30 mb-50 gap-4 gap-md-0">
                            <div class="room__image__item">
                                {{-- USE asset() HELPER HERE --}}
                                <img class="rounded-2" src="{{ asset('assets/images/pages/room/r-d-1.webp') }}" alt="Room Image 1">
                            </div>
                            <div class="room__image__item">
                                {{-- USE asset() HELPER HERE --}}
                                <img class="rounded-2" src="{{ asset('assets/images/pages/room/r-d-2.webp') }}" alt="Room Image 2">
                            </div>
                        </div>
                        <span class="h4 d-block mb-30">Room Amenities</span>
                        <div class="room__amenity mb-50">
                            <div class="group__row">
                                <div class="single__item">
                                    {{-- USE asset() HELPER HERE for icons --}}
                                    <img src="{{ asset('assets/images/icon/wifi.svg') }}" height="30" width="36" alt="">
                                    <span>Free Wifi</span>
                                </div>
                                <div class="single__item">
                                    {{-- USE asset() HELPER HERE --}}
                                    <img src="{{ asset('assets/images/icon/shower.svg') }}" height="30" width="36" alt="">
                                    <span>Shower</span>
                                </div>
                                <div class="single__item">
                                    {{-- USE asset() HELPER HERE --}}
                                    <img src="{{ asset('assets/images/icon/aeroplane.svg') }}" height="30" width="36" alt="">
                                    <span>Airport transport</span>
                                </div>
                            </div>
                            <div class="group__row">
                                <div class="single__item">
                                    {{-- USE asset() HELPER HERE --}}
                                    <img src="{{ asset('assets/images/icon/balcony.svg') }}" height="30" width="36" alt="">
                                    <span>Balcony</span>
                                </div>
                                <div class="single__item">
                                    {{-- USE asset() HELPER HERE --}}
                                    <img src="{{ asset('assets/images/icon/refrigerator.svg') }}" height="30" width="36" alt="">
                                    <span>Refrigerator</span>
                                </div>
                                <div class="single__item">
                                    {{-- USE asset() HELPER HERE --}}
                                    <img src="{{ asset('assets/images/icon/support.svg') }}" height="30" width="36" alt="">
                                    <span>24/7 Support</span>
                                </div>
                            </div>
                            <div class="group__row">
                                <div class="single__item">
                                    {{-- USE asset() HELPER HERE --}}
                                    <img src="{{ asset('assets/images/icon/desk.svg') }}" height="30" width="36" alt="">
                                    <span>Work Desk</span>
                                </div>
                                <div class="single__item">
                                    {{-- USE asset() HELPER HERE --}}
                                    <img src="{{ asset('assets/images/icon/fitness.svg') }}" height="30" width="36" alt="">
                                    <span>Fitness Center</span>
                                </div>
                                <div class="single__item">
                                    {{-- USE asset() HELPER HERE --}}
                                    <img src="{{ asset('assets/images/icon/swimming-pool.svg') }}" height="30" width="36" alt="">
                                    <span>Swimming Pool</span>
                                </div>
                            </div>
                        </div>
                        <span class="h4 d-block mb-50">Room Features</span>
                        <div class="room__feature mb-30">
                            <div class="room__feature__image mb-50">
                                {{-- USE asset() HELPER HERE --}}
                                <img class="rounded-2" src="{{ asset('assets/images/pages/room/r-d-3.webp') }}" alt="Room Features Image">
                            </div>
                            <div class="group__row">
                                <ul class="list__item">
                                    <li>Children and extra beds</li>
                                    <li>Climate Control</li>
                                    <li>Art and Decor</li>
                                    <li>Coffee/Tea Maker</li>
                                    <li>High-End Bedding</li>
                                    <li>Smart Technology</li>
                                </ul>
                            </div>
                        </div>
                        <p>Our elegantly appointed rooms and suites are designed to offer the utmost in comfort and style. Each room features modern amenities, plush furnishings, and thoughtful touches to ensure a relaxing stay.</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 sticky-item">
                    <div class="rts__booking__form has__background is__room__details">
                        <form action="#" method="post" class="advance__search">
                            @csrf
                            <h5 class="pt-0">Book Your Stay</h5>
                            <div class="advance__search__wrapper">
                                <div class="query__input wow fadeInUp">
                                    <label for="check__in" class="query__label">Check In</label>
                                    <div class="query__input__position">
                                        <input type="text" id="check__in" name="check__in" placeholder="15 Jun 2024" required>
                                        <div class="query__input__icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="query__input wow fadeInUp" data-wow-delay=".3s">
                                    <label for="check__out" class="query__label">Check Out</label>
                                    <div class="query__input__position">
                                        <input type="text" id="check__out" name="check__out" placeholder="15 May 2024" required>
                                        <div class="query__input__icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="query__input wow fadeInUp" data-wow-delay=".4s">
                                    <label for="adult" class="query__label">Adult</label>
                                    <div class="query__input__position">
                                        <select name="adult" id="adult" class="form-select">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <option value="{{ $i }}">{{ $i }} Person</option>
                                            @endfor
                                        </select>
                                        <div class="query__input__icon">
                                            <i class="flaticon-user"></i>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="query__input wow fadeInUp" data-wow-delay=".5s">
                                    <label for="child" class="query__label">Child</label>
                                    <div class="query__input__position">
                                        <select name="child" id="child" class="form-select">
                                            @for ($i = 0; $i <= 5; $i++)
                                                <option value="{{ $i }}">{{ $i }} Child</option>
                                            @endfor
                                        </select>
                                        <div class="query__input__icon">
                                            <i class="flaticon-user"></i>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="query__input wow fadeInUp" data-wow-delay=".5s">
                                    <label for="room" class="query__label">Room</label>
                                    <div class="query__input__position">
                                        <select name="room" id="room" class="form-select">
                                            <option value="1">1 Room</option>
                                            <option value="2">2 Room</option>
                                            <option value="3">3 Room</option>
                                            <option value="4">4 Room</option>
                                            <option value="5">5 Room</option>
                                        </select>
                                        <div class="query__input__icon is__svg">
                                            {{-- USE asset() HELPER HERE --}}
                                            <img src="{{ asset('assets/images/icon/room.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="query__input wow fadeInUp" data-wow-delay=".5s">
                                    <label for="exbed" class="query__label">Extra Bed</label>
                                    <div class="query__input__position">
                                        <select name="exbed" id="exbed" class="form-select">
                                            <option value="0">No Extra Bed</option>
                                            <option value="1">1 Bed</option>
                                            <option value="2">2 Bed</option>
                                            <option value="3">3 Bed</option>
                                            <option value="4">4 Bed</option>
                                        </select>
                                        <div class="query__input__icon is__svg">
                                            {{-- USE asset() HELPER HERE --}}
                                            <img src="{{ asset('assets/images/icon/bed-alt.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
    
                                <h5 class="p-0 mt-20">Extra Services</h5>
    
                                <div class="query__input checkbox wow fadeInUp">
                                    <input type="checkbox" name="clean" id="clean" value="12">
                                    <label for="clean">Room Clean</label>
                                    <span>$12 / Night</span>
                                </div>
                                <div class="query__input checkbox wow fadeInUp">
                                    <input type="checkbox" name="parking" id="parking" value="0">
                                    <label for="parking">Parking</label>
                                    <span>Free</span>
                                </div>
                                <div class="query__input checkbox wow fadeInUp">
                                    <input type="checkbox" name="transport" id="transport" value="30">
                                    <label for="transport">Airport transport</label>
                                    <span>$30 / Night</span>
                                </div>
                                <div class="query__input checkbox wow fadeInUp">
                                    <input type="checkbox" name="pet" id="pet" value="40">
                                    <label for="pet">Pet-Friendly</label>
                                    <span>$40 / Night</span>
                                </div>
    
                                <div class="total__price">
                                    <span class="total h6 mb-0">Total Price</span>
                                    <span class="price h6 m-0" id="calculated_price">$0</span>
                                </div>
    
                                <a href="{{ route('checkout', ['roomid' => $room->id]) }}" class="theme-btn btn-style fill no-border search__btn wow fadeInUp" data-wow-delay=".6s">
                                    <span>Book Your Room</span>
                                </a>

                            {{--Logic Part for booking  --}}
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkInInput = document.getElementById('check__in');
            const checkOutInput = document.getElementById('check__out');
            const extraServiceCheckboxes = document.querySelectorAll('.query__input.checkbox input[type="checkbox"]');
            const adultSelect = document.getElementById('adult');
            const childSelect = document.getElementById('child');
            const roomSelect = document.getElementById('room');
            const exBedSelect = document.getElementById('exbed');
            const priceDisplay = document.getElementById('calculated_price');
    
            const baseRoomPricePerNight = {{ $room->room_rate }};
    
            function calculateTotalPrice() {
                let total = 0;
                let numberOfNights = 0;
    
                if (checkInInput.value && checkOutInput.value) {
                    const checkInDate = new Date(checkInInput.value);
                    const checkOutDate = new Date(checkOutInput.value);
                    if (checkOutDate > checkInDate) {
                        const diffTime = Math.abs(checkOutDate - checkInDate);
                        numberOfNights = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                    }
                }
    
                let numRooms = parseInt(roomSelect.value) || 1;
                total += (baseRoomPricePerNight * numRooms * numberOfNights);
    
                const extraBedPricePerNight = 20;
                let numExtraBeds = parseInt(exBedSelect.value) || 0;
                total += (extraBedPricePerNight * numExtraBeds * numberOfNights);
    
                extraServiceCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        const servicePrice = parseFloat(checkbox.value);
                        if (checkbox.id === 'parking') {
                            total += servicePrice;
                        } else {
                            total += (servicePrice * numberOfNights);
                        }
                    }
                });
    
                priceDisplay.textContent = `$${total.toFixed(2)}`;
            }
    
            checkInInput.addEventListener('change', calculateTotalPrice);
            checkOutInput.addEventListener('change', calculateTotalPrice);
            adultSelect.addEventListener('change', calculateTotalPrice);
            childSelect.addEventListener('change', calculateTotalPrice);
            roomSelect.addEventListener('change', calculateTotalPrice);
            exBedSelect.addEventListener('change', calculateTotalPrice);
            extraServiceCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', calculateTotalPrice);
            });
    
            calculateTotalPrice();
        });
    </script>
    @endpush
    <!-- room details area end -->

    <!-- similar room area -->
    <div class="rts__section pb-120">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Similar Rooms</span>
                        <h2 class="section__title">Similar Rooms</h2>
                    </div>
                </div>
            </div>
            <div class="row g-30">
                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="room__card">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                {{-- Use asset() helper for the image --}}
                                <a href="room-details-2.html">
                                    <img src="{{ asset('assets/images/pages/room/1.webp') }}" width="420" height="310" alt="room card">
                                </a>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            <a href="{{ route('room.show', $room->id) }}" class="room__card__title h5">Executive Room</a>
                            <div class="room__card__meta__info">
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <div class="room__price__tag">
                                <span class="h6 d-block">120$</span>
                            </div>
                            <a href="room-details-2.html" class="room__card__link">Discover More</a>
    
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="room__card">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                {{-- Use asset() helper for the image --}}
                                <a href="room-details-2.html">
                                    <img src="{{ asset('assets/images/pages/room/2.webp') }}" width="420" height="310" alt="room card">
                                </a>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            <a href="room-details-2.html" class="room__card__title h5">Single Room</a>
                            <div class="room__card__meta__info">
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <div class="room__price__tag">
                                <span class="h6 d-block">140$</span>
                            </div>
                            <a href="room-details-2.html" class="room__card__link">Discover More</a>
    
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="room__card">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                {{-- Use asset() helper for the image --}}
                                <a href="room-details-2.html">
                                    <img src="{{ asset('assets/images/pages/room/3.webp') }}" width="420" height="310" alt="room card">
                                </a>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            <a href="room-details-2.html" class="room__card__title h5">Triple Room</a>
                            <div class="room__card__meta__info">
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <div class="room__price__tag">
                                <span class="h6 d-block">122$</span>
                            </div>
                            <a href="room-details-2.html" class="room__card__link">Discover More</a>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- similar room area end -->
@endsection