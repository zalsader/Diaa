<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CollaborationType extends Model {

	protected $fillable = ['name'];

	public function collaborations()
	{
		return $this->hasMany('\App\Collaboration');
	}

}
