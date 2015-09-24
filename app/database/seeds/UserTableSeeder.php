<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Alex Herranz',
			'username' => 'aherranz',
			'email'    => 'alex@decreativa.com',
			'password' => Hash::make('awesome'),
		));
	}

}
