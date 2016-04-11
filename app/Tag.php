<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = 'tags';
	protected $primaryKey = 'id';

	public function tasks() {
		return $this->belongsToMany('App\Task');
	}
}
