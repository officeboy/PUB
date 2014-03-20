<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CustomersFakerSeeder extends Seeder {

	public function run() {

	$faker = Faker::create();

for ($i = 0; $i < 100 ; $i++) {

    $customer = Customer::create([
        'name'               => $faker->name,
        'attention'          => $faker->optional($weight = 0.3)->company,
        'email'              => $faker->email,
        'address1'			 => $faker->streetaddress,
        'address2'			 => $faker->optional($weight = 0.2)->secondaryAddress,
        'city'               => $faker->city,
        'state'				 => $faker->stateAbbr,
        'zip'				 => $faker->postcode,
        'home_phone'		 => $faker->phoneNumber,
        'work_phone' 		 => $faker->optional()->phoneNumber,
        'active'             => $faker->boolean($changeOfGettingTrue = 90),
        'owner' 			 => (bool) rand(0, 1),
        'tenant'	         => (bool) rand(0, 1),
    ]);
}
	}
		}