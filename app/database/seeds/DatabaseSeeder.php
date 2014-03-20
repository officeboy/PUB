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
		
		$tables = ['customers', 'accounts'];

		 $this->call('CustomersFakerSeeder');
		 $this->command->info('Customers table seeded!');
		 $this->call('AccountsTableSeeder');
		 $this->command->info('Accounts table seeded!');
	}

}
