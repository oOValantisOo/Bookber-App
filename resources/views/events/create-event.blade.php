@extends('layouts1.admin')

@section('title1', 'EventDetail')

@section('content1')

    <div class="container mt-5">
        <h2>Create a New Event</h2>
        <form action="{{ route('event.create') }}" method="POST" class="w-50">
            @csrf
            <div class="form-group mb-3">
                <label for="EventTitle" class="mb-2">Event Title</label>
                <input type="text" class="form-control width" id="EventTitle" name="EventTitle" required>
            </div>
            <div class="form-group mb-3">
                <label for="EventDescription" class="mb-2">Event Description</label>
                <textarea class="form-control" id="EventDescription" name="EventDescription" rows="3" required></textarea>
            </div>
            <div class="form-floating">
                <input type="date" class="form-control" id="StartDate" name="StartDate" placeholder="MM/DD/YYYY">
                <label for="startDate">Start Date</label>
            </div>
            <div class="form-floating">
                <input type="date" class="form-control" id="EndDate" name="EndDate" placeholder="MM/DD/YYYY">
                <label for="date">End Date</label>
            </div>
            <select name ="EventCategoryId" class="form-select form-select-lg mb-3 mt-5" aria-label=".form-select-lg example">
                <option selected>Event Category</option>
                @foreach($categories as $list)
                <option value="{{$list->EventCategoryId}}">{{ $list->EventCategoryName }}
                @endforeach
                </select>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
@endsection
