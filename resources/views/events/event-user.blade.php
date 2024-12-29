@extends('layouts1.user')

@section('title1', 'EventDetail')

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

    <!-- Container Utama -->
    <div class="containerDetail1">
        <!-- Tombol Back -->
        <button class="back-buttonDetail" onclick="window.location.href='{{ route('event-user.all') }}'">
            Kembali
        </button>

        <!-- Header Judul -->
        -- <h1 class="titleDetail">{{$event->EventTitle}}</h1>
        <p class="authorDetail">{{$event->EventDescription}}</p>

        <!-- Gambar Utama -->
        <div class="image-containerDetail">
            <img src="images/event-1.jpg" alt="event-1" class="main-imageDetail">
            {{-- <p class="captionDetail">penjelasan singkat event</p> --}}
        </div>

        <div class="spesificDetail">
            <ul>
                <li>
                    <span class="category">New Event</span>
                    <h4>Event Name</h4>
                </li>
                <li>
                    <span>Date:</span>
                    <h6>12 Mar 2036</h6>
                </li>
                <li>
                    <span>Duration:</span>
                    <h6>48 Hours</h6>
                </li>
                <li>
                    <span>Price:</span>
                    <h6>$440</h6>
                </li>
            </ul>  
        </div>

        <div class="d-flex justify-content-center align-items-center my-3 pt-10">
            <form method="POST" action="{{ route('donation.create', ['id' => $event->EventId]) }}">
            @csrf
            <input type="hidden" name="id" value="{{ $event->EventId }}">
            <button type="submit" class="btn btn-primary mb-2">Start Donation!</button>
        </form>
        </div>  

    <h1>YOUR DONATIONS</h1>
    <table class="table table-bordered table-striped table-hover justify-content-center mt-3">
        <thead class="thead-dark">
            <tr>
                <th>Donation ID</th>
                <th>Books Donated</th>
                <th>Submit Books</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($donations as $index => $donation)
                <tr>
                    <td>{{ $donation->DonationId }}</td> <!-- UserId -->
                    <td>{{ $donation->total_quantity }}</td> <!-- Total Quantity -->
                    <td><a href="{{ route('book.create-page', ['id' => $donation->DonationId]) }}">Submit Books for Donations</a></td>
            </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">There's nothing here...</td>
                </tr>
            @endforelse
            </tbody>
        </table>


    <h1>DONATIONS Leaderboard</h1>
    <table class="table table-bordered table-striped table-hover justify-content-center mt-3">
        <thead class="thead-dark">
            <tr>
                <th>Rank</th>
                <th>User ID</th>
                <th>Books Donated</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($entries as $index => $entry)
                <tr>
                    <td>{{ $index + 1 }}</td> 
                    <td>{{ $entry->UserId }}</td> 
                    <td>{{ $entry->total_quantity }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">There's nothing here...</td>
                </tr>
            @endforelse
        </tbody>
    </table>

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
