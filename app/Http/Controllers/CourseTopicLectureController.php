<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TopicRequest;
use App\Http\Requests\LectureRequest;
use App\Http\Controllers\Controller;
use App\Topic;
use App\Course;
use App\Resource;
use App\ResourceType;
use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\FormBuilder;
class CourseTopicLectureController extends Controller {
	/* TODO
	check if current user is registered
	complete this
	*/
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($permalink, $topic_id)
	{
        $course = Course::wherePermalink($permalink)->firstOrFail();
				$topic = $course->topics()->findOrFail($topic_id);
				$resources = $topic->resources()->paginate(1);
        return view('lecture.index',compact('topic', 'course', 'resources'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create($permalink, $topic_id)
    {
        $course = Course::wherePermalink($permalink)->firstOrFail();
				$topic = $course->topics()->findOrFail($topic_id);
        $form = \FormBuilder::create('App\Forms\ResourceForm', [
            'method' => 'POST',
            'url' => route('course.topic.lecture.store', [$permalink, $topic_id])
        ])->add('course_id','hidden',[
            'default_value' => $course->id
        ]);


        return view('lecture.create', compact('form'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($permalink, $topic_id, LectureRequest $request)
    {
				$course = Course::wherePermalink($permalink)->firstOrFail();
				$topic = $course->topics()->findOrFail($topic_id);
				$resource = Resource::create($request->all());
				$type = ResourceType::whereName($request->input('rtype'))->whereMedium($request->input('rmedium'))->first();
				$resource->resource_type_id = $type->id;
				$resource->topic_id = $topic->id;
				$resource->save();
        return redirect()->route('course.topic.show', [$permalink, $topic_id]);
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
      return view('topic.show',compact('topic', 'course'));
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
