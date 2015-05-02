<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceType extends Model {

	protected $fillable = ['name', 'medium'];

	public function resources()
	{
		return $this->hasMany('\App\Resource');
	}
}
