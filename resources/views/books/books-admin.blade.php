@extends('layouts1.admin')

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
            <ul class="book_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                @foreach ($book_categories as $category)
                    <li>
                        <a href="{{ route('book-category.get', ['id' => $category->BookCategoryId]) }}">{{$category->BookCategoryName}}</a>
                    </li>
                @endforeach
            </ul>

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
                            <a href="{{ route('book.get', ['id' => $book->BookId]) }}"><button>Details</button></a>
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

            <div class="d-flex justify-content-center align-items-center my-3 pt-10">
                <div class="d-flex flex-column w-25 mt-10">
                    <a class="btn btn-primary mb-2" href="{{ route('book.create-page') }}">Create Book</a>
                </div>
            </div>

        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="col-lg-12">
            <p>Copyright©2024 bookber. All rights reserved.</a></p>
            </div>
        </div>
    </footer>
    
</main>
@endsection