<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AccountsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Account::create([
				'acct_num'		=> $faker->unique()->randomNumber($nbDigits = 10),
				'status'		=> rand(0, 3),
				'bill_code'		=> rand(0, 2),
				'notice_code'	=> rand(0, 1),
				'class'			=> rand(1, 25),
				'cycle'			=> rand(1, 8),
				'serve_address1'=> $faker->streetaddress,
			]);
		}
	}

}