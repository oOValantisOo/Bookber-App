<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Models\Event;

class EventCategoryController extends Controller
{
    public function index(){
        $categories = EventCategory::all();
        return view('eventCategories', compact('categories'));
    }

    public function getAll(){
        $categories = EventCategory::all();
        return view('welcome', compact('event_categories'));
    }

    public function create()
    {
        return view('createEventCategory');
    }

    public function store(Request $request){
        $request->validate([
            'EventCategoryName' => 'required|max:255',
            'EventCategoryDescription' => 'required|max:255',
        ]);

    	$data = new EventCategory;
    	$data->EventCategoryName = $request->EventCategoryName;
        $data->EventCategoryDescription = $request->EventCategoryDescription;
        $data->save();
        return Redirect()->route('home');
    }

    public function getCategoryById($id){
        $category = EventCategory::where('EventCategoryId','=', $id)->first();
        $events = Event::where('EventCategoryId', '=', $id)->get();
        return view('eventCategory', compact('event_category', 'events'));
    }

    public function getCategoryByName($name){
        $category = EventCategory::where('EventCategoryName','=', $name)->get();
        return view('eventCategory', compact('event_category'));
    }

    public function deleteCategory($id){
        $category = EventCategory::find($id); 

        if ($category) {
            $category->delete();
            return redirect()->route('categories')->with('success', 'Event Category deleted successfully!');
        } else {
            return redirect()->route('categories')->with('error', 'Event Category not found!');
        }
    }

    public function updatePage($id){
        $category = EventCategory::findOrFail($id);
        return view('updateCategory', compact('category'));
    }

    public function updateCategory(Request $request, $id){
        $category = EventCategory::findOrFail($id);

        if(!$category){
            return redirect()->route('home')->with('error', 'Event Category not found.');
        }

        $request->validate([
            'EventCategoryName' => 'required|max:255',
            'EventCategoryDescription' => 'required|max:255',
        ]);

        $category->EventCategoryName = $request->EventCategoryName;
        $category->EventCategoryDescription = $request->EventCategoryDescription;

        $category->save();
        return redirect()->route('home')->with('success', 'Event Category updated successfully.');
    }
}