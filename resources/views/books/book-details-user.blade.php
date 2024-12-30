@extends('layouts1.user')

@section('title1', 'BookDetail')

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

    <div class="full-screen-container">
        <div class="bodyBookDetail">
            <div class="top-button-container">
                <a href="{{ route('book-user.all') }}"><button class="top-button">Back</button></a>
            </div>

            <div class="bookDetail-container">
                <div class="bookDetail-image">
                    <img src="images/pp-book.png" alt="Book Cover" class="bookDetail-cover">
                </div>
                <div class="bookDetail-info">
                    <h1 class="bookDetail-title">{{$book->BookTitle}}</h1>
                    <h2 class="bookDetail-author">by {{$book->BookAuthor}}</h2>
                    <h3 class="bookDetail-category">Category: {{$book->BookCategory->BookCategoryName}}</h3>
                    <p class="bookDetail-release-date">Release Date: {{$book->ReleaseDate}}</p>
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