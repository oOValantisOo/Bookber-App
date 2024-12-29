@extends('layouts1.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-3">Update Article</h2>

        <h3>Original Data</h3>
        <p><strong>Article Title:</strong> {{ $article->ArticleTitle }}</p>
        <p><strong>Article Description:</strong> {{ $article->ArticleDescription }}</p>
        <p><strong>Article Content:</strong> {{ $article->ArticleContent }}</p>
        <p><strong>Article Category:</strong> {{ $article->ArticleCategory->ArticleCategoryName }}</p>
    
        <form action="{{ route('Article.update', $article->Article_id) }}" class="mt-5" method="POST">
            @csrf
            @method('PUT') 

            <div class="form-group mb-3">
                <label for="ArticleTitle" class="mb-2">Article Title</label>
                <input type="text" class="form-control" id="ArticleTitle" name="ArticleTitle" value="{{ $article->ArticleTitle }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="ArticleDescription" class="mb-2">Article Description</label>
                <textarea class="form-control" id="ArticleDescription" name="ArticleDescription" rows="3" required>{{ $article->ArticleDescription }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="ArticleContent" class="mb-2">Article Content</label>
                <textarea class="form-control" id="ArticleContent" name="ArticleContent" rows="5" required>{{ $article->ArticleContent }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="category_id" class="mb-2">Article Category</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option disabled>Select a category</option>
                    @foreach($categories as $list)
                        <option value="{{ $list->ArticleCategoryId }}" {{ $article->ArticleCategoryId == $list->ArticleCategoryId ? 'selected' : '' }}>
                            {{ $list->category_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
