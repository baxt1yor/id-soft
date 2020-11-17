<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;
use App\Portfolio;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $portfolio = Portfolio::orderBy('created_at', "desc")->limit(5)->get();
    	return view('index', compact("portfolio"));
    }

    public function about(){
    	return view('about');
    }

    public function blog(){
        $posts = Post::latest()->paginate(6);
        $link = $posts->links();

        //$posts = Post::withTranslations()->get();
        
    	return view('blog', compact("posts", "link"));
    }

    public function contact(){
    	return view('contact');
    }

    public function switchLang($lang){
        session()->put('lang', $lang);
        return redirect()->back();  
    }

    // //Controller
    // $news_list = News::list_data($latest->id, 1);
    // $data['news_list'] = $news_list;

    // //View
    // @foreach($news_list as $news)
    // <h2>{!!nl2br($news->getTranslatedAttribute('title', $locale))!!}</h2>
    // @endforeach

    // {{ $news_list->links() }}
}
