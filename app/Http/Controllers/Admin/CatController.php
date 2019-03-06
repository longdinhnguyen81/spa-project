<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CatController extends Controller
{
    public function index(){
    	$cats = Category::where('parent_id', 0)->get();
    	$parent_cats = Category::where('parent_id','!=',0)->get();
    	return view('admin.category.index', compact('cats','parent_cats'));
    }
    public function getAdd(){
    	$cats = Category::all();
    	return view('admin.category.add', compact('cats'));
    }
    public function postAdd(Request $request){
    	$request->validate([
    		'name' => 'required|unique:category',
    	]);
    	$name = $request->name;
    	$slug_name = str_slug($name);
    	$parent_id = $request->parent_id;
    	$category = new Category([
    		'name' => $name,
    		'slug_name' => $slug_name,
    		'parent_id' => $parent_id
    	]);
    	$category->save();
    	return redirect(route('admin.category.index'))->with('msg', 'Thêm thành công');
    }
    public function getEdit($id){
    	$cat = Category::find($id);
    	return view('admin.category.edit', compact('cat'));
    }
    public function postEdit(Request $request,$id){
    	$request->validate([
    		'name' => 'required|unique:category,name,'.$id,
    	]);
    	$cat = Category::find($id);
    	$cat->name = $request->name;
    	$cat->update();
    	return redirect(route('admin.category.index'))->with('msg', 'Sửa thành công');
    }
    public function delete($id){
    	$cat = Category::find($id);
    	$cat_parent = Category::where('parent_id', $id);
    	$cat->delete();
    	$cat_parent->delete();
    	return redirect(route('admin.category.index'))->with('msg', 'Xoá thành công');
    }
}
