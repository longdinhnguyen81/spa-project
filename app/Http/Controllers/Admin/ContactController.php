<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
    	$contacts = Contact::orderBy('id', 'desc')->get();
    	return view('admin.contact.index', compact('contacts'));
    }
    public function delete($id){
    	$contact = Category::find($id);
    	$contact->delete();
    	return redirect(route('admin.contact.index'))->with('msg', 'Xoá thành công');
    }
}
