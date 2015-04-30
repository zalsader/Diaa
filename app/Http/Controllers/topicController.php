<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Topic;
use App\Http\Requests\AddTopicRequest;

class topicController extends Controller {


    public function add_topic(){

        return view('topics.addTopic');
    }
    public function  store(AddTopicRequest $request){

        $input = $request->all();
        $input['course_id']=1;
        Topic::create($input) ;
        return redirect('add_topic');
    }

    //

}
