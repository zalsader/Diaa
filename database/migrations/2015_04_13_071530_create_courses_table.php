<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->dateTime('starts_on');
			$table->dateTime('ends_on');
			$table->text('description');
			$table->integer('video_resource_id')->unsigned()->nullable();
			$table->integer('image_resource_id')->unsigned();
			$table->timestamps();
		});
		/**
		 * Relates courses to multiple users, which includes its students and instructors.
		 */
		Schema::create('course_user', function(Blueprint $table)
		{
			$table->integer('course_id')->unsigned();
			$table->foreign('course_id')->references('id')->on('courses')
				->onUpdate('cascade')->onDelete('cascade'); //TODO see if it works without type

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')
				->onUpdate('cascade')->onDelete('cascade');
			$table->primary(['course_id', 'user_id']);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_user');
		Schema::drop('courses');
	}

}
