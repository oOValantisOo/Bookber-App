<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller{
    public function getAll(){
        $event_categories = EventCategory::all();
        $book_categories = BookCategory::all();
        $article_categories = ArticleCategory::all();

        return view('', compact('event_categoroies', 'book_categories', 'article_categories'));
    }
}