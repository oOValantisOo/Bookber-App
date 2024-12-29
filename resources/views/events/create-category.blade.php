@extends('layouts1.admin')

@section('content')
    <div class="container mt-5">
        
        <h2>Create a New Event Category</h2>
        <form action="{{ route('event-category.create') }}" method="POST" class="w-50">
            @csrf
            <div class="form-group mb-3">
                <label for="EventCategoryName" class="mb-2">Category Name</label>
                <input type="text" class="form-control width" id="EventCategoryName" name="EventCategoryName" required>
            </div>
            <div class="form-group mb-3">
                <label for="category_description" class="mb-2">Category Description</label>
                <textarea class="form-control" id="EventCategoryDescription" name="EventCategoryDescription" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

@endsection