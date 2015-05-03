<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCourseRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
             'name'=>'required|min:5',
             'starts_on'=>'required|date',
             'ends_on'=>'required|date',
             'description'=>'required',
             'video_resource_id'=>'required'
		];
	}

}
