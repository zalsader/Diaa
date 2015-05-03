<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Course;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\FormBuilder;
class CourseTopicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($permalink)
	{
        $course = Course::where('permalink',$permalink)->firstOrFail();

        $topics = $course->topics;
        return view('topic.index',compact('topics'));
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create(FormBuilder $formBuilder,$permalink)
    {
        $course = Course::where('permalink',$permalink)->firstOrFail();
        $form = $formBuilder->create('App\Forms\TopicForm', [
            'method' => 'POST',
            'url' => route('course.topic.store')
        ])->add('course_id','hidden',[
            'default_value' => $course->id
        ]);


        return view('topic.create', compact('form'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($permalink, Request $request)
    {
				$course = Course::wherePermalink($permalink)->firstOrFail();
				$topic = new Topic($request->all());
				$course->topics()->save($topic);
        return redirect('course', $permalink);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($permalink,$id)
    {
			$course = Course::wherePermalink($permalink)->firstOrFail();
		  $topic = $course->topics()->findOrFail($id);

        return view('topic.show',compact('topic'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($permalink,$id,FormBuilder $formBuilder)
    {
			$course = Course::wherePermalink($permalink)->firstOrFail();
			$topic = $course->topics()->findOrFail($id);

        $form = $formBuilder->create('App\Forms\TopicForm', [
            'method' => 'PUT',
            'url' => route('topic.update',$id),
            'model'=>$topic
        ])
            ->remove('Create')
            ->add('Update', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ]);
        $deleteForm = $formBuilder->create('App\Forms\DeleteForm', [
            'method' => 'DELETE',
            'url' => route('topic.destroy',$topic->id)

        ]);
        return view('topic.edit',compact('form','deleteForm','permalink'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($permalink,$id,Request $request)
    {
				$course = Course::wherePermalink($permalink)->firstOrFail();
				$topic = $course->topics()->findOrFail($id);
        $topic->update($request->all());
        return redirect('topic');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($permalink,$id)
    {
				$course = Course::wherePermalink($permalink)->firstOrFail();
        $topic = $course->topics()->findOrFail($id);
        $topic->delete();
        return redirect('topic');
        //
    }


}
