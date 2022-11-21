<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $categories = Category::all();
        $books = Book::all();

        return view('main.home',compact('books', 'categories'));
    }

    public function detail($id) {
        $categories = Category::all();
        $book = Book::all()->find($id);

        return view('book.book_detail',compact('book', 'categories'));
    }
}
