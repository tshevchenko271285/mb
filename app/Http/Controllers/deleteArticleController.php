<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class deleteArticleController extends Controller
{
    public function index(Request $request, $id){

    	Article::destroy($id);
    	return redirect()->route('articles');
    }
}
