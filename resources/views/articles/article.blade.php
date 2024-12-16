@extends('alayouts1.adefault1')

@section('title1', 'ArticlesDetail')

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

    <!-- Container Utama -->
    <div class="containerDetail">
        <!-- Tombol Back -->
        <button class="back-buttonDetail" onclick="window.location.href='{{ route('aarticles') }}'">
            Kembali
        </button>

        <!-- Header Judul -->
         <h2>{{$article->Ar}}</h2>
        <h1 class="titleDetail">{{$article->ArticleTitle}}</h1>
        <h2>{{$article->ArticleDescription}}</h2>
        <p class="authorDetail">{{$article->Writer->name}}</p>
        <p class="dateDetail">{{$article->PublishDate}}</p>

        <!-- Gambar Utama -->
        <div class="image-containerDetail">
            <img src="images/event-1.jpg" alt="event-1" class="main-imageDetail">
            <p class="captionDetail">penjelasan singkat event</p>
        </div>
        <!-- Konten Artikel -->
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