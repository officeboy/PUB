<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function($table)
        {
            $table->increments('id');
            $table->boolean('active');
            $table->boolean('tenant');
            $table->boolean('owner');
            $table->string('name', 48);
            $table->string('attention', 48);
            $table->string('care_of', 48);
            $table->string('address1', 48);
            $table->string('address2', 48);
            $table->string('city', 48);
            $table->string('state', 2);
            $table->string('zip', 10);
            $table->string('country', 24);
            $table->string('home_phone', 36);
            $table->string('work_phone', 36);
            $table->string('cell_phone', 36);
            $table->string('other_phone', 36);
            $table->string('email', 100);
            $table->string('email_display_name', 36);
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('customers');
	}

}
