@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        
        <h2>Create a New Article</h2>
        <form action="{{ route('article.create') }}" method="POST" class="w-50">
            @csrf
            <div class="form-group mb-3">
                <label for="hero_name" class="mb-2">Article Title</label>
                <input type="text" class="form-control width" id="ArticleTitle" name="ArticleTitle" required>
            </div>
            <div class="form-group mb-3">
                <label for="hero_description" class="mb-2">Article Description</label>
                <textarea class="form-control" id="ArticleDescription" name="ArticleDescription" rows="3" required></textarea>
            </div>
            <select name ="category_id" class="form-select form-select-lg mb-3 mt-5" aria-label=".form-select-lg example">
                <option selected>Article Category</option>
                @foreach($categories as $list)
                <option value="{{$list->category_id}}">{{ $list->ArticleCategoryName}}
                @endforeach
                </select>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
