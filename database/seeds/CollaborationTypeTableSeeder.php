<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\CollaborationType;

class CollaborationTypeTableSeeder extends Seeder {

	private $insertList = [
		['name' => 'forum_question'],
		['name' => 'forum_answer'],
		['name' => 'forum_comment'],
		['name' => 'wiki_revision'],
	];

    public function run() {
    	DB::table('collaboration_types')->truncate();

    	CollaborationType::insert($this->insertList);
    }
}
