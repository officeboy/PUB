<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		$tables = ['customers',];

		 $this->call('CustomersFakerSeeder');
		 $this->command->info('Customers table seeded!');
	}

}
