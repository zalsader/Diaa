<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assessments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('submission_id')->unsigned();
			$table->foreign('submission_id')->references('id')->on('submissions');
			$table->text('feedback');
			$table->double('grade');
			$table->double('grade_after_penalty');
			$table->integer('grader_id')->unsigned();
			$table->foreign('grader_id')->references('id')->on('users');
			$table->dateTime('graded_on');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('assessments');
	}

}
