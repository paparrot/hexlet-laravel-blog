<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function index(Request $req)
    {
        $flash = $req->session()->get('status');
        $q = $req->input('q', '');
        $articles = $q ? Article::where('name', 'like', "$q%")->paginate() : Article::paginate();
        return view('article.index', compact('articles', 'q', 'flash'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $req)
    {
        $data = $this->validate($req, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:1000'
        ]);
        $req->session()->flash('status', 'Статья добавлена!');
        $article = new Article();
        $article->fill($data);
        $article->save();
        return redirect()->route('article.index');
    }
}
