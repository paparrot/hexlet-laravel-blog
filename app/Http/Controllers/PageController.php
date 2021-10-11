<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $articles = \App\Models\Article::all()->toArray();
        $params = ['articles' => $articles];
        return view("about", $params);
    }
}
