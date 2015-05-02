<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Baum\Node;

class Collaboration extends Node {

	protected $fillable = ['content'];
	protected $scoped = ['resource_id', 'thread_id'];

	public function type()
	{
		return $this->belongsTo('\App\CollaborationType');
	}

	public function creator()
	{
		return $this->belongsTo('\App\User');
	}

}
