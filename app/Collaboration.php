<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model {

	protected $fillable = ['content'];


	public function type()
	{
		return $this->belongsTo('\App\CollaborationType');
	}

	public function creator()
	{
		return $this->belongsTo('\App\User');
	}

}
