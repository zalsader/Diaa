<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\ProblemType;

class ProblemTypeTableSeeder extends Seeder {

	private $insertList = [
		['name' =>'other'],
		['name' =>'homework'],
		['name' =>'lecture_quiz'],
		['name' =>'lab'],
		['name' =>'example'],
		['name' =>'midterm_exam'],
		['name' =>'final_exam'],
		['name' =>'sandbox'],
	];

    public function run() {
    	DB::table('problem_types')->truncate();

    	ProblemType::insert($this->insertList);
    }
}
