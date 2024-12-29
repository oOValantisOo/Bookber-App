@extends('layouts1.guest')

@section('title1', 'ArticlesDetail')

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

    <div class="containerDetail">
        <button class="back-buttonDetail" onclick="window.location.href='{{ route('article.all') }}'">
            Kembali
        </button>

        <h1 class="titleDetail">{{$article->ArticleTitle }}</h1>
        <h2>{{ $article->ArticleDescription }}</h2>
        <p class="authorDetail">{{$article->Writer}}</p>
        <p class="dateDetail">{{$article->PublishDate}}</p>

        <div class="image-containerDetail">
            <img src="images/event-1.jpg" alt="event-1" class="main-imageDetail">
        </div>
        <div class="contentDetail">
            <p>{{$article->ArticleContent}}</p>
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