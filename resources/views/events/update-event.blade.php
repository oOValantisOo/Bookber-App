@extends('layouts1.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-3">Update Event</h2>
        <h3>Original Data</h3>
        <p><strong>Event name:</strong> {{ $event->EventTitle }}</p>
        <p><strong>Event description:</strong> {{ $event->EventDescription }}</p>
        <p><strong>Event start date:</strong> {{ $event->StartDate }}</p>
        <p><strong>Event end date:</strong> {{ $event->EndDate }}</p>
        <p><strong>Event category:</strong> {{ $event->EventCategory->EventCategoryName }}</p>

        <form action="{{ route('event.update', $event->EventId) }}" class="mt-5" method="POST">
            @csrf
            @method('PUT') 

            <!-- Event Title -->
            <div class="form-group mb-3">
                <label for="EventTitle" class="mb-2">Event Title</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="EventTitle" 
                    name="EventTitle" 
                    value="{{ old('EventTitle', $event->EventTitle) }}" 
                    required>
            </div>

            <!-- Event Description -->
            <div class="form-group mb-3">
                <label for="EventDescription" class="mb-2">Event Description</label>
                <textarea 
                    class="form-control" 
                    id="EventDescription" 
                    name="EventDescription" 
                    rows="3" 
                    required>{{ old('EventDescription', $event->EventDescription) }}</textarea>
            </div>

            <!-- Start Date -->
            <div class="form-floating mb-3">
                <input 
                    type="text" 
                    class="form-control" 
                    id="StartDate" 
                    name="StartDate" 
                    placeholder="MM/DD/YYYY" 
                    value="{{ old('StartDate', $event->StartDate) }}" 
                    required>
                <label for="StartDate">Start Date</label>
            </div>

            <!-- End Date -->
            <div class="form-floating mb-3">
                <input 
                    type="text" 
                    class="form-control" 
                    id="EndDate" 
                    name="EndDate" 
                    placeholder="MM/DD/YYYY" 
                    value="{{ old('EndDate', $event->EndDate) }}" 
                    required>
                <label for="EndDate">End Date</label>
            </div>

            <!-- Event Category -->
            <div class="form-group mb-3">
                <label for="category_id" class="mb-2">Event Category</label>
                <select 
                    name="category_id" 
                    id="category_id" 
                    class="form-select" 
                    required>
                    <option value="">Select Category</option>
                    @foreach($categories as $list)
                        <option value="{{ $list->EventCategoryId }}" 
                            {{ old('category_id', $event->EventCategory->EventCategoryId) == $list->EventCategoryId ? 'selected' : '' }}>
                            {{ $list->EventCategoryName }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
