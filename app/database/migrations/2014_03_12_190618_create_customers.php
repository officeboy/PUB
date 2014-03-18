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
            $table->bigIncrements('id');
            $table->boolean('active');
            $table->boolean('tenant');
            $table->boolean('owner');
            $table->string('name', 48);
            $table->string('attention', 48)->nullable();
            $table->string('care_of', 48)->nullable();
            $table->string('address1', 48);
            $table->string('address2', 48)->nullable();
            $table->string('city', 48)->nullable();
            $table->string('state', 2)->nullable();
            $table->string('zip', 10)->nullable();
            $table->string('country', 24)->nullable();
            $table->string('home_phone', 36)->nullable();
            $table->string('work_phone', 36)->nullable();
            $table->string('cell_phone', 36)->nullable();
            $table->string('other_phone', 36)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('email_display_name', 36)->nullable();
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
