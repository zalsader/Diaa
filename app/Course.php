<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Course extends Model {
	protected $fillable = ['name', 'starts_on', 'ends_on', 'description', 'permalink'];
	protected $dates = ['starts_on', 'ends_on'];

	public function users()
	{
		return $this->belongsToMany('\App\User');
	}

	public function students()
	{
		return $this->users()->students();
	}

  public function instructors()
  {
  	return $this->users()->instructors();
  }

  public function courseVideo()
  {
  	return $this->hasOne('\App\Resource', 'id', 'video_resource_id');
  }

	public function courseImage()
	{
		return $this->hasOne('\App\Resource', 'id', 'img_resource_id');
	}

	public function topics()
	{
		return $this->hasMany('\App\Topic');
	}

	public function categories()
	{
		return $this->belongsToMany('\App\Category');
	}

	public function getExcerptAttribute()
	{
		return $this->description; // TODO
	}

	public function scopeLatest($query)
	{
		return $query->where('starts_on', '>', Carbon::now()->toDateTimeString());
	}
}
