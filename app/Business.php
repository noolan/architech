<?php

namespace Architech;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
	protected $guarded = ['id'];


	// relationships
	public function users() {
		return $this->hasMany('Architech\User');
	}

	public function pages() {
		return $this->hasMany('Architech\Page');
	}

	public function products() {
		return $this->hasMany('Architech\Product');
	}

	public function categories() {
		return $this->hasMany('Architech\Category');
	}

	public function tags() {
		return $this->hasMany('Architech\Tag');
	}

	public static function findByURL($url) {
		return Business::where('url', '=', $url)->first();
	}
}
