<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {
  
	protected $fillable = ["title", "released_on"];
	protected $dates = ["released_on"];

	public function course()
	{
		return $this->belongsTo('\App\Course');
	}

	public function resources()
	{
		return $this->hasMany('\App\Resource');
	}

	public function scopeShallow($query)
	{
		return scopeDepth($query, 0);
	}

	public function scopeDepth($query, $depth)
	{
		return $query->where('depth', '=', $depth);
	}

}
