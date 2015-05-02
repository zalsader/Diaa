<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Baum\Node;

class Resource extends Node {

	protected $fillable = ['title', 'URI','released_on'];
	protected $scoped = ['topic_id'];

	public function type()
	{
		return $this->belongsTo('\App\ResouceType');
	}

	public function problems()
	{
		return $this->hasMany('\App\Problem');
	}
}
