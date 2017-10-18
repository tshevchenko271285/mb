<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class createArticleController extends Controller
{
	public function __construct(){
    	$this->middleware('auth');
	}
	public function index(Request $request){

		if($request->isMethod('post')) {
			
			$title = $request->input('title');
			$text = $request->input('text');

			Article::create([
				'title' => $title,
				'text' => $text
			]);
			//dump($request->input('title'));
		}
		return view('create_article');
	}
}
