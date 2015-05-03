<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {
	protected $fillable = ['name', 'starts_on', 'ends_on', 'description', 'permalink'];
	protected $dates = ['starts_on', 'ends_on'];

	public function students()
	{
		return $this->belongsToMany('\App\Student', 'course_user', 'course_id', 'user_id');
	}

  public function instructors()
  {
  	return $this->belongsToMany('\App\Instructor', 'course_user', 'course_id', 'user_id');
  }

  public function courseVideo()
  {
  	return $this->has_one('\App\Resource', 'id', 'video_resource_id');
  }

	public function courseImage()
	{
		return $this->has_one('\App\Resourse', 'id', 'image_reference_id');
	}

	public function topics()
	{
		return $this->hasMany('\App\Topic');
	}

	public function categories()
	{
		return $this->belongsToMany('\App\Category');
	}
}
