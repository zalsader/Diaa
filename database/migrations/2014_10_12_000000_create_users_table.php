<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('full_name');
			$table->string('username');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->date('birth_date');
			$table->string('gender');
			$table->string('educational_degree')->nullable();
			$table->integer('parent_id')->unsigned()->nullable();
			$table->string('type');
			$table->integer('country_id')->unsigned();
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
