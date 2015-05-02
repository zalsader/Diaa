<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model {

	protected $fillable = ['feedback','grade','grade_after_penalty','graded_on'];
	protected $dates = ['graded_on'];

	public function submission()
	{
		return $this->belongsTo('\App\Submission');
	}

	public function grader()
	{
		return $this->belongsTo('\App\Instructor', 'id', 'grader_id');
	}
}
