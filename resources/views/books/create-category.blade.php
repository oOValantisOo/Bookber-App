@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        
        <h2>Create a New Book Category</h2>
        <form action="{{ route('book-category.create') }}" method="POST" class="w-50">
            @csrf
            <div class="form-group mb-3">
                <label for="category_name" class="mb-2">Category Name</label>
                <input type="text" class="form-control width" id="BookCategoryName" name="BookCategoryName" required>
            </div>
            <div class="form-group mb-3">
                <label for="category_description" class="mb-2">Category Description</label>
                <textarea class="form-control" id="BookCategoryDescription" name="BookCategoryDescription" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

@endsection