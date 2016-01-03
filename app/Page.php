<?php

namespace Architech;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $guarded = ['id'];

	// relationships

	public function business() {
		return $this->belongsTo('Architech\Business');
	}

	public static function findByURI($uri) {
		return Page::where('uri', '=', $uri)->first();
	}
}
