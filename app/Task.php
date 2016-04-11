<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
	protected $primaryKey = 'id';

	public function category() {
		return $this->belongsTo('App\Category');
	}

	public function level() {
		return $this->belongsTo('App\Level');
	}

	public function tags() {
		return $this->belongsToMany('App\Tag');
	}
}
