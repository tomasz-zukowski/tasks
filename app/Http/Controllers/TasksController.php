<?php

namespace App\Http\Controllers;

class TasksController extends Controller
{
	public function fromCategory($id) {
		return view('tasks')
	}
}
