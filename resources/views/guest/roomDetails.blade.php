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
                                {{-- ... BOOKING FORM FIELDS (INCLUDING TOTAL PRICE AND BUTTON) WILL GO HERE ... --}}
                                <div class="query__input wow fadeInUp">
                                    <label for="check__in" class="query__label">Check In</label>
                                    <div class="query__input__position">
                                        {{-- IDs are now correct for the JS --}}
                                        <input type="text" id="check__in" name="check__in" placeholder="Select Date" required>
                                        <div class="query__input__icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="query__input wow fadeInUp" data-wow-delay=".3s">
                                    <label for="check__out" class="query__label">Check Out</label>
                                    <div class="query__input__position">
                                        {{-- IDs are now correct for the JS --}}
                                        <input type="text" id="check__out" name="check__out" placeholder="Select Date" required>
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
                                            <option value="5">5 Bed</option>
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

                                {{-- Added id="book-room-btn" here for the JavaScript to target --}}
                                <a href="{{ route('checkout', ['roomid' => $room->id]) }}" id="book-room-btn" class="theme-btn btn-style fill no-border search__btn wow fadeInUp" data-wow-delay=".6s">
                                    <span>Book Your Room</span>
                                </a>
                            </div> {{-- Closes advance__search__wrapper --}}
                        </form>
                    </div> {{-- Closes rts__booking__form --}}
                </div> {{-- Closes col-xxl-4 col-xl-5 --}}
            </div> {{-- Closes row g-5 sticky-wrap --}}
        </div> {{-- Closes container --}}
    </div> {{-- Closes rts__section section__padding (Room Details Begins) --}}
    {{-- ... JAVASCRIPT AND SIMILAR ROOMS SECTION WILL GO HERE ... --}}
    <!-- room details area end -->
    @push('scripts')
