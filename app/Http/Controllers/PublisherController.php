<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index() {
        $categories = Category::all();
        $publishers = Publisher::all();

        return view ('publisher.publishers', compact('categories', 'publishers'));
    }

    public function detail($id) {
        $categories = Category::all();
        $publisher = Publisher::all()->find($id);
        $books = $publisher->books;

        return view('publisher.publisher_detail', compact('categories', 'publisher', 'books'));
    }
}
