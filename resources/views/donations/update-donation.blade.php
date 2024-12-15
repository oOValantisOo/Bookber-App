@extends('layout.master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-3">Update Hero</h2>
        <h3>Original Data</h3>
        <p>Hero name: {{ $hero->hero_name }}</p>
        <p>Hero description: {{ $hero->hero_description }}</p>
    
        <form action="{{ route('hero.update', $hero->hero_id) }}" class="mt-5" method="POST">
            @csrf
            @method('PUT') 

            <div class="form-group mb-3">
                <label for="name" class="mb-2">Hero Name</label>
                <input type="text" class="form-control" id="hero_name" name="hero_name" value="{{ $hero->hero_name }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="description" class="mb-2">Hero Description</label>
                <textarea class="form-control" id="hero_description" name="hero_description" rows="3" required>{{ $hero->hero_description }}</textarea>
            </div>

            <select name ="category_id" class="form-select form-select-lg mb-3 mt-5 ml-3" aria-label=".form-select-lg example">
                <option selected>Hero Category</option>
                @foreach($categories as $list)
                <option value="{{$list->category_id}}">{{ $list->category_name }}
                @endforeach
                </select>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
