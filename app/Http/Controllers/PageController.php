<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function articles(){
        return view('pages.articles');
    }
    public function contacts(){
        return view('pages.contacts');
    }
}
