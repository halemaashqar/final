<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontSiteController extends Controller
{
    public function showHome(){
        return view('frontsite.home');
    }

    public function showSingle(){
        return view('frontsite.single');
    }

    public function showBlog(){
        return view('frontsite.blog');
    }

    public function showContact(){
        return view('frontsite.contact');
    }
}
