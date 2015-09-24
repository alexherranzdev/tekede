<?php

class CompanyTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('company')->delete();
		Company::create(array(
			'code'    => 'TKD1',
			'status'  => '1',
			'user_id' => '1'
		));
	}

}
