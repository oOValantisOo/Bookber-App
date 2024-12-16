@extends('layouts1.default')

@section('title1', 'Event')

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
                            <li class="scroll-to-section"><a href="aevent" class="active">Event</a></li>
                            <li class="scroll-to-section"><a href="abook">Books</a></li>
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

    {{-- <div class="section events" id="events">
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                    <div class="col-lg-12 col-md-6">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="image">
                                        <img src="{{ asset('images/' . $event->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <ul>
                                    'EventTitle', 'EventDescription', 'StartDate', 'EndDate', 'EventCategoryId'
                                        <li>
                                            <span class="category">{{ $event->category }}</span>
                                            <h4>{{ $event->EventTitle }}</h4>
                                        </li>
                                        <li>
                                            <span>Description:</span>
                                            <h6>{{ $event->EventDescription }}</h6>
                                        </li>
                                        <li>
                                            <span>Start:</span>
                                            <h6>{{ $event->StartDate }}</h6>
                                        </li>
                                        <li>
                                            <span>End:</span>
                                            <h6>{{ $event->EndDate }}</h6>
                                        </li>
                                        <li>
                                            <span>Category:</span>
                                            <h6>{{$event->EventCategory->EventCategoryName}}</h6>
                                        </li>
                                    </ul>
                                    <a href="{{ route('event.get', ['id' => $event->EventId]) }}"><i class="bi bi-caret-right-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    
            <!-- Menampilkan pagination -->
            <div class="pagination">
                {{ $events->links() }}
            </div>
        </div>
    </div> --}}

            <!-- Pagination -->
            <div class="pagination-wrapper text-center mt-4">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
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