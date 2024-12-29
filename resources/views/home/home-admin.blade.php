@extends('layouts1.admin')

@section('title1', 'HomeG')

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

    <h1>MOST RECENT USERS</h1>
            <table class="table table-bordered table-striped table-hover justify-content-center mt-3">
                <thead class="thead-dark">
                <tr>
                    <th>User Id</th>
                    <th>Username</th>
                    <th>User Email</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">There's nothing here...</td>
                        </tr>
                    @endforelse
            </tbody>
        </table>

        <h1>LATEST DONATIONS</h1>
            <table class="table table-bordered table-striped table-hover justify-content-center mt-3">
                <thead class="thead-dark">
                <tr>
                    <th>Donation Id</th>
                    <th>Book Id</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Donation Date</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <td>{{ $book->DonationId }}</td>
                            <td>{{ $book->Donation->EventId }}</td>
                            <td>{{ $book->BookId }}</td>
                            <td>{{ $book->BookAuthor }}</td>
                            <td>{{ $book->Donation->DonationDate }}</td>
                            <td><a href="{{ route('book.get', ['id' => $book->BookId]) }}">Go See Details</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">There's nothing here...</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

    
    <footer>
        <div class="container">
            <div class="col-lg-12">
            <p>Copyright © 2024 bookber. All rights reserved.</a></p>
            </div>
        </div>
    </footer>
</main>
@endsection