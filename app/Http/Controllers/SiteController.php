<?php

namespace App\Http\Controllers;
// use TCG\Voyager\Models\Post;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
    	//$posts = Post::limit(5)->get();

    	return view('index');
    }

    public function about(){
    	return view('about');
    }

    public function blog(){
    	return view('blog');
    }

    public function contact(){
    	return view('contact');
    }
}
