<?php

namespace Architech;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = ['id'];

	// relationships

	public function business() {
		return $this->belongsTo('Architech\Business');
	}

	public function category() {
		return $this->belongsTo('Architech\Category');
	}

	public function tags() {
		return $this->belongsToMany('Architech\Tag');
	}
}
