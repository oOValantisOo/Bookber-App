<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Event;
use App\Models\Donation;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function guest(){
        $events = Event::latest()->take(10)->get();
        return view('home.home-guest', compact('events'));
    }

    public function admin(){
        $events = Event::latest()->take(10)->get();
        $books = Book::latest()->take(10)->get();  
        $donations = Donation::latest()->take(10)->get();
        $users = User::latest()->take(10)->get();

        return view('home.home-admin', compact('events', 'books', 'donations', 'users'));
    }


    public function user(){
        $events = Event::latest()->take(10)->get();
        return view('home-user', compact('events'));
    }
}