<?php

namespace Architech;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $guarded = ['id'];

	// relationships

	public function business() {
		return $this->belongsTo('Architech\Business');
	}

	public function products() {
		return $this->belongsToMany('Architech\Product');
	}
}
