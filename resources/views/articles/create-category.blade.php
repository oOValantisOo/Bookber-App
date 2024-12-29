@extends('layouts1.admin')

@section('content')
    <div class="container mt-5">
        
        <h2>Create a New Article Category</h2>
        <form action="{{ route('article-category.create') }}" method="POST" class="w-50">
            @csrf
            <div class="form-group mb-3">
                <label for="ArticleCategoryName" class="mb-2">Category Name</label>
                <input type="text" class="form-control width" id="ArticleCategoryName" name="ArticleCategoryName" required>
            </div>
            <div class="form-group mb-3">
                <label for="CategoryDescription" class="mb-2">Category Description</label>
                <textarea class="form-control" id="ArticleCategoryDescription" name="ArticleCategoryDescription" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

@endsection