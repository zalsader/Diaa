<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\ResourceType;

class ResourceTypeTableSeeder extends Seeder {

	private $insertList = [
		['name' => 'testing', 'medium' => 'text'],
		['name' => 'informational', 'medium' => 'text'],
		['name' => 'informational', 'medium' => 'video'],
		['name' => 'problem', 'medium' => 'text'],
		['name' => 'exam', 'medium' => 'text'],
		['name' => 'tutorial', 'medium' => 'text'],
		['name' => 'tutorial', 'medium' => 'video'],
		['name' => 'profile', 'medium' => 'text'],
		['name' => 'book', 'medium' => 'text'],
		['name' => 'wiki', 'medium' => 'text'],
		['name' => 'lecture', 'medium' => 'text'],
		['name' => 'lecture', 'medium' => 'video'],
		['name' => 'other', 'medium' => 'text'],
		['name' => 'other', 'medium' => 'video'],
	];

    public function run() {
    	DB::table('resource_types')->truncate();

    	ResourceType::insert($this->insertList);
    }
}
