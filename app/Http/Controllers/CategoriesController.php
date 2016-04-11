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
		    $category->save();

		    return response()->view('categories.new_category');
	    }

	    return view('categories.new_category');
    }
}
