<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TopicRequest;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Course;
use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\FormBuilder;
class CourseTopicController extends Controller {
/* TODO
check if current user is registered
*/
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($permalink)
	{
        $course = Course::wherePermalink($permalink)->firstOrFail();
        $topics = $course->topics;
        return view('topic.index',compact('topics', 'course'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create($permalink)
    {
        $course = Course::wherePermalink($permalink)->firstOrFail();
        $form = \FormBuilder::create('App\Forms\TopicForm', [
            'method' => 'POST',
            'url' => route('course.topic.store', $permalink)
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
    public function store($permalink, TopicRequest $request)
    {
				$course = Course::wherePermalink($permalink)->firstOrFail();
				$topic = new Topic($request->all());
				$course->topics()->save($topic);
        return redirect()->route('course.show', $permalink);
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
        return redirect()->route('course.topic.lecture.index', [$permalink,$id]);//view('topic.show',compact('topic', 'course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($permalink,$id)
    {
			$course = Course::wherePermalink($permalink)->firstOrFail();
			$topic = $course->topics()->findOrFail($id);

        $form = \FormBuilder::create('App\Forms\TopicForm', [
            'method' => 'PUT',
            'url' => route('course.topic.update',[$permalink, $id]),
            'model'=>$topic
        ])
            ->remove('Create')
            ->add('Update', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ]);
        $deleteForm = \FormBuilder::create('App\Forms\DeleteForm', [
            'method' => 'DELETE',
            'url' => route('course.topic.destroy',$permalink, $id)

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
    public function update($permalink,$id,TopicRequest $request)
    {
				$course = Course::wherePermalink($permalink)->firstOrFail();
				$topic = $course->topics()->findOrFail($id);
        $topic->update($request->all());
        return redirect()->route('course.topic.show', [$permalink, $id]);
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
				return redirect()->route('course.topic.show', [$permalink, $id]);
        //
    }


}
