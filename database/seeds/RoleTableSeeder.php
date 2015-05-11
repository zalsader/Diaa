<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\Permission;

class RoleTableSeeder extends Seeder {

	private $insertList = [
		['name' => 'admin','display_name' => 'Admin', 'description' => 'Website Admin'],
		['name' => 'student','display_name' => 'Student', 'description' => 'The learner'],
		['name' => 'parent','display_name' => 'Parent', 'description' => 'Supervises a student'],
		['name' => 'instructor','display_name' => 'Instructor', 'description' => 'Manages a course'],
	];

    public function run() {
    	DB::table('roles')->delete();

    	Role::insert($this->insertList);
			Role::whereName('admin')->first()->attachPermissions([
				Permission::whereName('create_course')->first(),
				Permission::whereName('edit_course')->first(),
				Permission::whereName('delete_course')->first(),
				Permission::whereName('edit_course_content')->first(),
				Permission::whereName('add_course_content')->first(),
				Permission::whereName('delete_course_content')->first(),
				Permission::whereName('add_topics')->first(),
				Permission::whereName('assign_instructor_to_course')->first(),
				Permission::whereName('edit_users_info')->first(),
				Permission::whereName('remove_user')->first(),
			]);

			Role::whereName('instructor')->first()->attachPermissions([
				Permission::whereName('edit_course')->first(),
				Permission::whereName('edit_course_content')->first(),
				Permission::whereName('add_course_content')->first(),
				Permission::whereName('delete_course_content')->first(),
				Permission::whereName('add_topics')->first(),
			]);

			Role::whereName('parent')->first()->attachPermissions([
				Permission::whereName('view_child_progress')->first(),
				Permission::whereName('enroll_in_course')->first(),
				Permission::whereName('add_child')->first(),
			]);

			Role::whereName('student')->first()->attachPermissions([
				Permission::whereName('interact_with_course_content')->first(),
				Permission::whereName('enroll_in_course')->first(),
			]);
    }
}
