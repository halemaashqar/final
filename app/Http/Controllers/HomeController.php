<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;

class HomeController extends Controller
{
	public function index()
    {
    	$categories = Category::all();
    	$gifts = Gift::all();
        return view('index', ['categories' => $categories, 'gifts' => $gifts]);
    }
}
