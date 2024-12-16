@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        
        <h2>Register Book for Donation</h2>
        <form action="{{ route('book.create') }}" method="POST" class="w-50">
            @csrf
            <div class="form-group mb-3">
                <label for="hero_name" class="mb-2">Book Name</label>
                <input type="text" class="form-control width" id="BookTitle" name="BookTitle" required>
            </div>
            <div class="form-group mb-3">
                <label for="hero_description" class="mb-2">Book Description</label>
                <textarea class="form-control" id="BookDescription" name="BookDescription" rows="3" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="hero_description" class="mb-2">Book Author</label>
                <textarea class="form-control" id="BookAuthor" name="BookAuthorn" rows="3" required></textarea>
            </div>
            <select name ="category_id" class="form-select form-select-lg mb-3 mt-5" aria-label=".form-select-lg example">
                <option selected>Book Category</option>
                @foreach($categories as $list)
                <option value="{{$list->category_id}}">{{ $list->BookCategoryName }}
                @endforeach
                </select>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
