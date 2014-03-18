<?php

class CustomersFakerSeeder extends Seeder {

	public function run() {

	$faker = Faker\Factory::create();

for ($i = 0; $i < 100 ; $i++) {

    $customer = Customer::create([
        'name'               => $faker->name,
        'email'              => $faker->email,
        'address1'			 => $faker->streetaddress,
        'address2'			 => $faker->optional($weight = 0.2)->secondaryAddress,
        'city'               => $faker->city,
        'state'				 => $faker->stateAbbr,
        'zip'				 => $faker->postcode,
        'home_phone'		 => $faker->phoneNumber,
        'work_phone' 		 => $faker->optional()->phoneNumber,
        'active'             => (bool) rand(0, 1),
        'owner' 			 => (bool) rand(0, 1),
        'tenant'	         => (bool) rand(0, 1),
    ]);
}
	}
		}