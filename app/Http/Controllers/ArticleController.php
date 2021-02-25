<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::latest()->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // validare i dati
        $validatedData = $request->validate([
           'title' => 'required',
           'body' => 'required' 
        ]);
        Article::create($validatedData);

        
        //$alpha_articles = Post::orderBy('title')->take(5)->get();
        $new_article = Article::orderBy('id', 'desc')->first();

        return redirect()->route('articles.show', $new_article);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {

        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  
     * @param  \App\Article  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

        // validare i dati

         $validatedData = $request->validate([
           'title' => 'required',
           'body' => 'required' 
        ]);


        $article->update($validatedData);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {

        $article->delete();
        return redirect()->route('articles.index');
    }
}