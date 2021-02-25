<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     * Show index page
     *
     * @return view
     */
    public function index()
    {

        $title = "Blog";

        return view('pages.welcome', compact('title'));

    }
    /**
     * Show about page
     *
     * @return view
     */
    public function about()
    {
        return view('pages.about', ['name' => "PierMario"]);
    }
     /**
     * Show contacts page
     *
     * @return view
     */
    public function contacts()
    {
        return view('pages.contacts');
    }
    /**
     * Show admin page
     *
     * @return view
     */
    public function admin()
    {
        return view('layouts.admin', ['name' => "PierMario"]);
    }
    /**
     * Show Articles
     *
     * @return view
     */
    public function api()
    {
        return view('api.articles') ;
    }


}