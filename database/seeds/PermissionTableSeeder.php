<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Permission;

class PermissionTableSeeder extends Seeder {

	private $insertList =  [
		['name' => 'create_course'],
		['name' => 'edit_course'],
		['name' => 'delete_course'],
		['name' => 'interact_with_course_content'],
		['name' => 'edit_course_content'],
		['name' => 'add_course_content'],
		['name' => 'delete_course_content'],
		['name' => 'add_topics'],
		['name' => 'assign_instructor_to_course'],
		['name' => 'enroll_in_course'],
		['name' => 'edit_users_info'],
		['name' => 'remove_user'],
		['name' => 'view_child_progress'],
		['name' => 'add_child'],
	];

    public function run() {
    	DB::table('permissions')->delete();

    	Permission::insert($this->insertList);
    }
}
