@extends('layout.master')

@section('content')
    <div class="container mt-5">
        
        <h2>Create a New Donation</h2>
        <form action="{{ route('donation.create') }}" method="POST" class="w-50">
            @csrf
            <div class="form-group mb-3">
                <label for="hero_name" class="mb-2">Name</label>
                <input type="text" class="form-control width" id="hero_name" name="hero_name" required>
            </div>
            <div class="form-group mb-3">
                <label for="hero_description" class="mb-2">Hero Description</label>
                <textarea class="form-control" id="hero_description" name="hero_description" rows="3" required></textarea>
            </div>
            <select name ="category_id" class="form-select form-select-lg mb-3 mt-5" aria-label=".form-select-lg example">
                <option selected>Hero Category</option>
                @foreach($categories as $list)
                <option value="{{$list->category_id}}">{{ $list->category_name }}
                @endforeach
                </select>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
