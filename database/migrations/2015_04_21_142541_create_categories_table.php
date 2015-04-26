<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->timestamps();
		});

		Schema::create('category_course', function(Blueprint $table)
		{
			$table->integer('category_id')->unsigned();
			$table->integer('course_id')->unsigned();

			$table->foreign('category_id')->references('id')->on('categories')
					->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('course_id')->references('id')->on('courses')
					->onUpdate('cascade')->onDelete('cascade');

			$table->primary(['category_id', 'course_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category_course');
		Schema::drop('categories');
	}

}