<script>
    // Initialize jQuery UI Datepickers
    // This script block should run after jQuery and jQuery UI are loaded (e.g., from layouts/app.blade.php)
    $(function() {
        $("#check__in").datepicker({
            dateFormat: 'dd M yy', // Matches "15 Jun 2024" format for consistency
            minDate: 0, // Cannot select past dates
            onSelect: function(selectedDate) {
                const minDate = new Date(selectedDate);
                minDate.setDate(minDate.getDate() + 1); // Checkout must be at least 1 day after check-in
                $("#check__out").datepicker("option", "minDate", minDate);
                // Manually trigger the 'change' event on the input field
                document.getElementById('check__in').dispatchEvent(new Event('change'));
            }
        });

        $("#check__out").datepicker({
            dateFormat: 'dd M yy', // Matches "15 Jun 2024" format for consistency
            minDate: 0, // Cannot select past dates (though onSelect for check__in handles it more strictly)
            onSelect: function(selectedDate) {
                // Manually trigger the 'change' event on the input field
                document.getElementById('check__out').dispatchEvent(new Event('change'));
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const roomRate = parseFloat({{ $room->room_rate ?? 0 }});
        const calculatedPriceSpan = document.getElementById('calculated_price');
        const bookButton = document.getElementById('book-room-btn'); // Now correctly targets the link

        // Corrected IDs for date inputs (matching your HTML)
        const checkInDateInput = document.getElementById('check__in');
        const checkOutDateInput = document.getElementById('check__out');

        // Add-on checkboxes from your HTML
        const addOnCheckboxes = document.querySelectorAll('input[name="clean"], input[name="parking"], input[name="transport"], input[name="pet"]');

        // Function to calculate number of nights
        function calculateNights() {
            const checkInValue = checkInDateInput ? checkInDateInput.value : '';
            const checkOutValue = checkOutDateInput ? checkOutDateInput.value : '';

            if (checkInValue && checkOutValue) {
                // Ensure the date format is parsable by JavaScript's Date object.
                // jQuery UI Datepicker's 'dd M yy' format is usually well-parsed.
                const startDate = new Date(checkInValue);
                const endDate = new Date(checkOutValue);

                // Basic validation for valid dates
                if (isNaN(startDate.getTime()) || isNaN(endDate.getTime())) {
                    console.error('Invalid date format detected for calculation. Please ensure datepicker is working correctly.');
                    return 1; // Default to 1 night if dates are invalid
                }

                const timeDiff = endDate.getTime() - startDate.getTime();
                const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
                return daysDiff > 0 ? daysDiff : 1; // Ensure at least 1 night
            }
            return 1; // Default to 1 night if dates are not selected
        }

        // Function to update the total price displayed on roomDetails.blade.php
        function updateRoomDetailsTotalPrice() {
            const nights = calculateNights();
            let currentTotalPrice = roomRate * nights;

            addOnCheckboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    currentTotalPrice += parseFloat(checkbox.value); // Add add-on price
                }
            });
            calculatedPriceSpan.textContent = `$${currentTotalPrice.toFixed(2)}`;
        }

        // Initial calculation when the page loads
        updateRoomDetailsTotalPrice();

        // Event listeners for date changes (these are now primarily triggered by the datepicker's onSelect)
        // Keeping them ensures updates if inputs are changed by other means, though less likely with a datepicker.
        if (checkInDateInput) checkInDateInput.addEventListener('change', updateRoomDetailsTotalPrice);
        if (checkOutDateInput) checkOutDateInput.addEventListener('change', updateRoomDetailsTotalPrice);

        // Event listeners for add-on checkbox changes
        addOnCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateRoomDetailsTotalPrice);
        });

        // Modify the "Book Your Room" button to pass data
        if (bookButton) { // Ensure button exists before attaching listener
            bookButton.addEventListener('click', function(event) {
                event.preventDefault(); // Stop the default link behavior

                const checkInDate = checkInDateInput ? checkInDateInput.value : '';
                const checkOutDate = checkOutDateInput ? checkOutDateInput.value : '';
                const roomId = {{ $room->id }};

                if (!checkInDate || !checkOutDate) {
                    alert('Please select both check-in and check-out dates from the calendar.');
                    return;
                }

                // Collect selected add-ons
                const selectedAddOns = [];
                addOnCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        selectedAddOns.push(checkbox.name); // Push the name (e.g., 'clean', 'transport')
                    }
                });

                // Construct the URL with query parameters for dates and selected add-ons
                // The add_ons parameter will be a comma-separated string like 'clean,transport'
                const checkoutUrl = `{{ route('checkout', ['roomid' => ':roomid']) }}`
                    .replace(':roomid', roomId) +
                    `&check_in=${checkInDate}&check_out=${checkOutDate}` +
                    (selectedAddOns.length > 0 ? `&add_ons=${selectedAddOns.join(',')}` : '');

                window.location.href = checkoutUrl;
            });
        }
    });
</script>
@endpush


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
                {{-- Loop through the similar rooms fetched from the database --}}
                @foreach($similarRooms as $similarRoom)
                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="room__card">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                {{-- Link to the specific similar room's details page --}}
                                <a href="{{ route('room.show', $similarRoom->id) }}">
                                    {{-- Use the image column from the similar room --}}
                                    <img src="{{ asset('assets/images/pages/room/' . $similarRoom->image) }}" width="420" height="310" alt="{{ $similarRoom->room_name }}">
                                </a>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            {{-- Link and display the similar room's name --}}
                            <a href="{{ route('room.show', $similarRoom->id) }}" class="room__card__title h5">{{ $similarRoom->room_name }}</a>
                            <div class="room__card__meta__info">
                                {{-- These are hardcoded as your database doesn't seem to have specific 'size' or 'capacity' columns --}}
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <div class="room__price__tag">
                                {{-- Display the similar room's rate --}}
                                <span class="h6 d-block">{{ $similarRoom->room_rate }}$</span>
                            </div>
                            {{-- Link to the specific similar room's details page --}}
                            <a href="{{ route('room.show', $similarRoom->id) }}" class="room__card__link">Discover More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- similar room area end -->
@endsection