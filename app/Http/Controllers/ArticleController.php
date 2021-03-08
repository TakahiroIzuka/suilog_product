<?php

namespace App\Http\Controllers;

use App\Article;
use App\Store;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    // public function index()
    // {
    //     return view('articles.index');    
    // }

    public function create()
    {
        return view('articles.create');    
    }

    public function store(ArticleRequest $request, Article $article)
    {
        $article->title = $request->title;
        $article->body = $request->body;
        $article->user_id = $request->user()->id;
        $article->store_id = $request->store_id;
        $article->save();
        return redirect()->route('cards.show', [ 'id' => $request->store_id ] );
    }
}
