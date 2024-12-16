@extends('layouts1.default1')

@section('title1', 'Book')

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

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
          
                        <a href="index.html" class="logo">
                            <h1>Bookber</h1>
                        </a>

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="ahome">Home</a></li>
                            <li class="scroll-to-section"><a href="/ahome#about-us">About us</a></li>
                            <li class="scroll-to-section"><a href="aevent">Event</a></li>
                            <li class="scroll-to-section"><a href="abook" class="active">Books</a></li>
                            <li class="scroll-to-section"><a href="aarticles">Articles</a></li>
                            <li class="scroll-to-section"><a href="adonation">Donation</a></li>
                            <li><a href="aprofile" class="actived">Profile <img src="{{ asset('images/profile-header.jpg') }}" alt="Profile Picture"></a></li>

                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
    
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="section courses" id="courses">
        <div class="container">
            <ul class="book_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                @forelse ($book_categories as $category)
                    <li>
                        <a href="{{ route('book-category.get', ['id' => $category->BookCategoryId }}">{{$category->BookCategoryName}}</a>
                    </li>
                    @empty
                        <p class="text-center">There's nothing here...</p>
                @endforelse
            </ul>

            <div class="row book_box">
                @forelse($books as $book)
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
                @endforelse
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