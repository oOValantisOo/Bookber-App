@extends('layouts1.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-3">Update Book</h2>
        <h3>Original Data</h3>
        <p><strong>Book name:</strong> {{ $book->BookTitle }}</p>
        <p><strong>Book author:</strong> {{ $book->BookAuthor }}</p>
        <p><strong>Book release date:</strong> {{ $book->ReleaseDate }}</p>
        <p><strong>Book category:</strong> {{ $book->BookCategory->BookCategoryName }}</p>

        <form action="{{ route('book.update', $book->BookId) }}" class="mt-5" method="POST">
            @csrf
            @method('PUT')

            <!-- Book Title -->
            <div class="form-group mb-3">
                <label for="BookTitle" class="mb-2">Book Title</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="BookTitle" 
                    name="BookTitle" 
                    value="{{ old('BookTitle', $book->BookTitle) }}" 
                    required>
            </div>

            <!-- Book Author -->
            <div class="form-group mb-3">
                <label for="BookAuthor" class="mb-2">Book Author</label>
                <textarea 
                    class="form-control" 
                    id="BookAuthor" 
                    name="BookAuthor" 
                    rows="3" 
                    required>{{ old('BookAuthor', $book->BookAuthor) }}</textarea>
            </div>

            <!-- Release Date -->
            <div class="form-floating mb-3">
                <input 
                    type="date" 
                    class="form-control" 
                    id="ReleaseDate" 
                    name="ReleaseDate" 
                    value="{{ old('ReleaseDate', $book->ReleaseDate) }}" 
                    required>
                <label for="ReleaseDate">Release Date</label>
            </div>

            <!-- Book Category -->
            <div class="form-group mb-3">
                <label for="BookCategoryId" class="mb-2">Book Category</label>
                <select 
                    name="BookCategoryId" 
                    id="BookCategoryId" 
                    class="form-select" 
                    required>
                    <option value="">Select Category</option>
                    @foreach($categories as $list)
                        <option 
                            value="{{ $list->BookCategoryId }}" 
                            {{ old('BookCategoryId', $book->BookCategory->BookCategoryId) == $list->BookCategoryId ? 'selected' : '' }}>
                            {{ $list->BookCategoryName }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
