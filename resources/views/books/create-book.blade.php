@extends('layouts1.user')

@section('title1', 'Create Books')

@section('content1')
    <div class="container mt-5">
        
        <h2>Register Book for Donation</h2>
        <form action="{{ route('book.create') }}" method="POST" class="w-50">
            @csrf
            <div class="form-group mb-3">
                <label for="BookTitle" class="mb-2">Book Title</label>
                <input type="text" class="form-control width" id="BookTitle" name="BookTitle" required>
            </div>
            <div class="form-group mb-3">
                <label for="hero_description" class="mb-2">Book Author</label>
                <textarea class="form-control" id="BookAuthor" name="BookAuthor" rows="1" required></textarea>
            </div>
            <div class="form-floating">
                <input type="date" class="form-control" id="ReleaseDate" name="ReleaseDate" placeholder="MM/DD/YYYY">
                <label for="ReleaseDate">Release Date</label>
            </div>

            <select name ="BookCategoryId" class="form-select form-select-lg mb-3 mt-5" aria-label=".form-select-lg example">
                <option selected>Book Category</option>
                @foreach($categories as $list)
                <option value="{{$list->BookCategoryId}}">{{ $list->BookCategoryName }}
                @endforeach
                </select>

                <div class="d-flex justify-content-center align-items-center my-3 pt-10">
                    <div class="d-flex flex-column w-25 mt-10">
                        <button type="submit" class="btn btn-primary mb-2">Submit Books for Donation</button>
                    </div>
                </div>

                <input type="hidden" name="DonationId" value="{{ $donation->DonationId }}">
        </form>
    </div>
@endsection
