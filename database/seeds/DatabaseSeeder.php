<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Link;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// Disable Foreign key check for this connection before running seeders
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('UserTableSeeder');
		$this->call('LinkTableSeeder');

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}

class UserTableSeeder extends Seeder {

		public function run()
		{
				DB::table('users')->truncate();

				$adminUser['email'] 		= 'admin@groupletter.io';
				$adminUser['name'] 			= 'Group Letter';
				$adminUser['username'] 	= 'admin';
				$adminUser['password'] 	= bcrypt('admin');
				$adminUser['role'] 			= 'admin';

				User::create($adminUser);
		}
}

class LinkTableSeeder extends Seeder {

		public function run()
		{
				DB::table('links')->truncate();

				$link['user_id'] 	= 1;
				$link['title']		= 'Groupletter - group curated newsletters';
				$link['url'] 			= 'http://groupletter.io';

				Link::create($link);
		}
}
