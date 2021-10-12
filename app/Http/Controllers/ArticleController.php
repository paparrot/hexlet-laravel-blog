<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function index(Request $req)
    {
        $searchString = $req->input('article', '');
        $articles = Article::where('name', 'like', "$searchString%")->paginate();
        return view('article.index', compact('articles', 'searchString'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }
}
