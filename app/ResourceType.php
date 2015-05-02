<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceType extends Model {
	protected $table = 'resource_type';

	protected $fillable = ['name', 'medium'];

	public function resources()
	{
		return $this->hasMany('\App\Resource');
	}

	public function scopeByTopic($query, $topicId)
	{
		return $query->where('topic_id', '=', $topicId);
	}

	// TODO scope by Course
}
