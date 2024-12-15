<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Event;
use App\Models\Donation;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function getAll(){
        $events = Event::all();
        $books = Book::all();
        $donation = Donation::all();
        return view('welcome', compact('events', 'books', 'donations'));
    }
}