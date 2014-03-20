<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function(Blueprint $table) 
            {
		$table->bigIncrements('id');
            $table->string('acct_num', 12)->unique();
            $table->boolean('active')->default(1);
            $table->tinyInteger('status');
            //$table->tinyInteger('sort_code');
            $table->tinyInteger('bill_code');
            $table->tinyInteger('notice_code');
            $table->tinyInteger('class');
            $table->tinyInteger('cycle');
            $table->string('name', 48)->nullable();
            $table->string('serve_address1', 48);
            $table->string('serve_address2', 48)->nullable();
            $table->string('city', 48)->nullable();
            $table->string('state', 2)->nullable();
            $table->string('zip', 10)->nullable();
            $table->string('phone', 36)->nullable();
            $table->string('phone_disc', 48)->nullable();
            $table->date('start_day')->nullable();
            $table->date('end_day')->nullable();
            $table->tinyInteger('Prorate')->nullable();
            $table->boolean('late_fee')->default(1);
            $table->string('budget_amount', 48)->nullable();
            $table->string('parcel', 48)->nullable();
            $table->string('legal_disc', 48)->nullable();
            $table->string('balance', 48)->nullable();
            $table->string('30day_balance', 48)->nullable();
            $table->string('60day_balance', 48)->nullable();
            $table->string('90day_balance', 48)->nullable();
            $table->string('120day_balance', 48)->nullable();
            $table->string('current_charges', 48)->nullable();
            $table->string('current_penalties', 48)->nullable();
            $table->date('last_pay')->nullable();
            $table->string('last_pay_amount', 48)->nullable();
            $table->date('last_bill')->nullable();
            $table->string('last_bill_amount', 48)->nullable();
            $table->string('misc0', 48)->nullable();
            $table->string('misc1', 48)->nullable();
            $table->string('misc2', 48)->nullable();
            $table->string('misc3', 48)->nullable();
            $table->string('misc4', 48)->nullable();
            $table->string('misc5', 48)->nullable();
            $table->string('misc6', 48)->nullable();
            $table->string('misc7', 48)->nullable();
            $table->string('misc8', 48)->nullable();
            $table->string('misc9', 48)->nullable();
            $table->tinyInteger('misc_code0')->nullable();
            $table->tinyInteger('misc_code1')->nullable();
            $table->tinyInteger('misc_code2')->nullable();
            $table->tinyInteger('misc_code3')->nullable();
            $table->tinyInteger('misc_code4')->nullable();
            $table->tinyInteger('misc_code5')->nullable();
            $table->tinyInteger('misc_code6')->nullable();
            $table->tinyInteger('misc_code7')->nullable();
            $table->tinyInteger('misc_code8')->nullable();
            $table->tinyInteger('misc_code9')->nullable();
            $table->text('disc')->nullable();
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
		Schema::drop('accounts');
	}

}
