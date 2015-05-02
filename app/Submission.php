<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model {

	protected $fillable = ['attempt_number','answer','is_submitted', 'submitted_on'];
	protected $dates = ['submitted_on'];

	public function problem()
	{
		return $this->belongsTo('\App\Problem');
	}

	public function student()
	{
		return $this->belongsTo('\App\Student', 'id', 'user_id');
	}

	public function assessments()
	{
		return $this->hasMany('\App\Assessment');
	}
}
