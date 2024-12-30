<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookCategory;
use App\Models\Book;

class BookCategoryController extends Controller
{
    public function index(){
        $categories = BookCategory::all();
        return view('bookCategories', compact('categories'));
    }

    public function getAll(){
        $categories = BookCategory::all();
        return view('welcome', compact('book_categories'));
    }

    public function create()
    {
        return view('createBookCategory');
    }

    public function store(Request $request){
        $request->validate([
            'BookCategoryName' => 'required|max:255',
            'BookCategoryDescription' => 'required|max:255',
        ]);

    	$data=new BookCategory;
    	$data->BookCategoryName = $request->BookCategoryName;
        $data->BookCategoryDescription = $request->BookCategoryDescription;
        $data->save();
        return Redirect()->route('home');
    }

    public function getCategoryByIdGuest($id){
        $book_category = BookCategory::where('BookCategoryId','=', $id)->first();
        $books = Book::where('BookCategoryId', '=', $id)->paginate(10);
        return view('books.book-category-guest', compact('book_category', 'books'));
    }

    public function getCategoryByIdUser($id){
        $book_category = BookCategory::where('BookCategoryId','=', $id)->first();
        $books = Book::where('BookCategoryId', '=', $id)->paginate(10);
        return view('books.book-category-user', compact('book_category', 'books'));
    }


    public function getCategoryByIdAdmin($id){
        $book_category = BookCategory::where('BookCategoryId','=', $id)->first();
        $books = Book::where('BookCategoryId', '=', $id)->paginate(10);
        return view('books.book-category-admin', compact('book_category', 'books'));
    }


    public function getCategoryByName($name){
        $category = BookCategory ::where('BookCategoryName','=', $name)->get();
        return view('bookCategory', compact('category'));
    }

    public function deleteCategory($id){
        $category = BookCategory::find($id); 

        if ($category) {
            $category->delete();
            return redirect()->route('categories')->with('success', 'Book Category deleted successfully!');
        } else {
            return redirect()->route('categories')->with('error', 'Book Category not found!');
        }
    }

    public function updatePage($id){
        $category = BookCategory::findOrFail($id);
        return view('updateBookCategory', compact('category'));
    }

    public function updateCategory(Request $request, $id){
        $category = BookCategory::findOrFail($id);

        if(!$category){
            return redirect()->route('home')->with('error', 'Book Category not found.');
        }

        $request->validate([
            'BookCategoryName' => 'required|max:255',
            'BookCategoryDescription' => 'required|max:255',
        ]);

        $category->BookCategoryName= $request->BookCategoryName;
        $category->BookCategoryDescription = $request->category_description;

        $category->save();
        return redirect()->route('home')->with('success', 'Book Category updated successfully.');
    }
}