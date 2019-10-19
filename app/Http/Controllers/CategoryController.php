<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$data=$request->all();
    		$category=new Category();
    		$category->name=$data['category_name'];
    		$category->description =$data['desc'];
    		$category->url=$data['url'];
    		$category->save();
            return redirect('viewcategory')->with('success','Category added Successfully !!!');
    	}
    	
       return view('Add_Category');    	
    }
    public function viewCategory()
    {

        $categories=Category::get();
        $categories=json_decode(json_encode($categories));
        return view('view_category')->with(compact('categories'));
    }
}
