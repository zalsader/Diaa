<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {
    protected  $fillable =[
        'course_id',
        'title',
        'released_on',





    ];
	//
    public function course(){

    return $this->belongsTo('App\Course');
}

}
