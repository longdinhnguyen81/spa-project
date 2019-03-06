<?php

namespace App\Http\Controllers\Spa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class IndexController extends Controller
{
    public function index(){
    	return view('spa.index.index');
    }
    public function getContact(){
    	return view('spa.index.contact');
    }
    public function postContact(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);
        $contact = new Contact([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);
        $contact->save();
        return redirect(route('spa.index.contact'))->with('msg', 'Gửi liên hệ thành công!');

    }
}
