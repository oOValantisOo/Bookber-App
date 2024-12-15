<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); 
        return view('booksIndex', compact('books')); 
    }

    public function create()
    {
        $categories = BookCategory::All();
        return view('createBook', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'BookTitle' => 'required|max:255',
            'BookAuthor' => 'required|max:255',
            'ReleaseDate' => 'required|date',
            'BookCategoryId' => 'required|exists:BookCategory, BookCategoryId'
        ]);

        $data = new Book;
        $data->BookTitle = $request->BookTitle;
        $data->BookAuthor = $request->BookAuthor;
        $data->ReleaseDate = $request->ReleaseDate;
        $data->BookCategoryId = $request->BookCategoryId;

        $data->save();

        return redirect()->route('booksIndex')->with('success', 'Book created successfully!');
    }

    public function showBook($id)
    {
        $book = Book::find($id); 

        if ($book) {
            return view('book', compact('book'));
        } else {
            return redirect()->route('booksIndex')->with('error', 'Book not found!');
        }
    }

    public function updatePage($id)
    {
        $book = Book::find($id);
        if(!$book){
            return redirect()->route('bookIndex')->with('error', 'Book not found!');
        }
        $categories = ArticleCategory::All();
        return view('updateBook', compact('book', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $data = Book::find($id);

        $request->validate([
            'BookTitle' => 'required|max:255',
            'BookAuthor' => 'required|max:255',
            'ReleaseDate' => 'required|date',
            'BookCategoryId' => 'required|exists:BookCategory, BookCategoryId'
        ]);

        $data->BookTitle = $request->BookTitle;
        $data->BookAuthor = $request->BookAuthor;
        $data->ReleaseDate = $request->ReleaseDate;
        $data->BookCategoryId = $request->BookCategoryId;

        $data->save();

        return redirect()->route('booksIndex')->with('success', 'Book updated successfully!');
    }

    public function deleteBook($id)
    {
        $book = Book::find($id); 

        if ($book) {
            $book->delete();
            return redirect()->route('booksIndex')->with('success', 'Book deleted successfully!');
        } else {
            return redirect()->route('booksIndex')->with('error', 'Book not found!');
        }
    }

    public function search(Request $request){
        $book_title = $request->input('book_title');
        $results = Book::where('BookTitle', 'Like', '%'. $book_title .'%')->get();

        return view('bookSearch', compact('results'));
    }
}