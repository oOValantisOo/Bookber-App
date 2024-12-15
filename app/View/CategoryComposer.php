<?php

namespace App\Http\View;
use Illuminate\View\View;
use App\Models\BookCategory;
use App\Models\EventCategory;
use App\Models\ArticleCategory;


class CategoryComposer
{
    public function compose(View $view){
        $view->with('book_categories', 'event_categories', 'article_categories' , BookCategory::all(), EventCategory::all(), ArticleCategory::all());
    }
}