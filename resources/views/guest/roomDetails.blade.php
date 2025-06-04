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
    // Introduce a slightly larger delay for the entire script execution.
    // This gives other theme scripts (like plugins.min.js) even more time to finish their setup.
    setTimeout(function() { 
        $(function() { // jQuery's ready function. This ensures jQuery is fully loaded.

            // --- Define all your constants and elements here ---
            const roomRate = parseFloat({{ $room->room_rate ?? 0 }});
            const calculatedPriceSpan = document.getElementById('calculated_price');
            const bookButton = document.getElementById('book-room-btn');

            const addOnCheckboxes = document.querySelectorAll('input[name="clean"], input[name="parking"], input[name="transport"], input[name="pet"]');

            // --- Helper function to parse date strings ---
            function parseDateString(dateString) {
                const parts = dateString.split('-');
                const day = parseInt(parts[0], 10);
                const month = parseInt(parts[1], 10) - 1; // Month is 0-indexed in JS (January is 0)
                const year = parseInt(parts[2], 10);

                if (!isNaN(day) && !isNaN(month) && !isNaN(year)) {
                    return new Date(year, month, day);
                }
                return new Date('Invalid Date'); // Return an invalid date if parsing fails
            }

            // --- Function to calculate number of nights ---
            function calculateNights() {
                const checkInValue = $('#check__in').val(); 
                const checkOutValue = $('#check__out').val(); 

                console.log('--- calculateNights Debug (CALLED AFTER onSelect) ---');
                console.log('Check-in Value from input (via jQuery .val()):', checkInValue);
                console.log('Check-out Value from input (via jQuery .val()):', checkOutValue);

                if (checkInValue && checkOutValue) {
                    const startDate = parseDateString(checkInValue);
                    const endDate = parseDateString(checkOutValue);

                    if (isNaN(startDate.getTime()) || isNaN(endDate.getTime())) {
                        console.error('ERROR: One or both dates are invalid after parsing.');
                        return 1; // Default to 1 night if dates are invalid
                    }

                    // Check if end date is before start date (or same day)
                    if (endDate.getTime() <= startDate.getTime()) {
                        console.warn('WARNING: Check-out date is on or before Check-in date. Setting nights to 1.');
                        return 1;
                    }

                    const timeDiff = endDate.getTime() - startDate.getTime();
                    // Calculate days difference, rounding up to ensure at least 1 night for overnight stays
                    const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
                    
                    console.log('Time Difference (ms):', timeDiff);
                    console.log('Calculated Days Difference:', daysDiff);

                    return daysDiff; // This will be at least 1 if endDate > startDate
                }
                console.log('Check-in or Check-out date not selected yet. Defaulting to 1 night.');
                return 1; // Default to 1 night if dates are not selected
            }

            // --- Function to update the total price ---
            function updateRoomDetailsTotalPrice() {
                console.log('--- updateRoomDetailsTotalPrice Debug ---');
                console.log('Initial roomRate:', roomRate);

                const nights = calculateNights();
                console.log('Nights calculated:', nights);

                let currentTotalPrice = roomRate * nights;
                console.log('Price after nights (roomRate * nights):', currentTotalPrice);

                addOnCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        const addOnPrice = parseFloat(checkbox.value);
                        if (!isNaN(addOnPrice)) {
                            currentTotalPrice += addOnPrice;
                            console.log(`Add-on "${checkbox.name}" checked. Adding ${addOnPrice}. Current Total: ${currentTotalPrice}`);
                        } else {
                            console.warn(`Add-on "${checkbox.name}" has invalid value: ${checkbox.value}`);
                        }
                    }
                });
                
                calculatedPriceSpan.textContent = `$${currentTotalPrice.toFixed(2)}`;
                console.log('Final Calculated Price:', calculatedPriceSpan.textContent);
            }

            // --- Datepicker Initializations ---

            // IMPORTANT: Destroy any pre-existing datepicker instances to prevent conflicts
            // Check if the element has the 'hasDatepicker' class, which jQuery UI adds when initialized
            if ($("#check__in").hasClass('hasDatepicker')) {
                $("#check__in").datepicker("destroy");
                console.log("DEBUG: Destroyed existing datepicker on #check__in.");
            }
            if ($("#check__out").hasClass('hasDatepicker')) {
                $("#check__out").datepicker("destroy");
                console.log("DEBUG: Destroyed existing datepicker on #check__out.");
            }

            // Re-initialize datepickers with our specific onSelect callback
            $("#check__in").datepicker({
                dateFormat: 'dd-mm-yy',
                minDate: 0, // Cannot select dates before today
                onSelect: function(selectedDate) {
                    // This ALERT is crucial to see if this onSelect is firing!
                    //alert('Check-in date selected: ' + selectedDate); 
                    console.log('*** ONSELECT DEBUG: Check-in date selected (raw): ' + selectedDate);
                    console.log('*** ONSELECT DEBUG: Check-in input value via $(this).val(): ' + $(this).val());

                    // Set minDate for check-out to one day after the selected check-in date
                    const minCheckoutDate = parseDateString(selectedDate);
                    minCheckoutDate.setDate(minCheckoutDate.getDate() + 1); // Add one day

                    // Format the minCheckoutDate back to 'dd-mm-yy' for the datepicker option
                    const formattedMinCheckoutDate = $.datepicker.formatDate('dd-mm-yy', minCheckoutDate);
                    $("#check__out").datepicker("option", "minDate", formattedMinCheckoutDate);
                    
                    updateRoomDetailsTotalPrice(); // Update price immediately after check-in selection
                    
                    $(this).datepicker('hide'); // Hide check-in datepicker
                    $("#check__out").focus(); // Automatically focus on check-out
                }
            });

            $("#check__out").datepicker({
                dateFormat: 'dd-mm-yy',
                minDate: 0, // This will be dynamically updated by the check-in date's onSelect
                onSelect: function(selectedDate) {
                    // This ALERT is crucial to see if this onSelect is firing!
                    //alert('Check-out date selected: ' + selectedDate);
                    console.log('*** ONSELECT DEBUG: Check-out date selected (raw): ' + selectedDate);
                    console.log('*** ONSELECT DEBUG: Check-out input value via $(this).val(): ' + $(this).val());

                    updateRoomDetailsTotalPrice(); // Update price immediately after check-out selection
                    
                    $(this).datepicker('hide'); // Hide check-out datepicker
                }
            });

            // --- Initial calculation when the page loads ---
            updateRoomDetailsTotalPrice(); // This will show 1 night initially

            // --- Event listeners for add-on checkbox changes ---
            addOnCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateRoomDetailsTotalPrice);
            });

            // --- Modify the "Book Your Room" button ---
            bookButton.addEventListener('click', function(event) {
                event.preventDefault();

                const checkInDate = $('#check__in').val(); 
                const checkOutDate = $('#check__out').val(); 
                const roomId = {{ $room->id }};

                // --- NEW: Capture Adults count ---
                const adultsCount = $('#adult').val(); 
                console.log('DEBUG: Selected Adults:', adultsCount);


                if (!checkInDate || !checkOutDate) {
                    alert('Please select both check-in and check-out dates from the calendar.');
                    return;
                }

                const selectedAddOns = [];
                addOnCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        selectedAddOns.push(checkbox.name);
                    }
                });

                // --- REVISED URL CONSTRUCTION ---
                let queryParams = new URLSearchParams();
                queryParams.append('check_in', checkInDate);
                queryParams.append('check_out', checkOutDate);
                // --- NEW: Append Adults count to URL ---
                queryParams.append('adults', adultsCount); 

                if (selectedAddOns.length > 0) {
                    queryParams.append('add_ons', selectedAddOns.join(','));
                }

                const baseUrl = `{{ route('checkout', ['roomid' => ':roomid']) }}`.replace(':roomid', roomId);
                const checkoutUrl = baseUrl + '?' + queryParams.toString(); 

                window.location.href = checkoutUrl;
            });

            console.log('DEBUG: Custom JS block executed after 500ms delay.');
        });
    }, 500); // Increased delay to 500 milliseconds (half a second)
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
                @php
                    // Initialize a counter to cycle through your hardcoded image filenames (1.webp, 2.webp, 3.webp)
                    $imageIndex = 1;
                @endphp
    
                @foreach($similarRooms as $similarRoom)
                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="room__card">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                {{-- Link to the specific similar room's details page --}}
                                <a href="{{ route('room.show', $similarRoom->id) }}">
                                    {{-- Use hardcoded image paths, cycling through 1.webp, 2.webp, 3.webp --}}
                                    {{-- Ensure you have 1.webp, 2.webp, 3.webp in public/assets/images/pages/room/ --}}
                                    <img src="{{ asset('assets/images/pages/room/' . $imageIndex . '.webp') }}" width="420" height="310" alt="{{ $similarRoom->room_name }}">
                                </a>
                            </div>
                        </div>
                        <div class="room__card__meta">
                            {{-- Link and display the similar room's name (dynamic from DB) --}}
                            <a href="{{ route('room.show', $similarRoom->id) }}" class="room__card__title h5">{{ $similarRoom->room_name }}</a>
                            <div class="room__card__meta__info">
                                {{-- These are hardcoded as your database doesn't seem to have specific 'size' or 'capacity' columns --}}
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <div class="room__price__tag">
                                {{-- Display the similar room's rate (dynamic from DB) --}}
                                <span class="h6 d-block">{{ $similarRoom->room_rate }}$</span>
                            </div>
                            {{-- Link to the specific similar room's details page --}}
                            <a href="{{ route('room.show', $similarRoom->id) }}" class="room__card__link">Discover More</a>
                        </div>
                    </div>
                </div>
                @php
                    // Increment for the next image. If it goes past 3 (or whatever number of hardcoded images you have), reset it.
                    $imageIndex++;
                    if ($imageIndex > 3) { 
                        $imageIndex = 1;
                    }
                @endphp
                @endforeach
            </div>
        </div>
    </div>
    <!-- similar room area end -->
@endsection