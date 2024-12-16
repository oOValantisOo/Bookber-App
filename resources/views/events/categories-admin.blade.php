@extends('layout.master')

@section('content')
    <div class="container text-center">
    <h1>{{ $category->BookCategoryName }}</h1>
    <p>{{ $category->BookCategoryDescription}}</p>
    </div>

    <div class="container mt-5 align-items-center justify-content-center">
                <h1 class ="text-center">BOOK LIST</h1>
                <table class="table table-bordered table-striped table-hover justify-content-center mt-3">
                <thead class="thead-dark">
                <tr>
                    <th>Event Name</th>
                    <th>Event Description</th>
                    <th>Event Category</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <td>{{ $book->BookTitle }}</td>
                            <td>{{ $book->BookDescription}}</td>
                            <td><a href="{{ route('book.get', ['id' => $book->BookId]) }}">Details</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">There's nothing here...</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- <div class="d-flex justify-content-center align-items-center my-3 pt-10">
            <div class="d-flex flex-column w-25 mt-10">
                <a class="btn btn-primary" href="{{ route('category.updatePage', $category->category_id) }}">Update Category</a>
            </div>
        </div> -->
@endsection
