<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $fillable = ['name', 'description'];

	public function courses()
	{
		return $this->belongsToMany('\App\Course');
	}

	public function getCountAttribute()
	{
		return $this->courses()->count();
	}
}
