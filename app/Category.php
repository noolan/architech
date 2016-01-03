<?php

namespace Architech;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $guarded = ['id'];

	// relationships

	public function business() {
		return $this->belongsTo('Architech\Business');
	}

	public function children() {
		return $this->hasMany('Architech\Category', 'parent_id');
	}

	public function parent() {
		return $this->belongsTo('Architech\Category', 'id', 'parent_id');
	}
}
