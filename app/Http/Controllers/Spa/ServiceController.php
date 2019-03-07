<?php

namespace App\Http\Controllers\Spa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    public function index(){
    	return view('spa.service.index');
    }
    public function service($slug){
    	$cat = str_replace("-"," ",$slug);
    	$cats = str_replace("d","đ",$cat);
    	$service = Service::where('name','like' ,'%'.$cats.'%')->with('catpackage')->first();
    	return view('spa.service.service', compact('service'));
    }
    public function learn(){
    	return view('spa.service.learn');
    }
}
