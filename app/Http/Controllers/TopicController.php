<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Topic;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\Form;
class TopicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $topics = Topic::all();

        return view('topic.index',compact('topics'));
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(FormBuilder $formBuilder)
	{
        $course_id = Input::get('course_id');

        $form = $formBuilder->create('App\Forms\TopicForm', [
            'method' => 'POST',
            'url' => route('topic.store')
        ])->add('course_id','hidden',[
            'default_value' => $course_id
        ]);


        return view('topic.create', compact('form'));
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        Topic::create($request->all()) ;
        return redirect('topic/create');
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{       $topic = Topic::findOrFail($id);

        return view('topic.show',compact('topic'));
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,FormBuilder $formBuilder)
	{
        $topic = Topic::findOrFail($id);

        $form = $formBuilder->create('App\Forms\TopicForm', [
            'method' => 'PUT',
            'url' => route('topic.update',$id),
            'model'=>$topic
        ])
            ->remove('Create')
            ->add('edit', 'submit', [
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
	public function update($id,Request $request)
	{
        $topic = Topic::findOrFail($id);

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
	public function destroy($id)
	{
        $topic = Topic::findOrFail($id);
        $topic->delete();
        return redirect('topic');
		//
	}

}
