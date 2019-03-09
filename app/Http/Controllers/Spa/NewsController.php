<?php

namespace App\Http\Controllers\Spa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Category;

class NewsController extends Controller
{
    public function index(){
    	$news = News::where('active', 1)->orderBy('id', 'desc')->with('cat')->paginate(3);
    	return view('spa.news.index', compact('news'));
    }
    public function news($slug){
    	$cats = Category::where('slug_name',$slug)->first();
        $name = $cats->name;
        $news = News::where('active', 1)->where('category_id', $cats->id)->with('cat')->paginate(3);
    	return view('spa.news.news', compact('news', 'name'));
    }
    public function detail($slug, $id){
    	$news = News::where('active', 1)->where('id', $id)->with('cat')->first();
    	return view('spa.news.detail', compact('news'));
    }
    public function search(Request $request){
        $name = $request->name;
        $news = News::where('active', 1)->where('title','like' ,'%'.$name.'%')->with('cat')->paginate(3);
        return view('spa.news.search', compact('news'));
    }
}
