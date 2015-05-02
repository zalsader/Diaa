<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model {

	protected $fillable = ['title', 'URI','released_on'];

	public function type()
	{
		return $this->belongsTo('\App\ResouceType');
	}

	public function problems()
	{
		return $this->hasMany('\App\Problem');
	}
}
