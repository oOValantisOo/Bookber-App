@extends('layouts.default1')

@section('title1', 'BookDetail')

@section('content1')
<main>

    @if(session()->has('success'))
    <div id="notification" class="notification success">
        <p>{{ session()->get('success') }}</p>
    </div>
    @endif

    @if(session()->has('error'))
    <div id="notification" class="notification error">
        <p>{{ session()->get('error') }}</p>
    </div>
    @endif

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

    <div class="full-screen-container">
        <div class="bodyBookDetail">
            <div class="top-button-container">
                <a href="{{ route('abook') }}"><button class="top-button">Back</button></a>
            </div>

            <div class="bookDetail-container">
                <div class="bookDetail-image">
                    <img src="images/pp-book.png" alt="Book Cover" class="bookDetail-cover">
                </div>
                <div class="bookDetail-info">
                    <h1 class="bookDetail-title">{{$book->BookTitle}}</h1>
                    <p class="bookDetail-author">by {{$book->BookAuthor}}</p>
                    <p class="bookDetail-release-date">Release Date: {{$book->ReleaseDate}}</p>
                    <p class="bookDetail-price">$19.99</p>
                    <p class="bookDetail-description">{{$book->BookDescription}}</p>
                    {{-- <div class="action-buttons">
                        <button class="buy-button">Buy Now</button>
                        <button class="wishlist-button">Add to Wishlist</button>
                    </div> --}}
                </div>
            </div>
        </div>
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