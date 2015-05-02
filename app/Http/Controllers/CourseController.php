<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Course;
use App\Forms\CourseCreateForm;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\Form;

class CourseController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $courses = Course::all();
        return view('course.index',compact('courses'));
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

        Course::create($request->all()) ;
        return redirect('course/create');
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function create(FormBuilder $formBuilder)
	{

        $form = $formBuilder->create('App\Forms\CourseCreateForm', [
            'method' => 'POST',
            'url' => route('course.store')
        ]);

        return view('course.create', compact('form'));
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($permalink)
	{
        $course = Course::where('permalink',$permalink)->firstOrFail();

            return view('course.show',compact('course'));
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(FormBuilder $formBuilder,$permalink)

	{
         $course = Course::where('permalink',$permalink)->firstOrFail();

        $form = $formBuilder->create('App\Forms\CourseCreateForm', [
            'method' => 'PUT',
            'url' => route('course.update',$permalink),
            'model'=>$course
        ])
            ->remove('Create')
            ->add('edit', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ]);

        return view('course.edit', compact('form','permalink'));
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($permalink,Request  $request)
	{
        $course = Course::where('permalink',$permalink)->firstOrFail();

       $course->update($request->all());
        return redirect('course');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        dd($id);
        return "yes";
      /*  $course= Course::findOrFail($id);
        $course->delete();
*/
		//
	}







}
