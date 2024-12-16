<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::paginate(10);
        $categories = EventCategory::all();
        return view('events.events-user', compact('events', 'categories'));
    }

    public function create(){
        $categories = EventCategory::All();
        return view('createEvent', compact('categories'));
    }

    public function getEventById($id){
        $event = Event::find($id);
        
        if(event){
            return view('event', compact('event'));
        } else {
            return redirect()->route('eventsIndex')->with('error', 'Event not found!');
        }
    }

    public function store(Request $request){
        $request->validate([
            'EventTitle' => 'required|max:255',
            'EventDescription' => 'required|max:255',
            'StartDate' => ['required', 'date', 'after:' . now()->addWeek()->format('Y-m-d')],
            'EndDate' => 'required|date|after:StartDate',
            'EventCategoryId' => 'required|exists:EventCategory, EventCategoryId',
        ], [
            'StartDate' => 'Starting date has to be at least 1 week after the event is created',
            'EndDate' => 'End date has to be after the starting date',
        ]);

            $data = new Event;
            $data->EventTitle = $request->EventTitle;
            $data->EventDescription = $request->EventDescription;
            $data->StartDate = $request->StartDate;
            $data->EndDate = $request->EndDate;
            $data->EventCategoryId = $request->EventCategoryId;
            $data->save();

        return redirect()->route('eventsIndex')->with('Success', 'Event created successfully!');
    }

    public function updatePage($id){
        $event = Event::findOrFail($id);
        $categories = EventCategory::All();
        return view('updateEvent', compact('event', 'categories'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'EventTitle' => 'required|max:255',
            'EventDescription' => 'required|max:255',
            'StartDate' => ['required', 'date', 'after:' . now()->addWeek()->format('Y-m-d')],
            'EndDate' => 'required|date|after:StartDate',
            'EventCategoryId' => 'required|exists:EventCategory, EventCategoryId',
        ], [
            'StartDate' => 'Starting date has to be at least 1 week after the event is created',
            'EndDate' => 'End date has to be after the starting date',
        ]);
        
        $event = Event::find($id);

        if(!$event){
            return redirect()->route('home')->with('error', 'Event not found.');

        }

        $event->EventTitle = $request->EventTitle;
        $event->EventDescription = $request->EventDescription;
        $event->StartDate = $request->StartDate;
        $event->EndDate = $request->EndDate;
        $event->EventCategoryId = $request->EventCategoryId;

        $event->save();

        return redirect()->route('events.index')->with('Success', 'Event updated successfully!');
    }

    public function deleteEvent($id){
        $event = Event::find($id);

        if(event){
            $event->delete();
            return redirect()->route('event.index')->with('success', 'Event deleted successfully!');
        } else {
            return redirect()->route('event.index')->with('error', 'Event is not found!');
        }
    }

    public function getEventByCategory($category){
        $events = Event::where('EventCategoryId', '=', $category)->orderBy('EventCategoryId', 'asc')->get;
        return view('eventsCategory', compact('events'));
    }

    public function search(Request $request){
        $event_title = $request->input('event_title');
        $results = Event::where('event_title', 'Like', '%'. 'EventTitle'. '%');
        return view('eventSearch', compact('events'));
    }

    public function getLeaderboard($id){
        $entries = Donation::select('UserId', DB::raw('SUM(Quantity) as total_quantity'))
        ->where('EventId', '=', $id)
        ->groupBy('UserId')
        ->orderByDesc('total_quantity')
        ->get();

        return view('event', compact('entries'));
    }

}