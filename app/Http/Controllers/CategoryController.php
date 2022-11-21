<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function bookCategory($id) {
        $categories = Category::all();
        $books = Book::query()->join(
            'book_categories', 'book_categories.book_id', 'books.id'
        )-> join (
            'categories', 'categories.id', 'book_categories.category_id'
        )->where('category_id','=',"{$id}")->get();


        return view('book.book_categories', compact('books','categories'));
    }
}
