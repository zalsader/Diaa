<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('problems', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('parent_id')->unsigned()->nullable();
			$table->integer('lft')->nullable();
			$table->integer('rgt')->nullable();
			$table->integer('depth')->nullable();
			$table->integer('problem_type_id')->unsigned();
			$table->foreign('problem_type_id')->references('id')->on('problem_types');
			$table->dateTime('released_on');
			$table->dateTime('soft_deadline');
			$table->dateTime('hard_deadline');
			$table->integer('max_submission');
			$table->integer('max_duration');
			$table->integer('weight');
			$table->integer('resource_id')->nullable();
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
		Schema::drop('problems');
	}

}
