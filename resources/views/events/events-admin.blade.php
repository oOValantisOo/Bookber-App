@extends('layouts1.admin')

@section('title1', 'Event')

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
                                    <a href="{{ route('event-admin.get', ['id' => $event->EventId]) }}"><i class="bi bi-caret-right-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    
            <div class="pagination">
                {{ $events->links() }}
            </div>
        </div>
    </div> 

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

    <div class="d-flex justify-content-center align-items-center my-3 pt-10">
            <div class="d-flex flex-column w-25 mt-10">
                <a class="btn btn-primary mb-2" href="{{ route('event.create-page') }}">Create Event</a>
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