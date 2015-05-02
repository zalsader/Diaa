<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {
 protected  $fillable =[
    'name',
    'starts_on',
    'ends_on',
    'description',
    'video_resource_id',
     'permalink',
     'img_resource_id'




];
	//
    public function topics()
    {
        return $this->hasMany('\App\Topic');
    }
}
