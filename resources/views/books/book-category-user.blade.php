@extends('layouts1.user')

@section('title1', 'Book')

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

            <div class="row book_box">
                @foreach($books as $book)
                <div class="col-lg-4 col-md-6 book_outer anakanak">
                    <div class="books_item">
                        <div class="thumb">
                            <a href=""><img src="images/pp-book.png" alt=""></a>
                            <span class="category">{{ $book->BookCategory->BookCategoryName}}</span>
                        </div>
                        <div class="down-content">
                            <span class="author">{{ $book->BookAuthor}}</span>
                            <h4>{{ $book->BookTitle}}</h4>
                            <a href="{{ route('book-user.get', ['id' => $book->BookId]) }}"><button>Details</button></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="pagination-wrapper text-center mt-4">
                <nav>
                    <div class="pagination-wrapper text-center mt-4">
                        {{ $books->links('pagination::bootstrap-4') }}
                    </div>
                </nav>
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