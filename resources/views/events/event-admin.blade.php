@extends('layouts1.admin')

@section('title1', 'EventDetail')

@section('content1')
<main>

    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
    </div>

    <!-- Container Utama -->
    <div class="containerDetail1">
        <!-- Tombol Back -->
        <button class="back-buttonDetail" onclick="window.location.href='{{ route('event-user.all') }}'">
            Kembali
        </button>

        <!-- Header Judul -->
        -- <h1 class="titleDetail">{{$event->EventTitle}}</h1>
        <p class="authorDetail">{{$event->EventDescription}}</p>

        <!-- Gambar Utama -->
        <div class="image-containerDetail">
            <img src="images/event-1.jpg" alt="event-1" class="main-imageDetail">
            {{-- <p class="captionDetail">penjelasan singkat event</p> --}}
        </div>

        <div class="spesificDetail">
            <ul>
                <li>
                    <span class="category">New Event</span>
                    <h4>Event Name</h4>
                </li>
                <li>
                    <span>Date:</span>
                    <h6>12 Mar 2036</h6>
                </li>
                <li>
                    <span>Duration:</span>
                    <h6>48 Hours</h6>
                </li>
                <li>
                    <span>Price:</span>
                    <h6>$440</h6>
                </li>
            </ul>  
        </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
            <p>Copyright © 2024 bookber. All rights reserved.</a></p>
            </div>
        </div>
    </footer>
</main>
@endsection
