<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Course;
use App\Resourse;
use App\ResourceType;
use App\Category;

use Request;
use Kris\LaravelFormBuilder\Form;

class CourseController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
				if (Request::has('category')){//TODO

					$category = Category::whereName(Request::input('category'))->firstOrFail();
					$courses = Course::categoryList([$category->name])->paginate(3)->appends(['category'=>$category->name]);
				} else{
					$courses = Course::paginate(3);
				}
				$categories = Category::all();
        return view('course.index',compact('courses', 'categories'));
	//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function store(CourseRequest $request)
	{
		$data = $request->all();
    $course = Course::create($data);
		$videoType = ResourceType::whereName('informational')->whereMedium('video')->first();
		$resource = new Resource($data['courseVideo']['URI']);
		$resource->types()->attach($videotype);
		$course->courseVideo = $resource;
    return redirect()->route('course.show', $course->permalink);
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function create()
	{

        $form = \FormBuilder::create('App\Forms\CourseForm', [
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
	public function edit($permalink)

	{
         $course = Course::wherePermalink($permalink)->firstOrFail();

        $form = \FormBuilder::create('App\Forms\CourseForm', [
            'method' => 'PUT',
            'url' => route('course.update',$permalink),
            'model'=>$course
        ])
            ->remove('Create')
            ->add('Update', 'submit', [
                'attr' => ['class' => 'btn btn-primary']
            ]);
        $deleteForm = \FormBuilder::create('App\Forms\DeleteForm', [
            'method' => 'DELETE',
            'url' => route('course.destroy',$course->permalink)

        ]);
        return view('course.edit',compact('form','deleteForm','permalink'));
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($permalink, CourseRequest $request)
	{
      $course = Course::wherePermalink($permalink)->firstOrFail();
      $course->update($request->all());
      return redirect('course');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($permalink)
	{
        $course = Course::wherePermalink($permalink)->firstOrFail();
        $course->delete();
        return redirect('course');
	//
	}







}
