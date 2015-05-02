<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model {

	protected $fillable = ['name','released_on','soft_deadline','hard_deadline',
													'max_submission','max_duration','weight'];

	public function type()
	{
		return $this->belongsTo('\App\ProblemType');
	}

	public function relatedResource()
	{
		return $this->belongsTo('\App\Resource');
	}

	public function submissions()
	{
		return $this->hasMany('\App\Submission');
	}

}
