<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Category;

use App\Http\Requests;

class CategoriesController extends Controller
{
    public function new_category(Request $request) {

	    if($request->isMethod('post'))
	    {
		    $category = new Category;
		    $category->name = $request->input('category_name');
		    $category->description = $request->input('description');
		    $category->save();

		    return redirect('task/categories');
	    }

	    return view('categories.new_category');
    }

	public function edit_category(Request $request, $id) {

		$category = Category::find($id);


		if($request->isMethod('post'))
		{
			$category->name = $request->input('category_name');
			$category->description = $request->input('description');
			$category->save();

			return redirect('task/categories');
		}

		return view('categories.edit_category',['category'=>$category]);
	}


}
