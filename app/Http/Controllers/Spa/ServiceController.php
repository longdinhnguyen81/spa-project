<?php

namespace App\Http\Controllers\Spa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::with('catpackage')->where('active', 1)->orderBy(\DB::raw('RAND()'))->get();
    	return view('spa.service.index', compact('services'));
    }
    public function service($slug){
    	$service = Service::where('slug', $slug)->with('catpackage')->first();
    	return view('spa.service.service', compact('service'));
    }
    public function learn(){
    	return view('spa.service.learn');
    }
}
