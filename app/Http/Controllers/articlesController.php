<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class articlesController extends Controller
{
    public function index() {
    	
        $data['articles'] = Article::all()->sortByDesc('created_at');
    	return view('articles', $data);

    }
}
