@extends('layouts.app') {{-- This line links this view to your main layout --}}

@section('title', 'Urban Hotels - Luxury Hotel & Resort') {{-- Sets the title for this specific page --}}

@section('content')
    <div class="rts__section page__hero__height page__hero__bg" style="background-image: url({{ asset('assets/images/pages/header__bg.webp') }});">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="page__hero__content">
                        <h1 class="wow fadeInUp">Deluxe Room</h1>
                        <p class="wow fadeInUp font-sm">A step up from the standard room, often with better views, more space, and additional amenities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rts__section advance__search__section is__page has__border pt-120 pb-60">
        <div class="container">
            <div class="row">
                <form action="room-two.html" method="post" class="advance__search">
                    <div class="advance__search__wrapper wow fadeInUp">
                        <div class="query__input">
                            <label for="check__in" class="query__label">Check In</label>
                            <input type="text" id="check__in" name="check__in" placeholder="15 Jun 2024" required>
                            <div class="query__input__icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                        </div>
                        <div class="query__input">
                            <label for="check__out" class="query__label">Check Out</label>
                            <input type="text" id="check__out" name="check__out" placeholder="15 May 2024" required>
                            <div class="query__input__icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                        </div>
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
                        <button class="theme-btn btn-style fill no-border search__btn">
                            <span>Check Now</span>
                        </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <div class="rts__section pb-120">
        <div class="container">
            <div class="row g-30">

            @foreach ($rooms as $room)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="room__card">
                        <div class="room__card__top">
                            <div class="room__card__image">
                                {{-- CORRECTED: Added <a> tag around the image --}}
                                <a href="{{ route('room.show', $room->id) }}">
                                    {{-- Dynamic image path, ensuring 'asset()' helper is used --}}
                                    {{-- Using $loop->index + 1 assumes images are named 1.webp, 2.webp etc. --}}
                                    <img src="{{ asset('assets/images/pages/room/' . ($loop->index + 1) . '.webp') }}" width="420" height="310" alt="room card">
                                    {{-- If you have specific image paths in your database, replace this with: --}}
                                    {{-- <img src="{{ asset($room->image_path) }}" width="420" height="310" alt="room card"> --}}
                                </a>
                            </div>

                            <div class="room__price__tag">
                                {{-- Display the dynamic price --}}
                                <span class="h6 d-block">${{ number_format($room->display_price, 2) }}</span>
                            </div>
                        </div>

                        <div class="room__card__meta">
                            {{-- Display the dynamic room type/name --}}
                            <a href="{{ route('room.show', $room->id) }}" class="room__card__title h5">{{ $room->room_name }}</a> {{-- Assuming 'room_name' is the correct attribute --}}
                            <div class="room__card__meta__info">
                                {{-- These are hardcoded in your original HTML, update if dynamic in DB --}}
                                <span><i class="flaticon-construction"></i>35 sqm</span>
                                <span><i class="flaticon-user"></i>5 Person</span>
                            </div>
                            <p class="font-sm">Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.</p>
                            {{-- CORRECTED: Changed to a Laravel route --}}
                            <a href="{{ route('room.show', $room->id) }}" class="room__card__link">Discover More</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div> {{-- Close row g-30 --}}
        </div> {{-- Close container --}}
    </div>
    @endsection