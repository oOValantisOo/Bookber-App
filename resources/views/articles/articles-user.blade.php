@extends('layouts1.user')

@section('title1', 'Articles')

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

    <div class="section events" id="events">
        <div class="container">
        <div class="row article_box">
                @foreach($articles as $article)
                <div class="col-lg-4 col-md-6 book_outer anakanak">
                    <div class="books_item">
                        <div class="thumb">
                            <a href=""><img src="images/pp-book.png" alt=""></a>
                            <span class="category">{{ $article->ArticleCategory->ArticleCategoryName}}</span>
                        </div>
                        <div class="down-content">
                            <span class="author">{{ $article->ArticleDescription}}</span>
                            <h4>{{ $article->ArticleTitle}}</h4>
                            <a href="{{ route('article.get', ['id' => $article->ArticleId]) }}"><button>Details</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            </div>

            <div class="pagination-wrapper text-center mt-4">
                <nav>
                    <div class="pagination-wrapper text-center mt-4">
                        {{ $articles->links('pagination::bootstrap-4') }}
                    </div>
                </nav>
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