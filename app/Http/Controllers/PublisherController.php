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
}
