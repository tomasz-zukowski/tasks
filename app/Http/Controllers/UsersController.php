<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
	public function lists($id = null)
	{
		return view('users.lists', ['users' => User::orderBy('name')->get()]);
	}

	public function details($id)
	{
		return view('users.details', ['info' => User::find($id)]);
	}
}
