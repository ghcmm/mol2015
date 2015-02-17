<?php

// Composer: "fzaninotto/faker": "v1.3.0"
class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create(array(
			'username'=>'admin',
			'email' =>'admin@admin.com',
			'password'=>Hash::make('password')
		));
	}

}