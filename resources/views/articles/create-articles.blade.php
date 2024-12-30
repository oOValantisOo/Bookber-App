@extends('layouts1.admin')

@section('title1', 'Articles')

@section('content1')
    <div class="container mt-5">
        <h2>Create a New Article</h2>
        <form action="{{ route('article.create') }}" method="POST" class="w-50">
            @csrf
            <div class="form-group mb-3">
                <label for="ArticleTitle" class="mb-2">Article Title</label>
                <input type="text" class="form-control width" id="ArticleTitle" name="ArticleTitle" required>
            </div>
            <div class="form-group mb-3">
                <label for="ArticleDescription" class="mb-2">Article Description</label>
                <textarea class="form-control" id="ArticleDescription" name="ArticleDescription" rows="3" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="Writer" class="mb-2">Writer Name</label>
                <textarea class="form-control" id="Writer" name="Writer" rows="1" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="ArticleContent" class="mb-2">Article Content</label>
                <textarea class="form-control" id="ArticleContent" name="ArticleContent" rows="10" required></textarea>
            </div>

            <select name ="ArticleCategoryId" class="form-select form-select-lg mb-3 mt-5" aria-label=".form-select-lg example">
                <option selected>Article Category</option>
                @foreach($categories as $list)
                <option value="{{$list->ArticleCategoryId}}">{{ $list->ArticleCategoryName }}
                @endforeach
                </select>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
