<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('CountriesSeeder');
		$this->call('PermissionTableSeeder');
		$this->call('RoleTableSeeder');
		$this->call('ResourceTypeTableSeeder');
		$this->call('ProblemTypeTableSeeder');
		$this->call('CollaborationTypeTableSeeder');

	}

}
