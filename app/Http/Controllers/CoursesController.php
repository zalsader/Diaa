<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCourseRequest;


class CoursesController extends Controller {

	//
    public function index ()
    {
        $courses = Course::all();
        return view('courses.courses',compact('courses'));
    }

    public function createCourse(){

        return view('courses.createCourse');
    }



    public function  store(CreateCourseRequest $request){


        Course::create($request->all()) ;
    return redirect('courses');
    }

}
