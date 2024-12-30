<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Donation;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function indexGuest()
    {
        $books = Book::paginate(10); 
        $book_categories = BookCategory::all();
        return view('books.books-guest', compact('books', 'book_categories'));
    }

    public function indexUser()
    {
        $books = Book::paginate(10); 
        $book_categories = BookCategory::all();
        return view('books.books-user', compact('books', 'book_categories'));
    }

    public function indexAdmin()
    {
        $books = Book::paginate(10); 
        $book_categories = BookCategory::all();
        return view('books.books-admin', compact('books', 'book_categories'));
    }

    public function create(Request $request)
    {
        $donation = Donation::find($request->id);
        $categories = BookCategory::All();
        return view('books.create-book', compact('donation', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'BookTitle' => 'required|max:255',
            'BookAuthor' => 'required|max:255',
            'ReleaseDate' => 'required|date',
            'BookCategoryId' => 'required|exists:book_categories,BookCategoryId',
            'DonationId' => 'required|exists:donations,DonationId'
        ]);

        $donation = Donation::find($request->DonationId);
        $donation->Quantity+=1;
        $donation->save();

        $data = new Book;
        $data->BookTitle = $request->BookTitle;
        $data->BookAuthor = $request->BookAuthor;
        $data->ReleaseDate = $request->ReleaseDate;
        $data->BookCategoryId = $request->BookCategoryId;
        $data->DonationId = $request->DonationId;

        $data->save();

        return redirect()->route('event-user.all');
    }

    public function getBookByIdGuest($id)
    {
        $book = Book::find($id); 

        if ($book) {
            return view('books.book-details-guest', compact('book'));
        } else {
            return redirect()->route('booksIndex')->with('error', 'Book not found!');
        }
    }

    public function getBookByIdUser($id)
    {
        $book = Book::find($id); 

        if ($book) {
            return view('books.book-details-user', compact('book'));
        } else {
            return redirect()->route('booksIndex')->with('error', 'Book not found!');
        }
    }

    public function getBookByIdAdmin($id)
    {
        $book = Book::find($id); 

        if ($book) {
            return view('books.book-details-admin', compact('book'));
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