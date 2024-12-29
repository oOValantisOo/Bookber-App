@extends('layouts1.guest')

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

    

    <section class="section courses" id="courses">
        <div class="container">
            <ul class="book_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                @foreach ($article_categories as $category)
                    <li>
                        <a href="{{ route('article-category.get', ['id' => $category->ArticleCategoryId]) }}">{{$category->ArticleCategoryName}}</a>
                    </li>
                @endforeach
            </ul>

            <div class="row book_box">
                @foreach($articles as $article)
                <div class="col-lg-4 col-md-6 book_outer anakanak">
                    <div class="books_item">
                        <div class="thumb">
                            <a href=""><img src="images/pp-book.png" alt=""></a>
                            <span class="category">{{ $article->ArticleCategory->ArticleCategoryName}}</span>
                        </div>
                        <div class="down-content">
                            <span class="author">{{ $article->ArticleTitle}}</span>
                            <h4>{{ $article->ArticleDescription}}</h4>
                            <a href="{{ route('article.get', ['id' => $article->ArticleId]) }}"><button>Read More</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="pagination-wrapper text-center mt-4">
                <nav>
                    <div class="pagination-wrapper text-center mt-4">
                        {{ $articles->links('pagination::bootstrap-4') }}
                    </div>
                </nav>
            </div>

            <div class="d-flex justify-content-center align-items-center my-3 pt-10">
                <div class="d-flex flex-column w-25 mt-10">
                <a class="btn btn-primary mb-2" href="{{ route('registerNotif') }}">Create your own article!</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="col-lg-12">
            <p>Copyright © 2024 bookber. All rights reserved.</a></p>
            </div>
        </div>
    </footer>

</main>
@endsection