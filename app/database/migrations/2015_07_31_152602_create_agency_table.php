<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgencyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agency', function(Blueprint $table)
		{
			$table->increments('id_agency');
			$table->string('code', 6);
			$table->string('company_name', 60);
			$table->text('address');
			$table->string('name', 60);
			$table->string('email', 80);
			$table->string('phone', 20);
			$table->string('destination', 80);
			$table->string('origin', 20);
			$table->string('pay_methods', 80);
			$table->float('exchange_rate')->nullable();
			$table->string('currency_sign', 10);
			$table->integer('currency_dec_dig')->nullable();
			$table->enum('wunit', array('Lb','Oz','Kg','Gr'));
			$table->enum('type', array('Main','Local','IntRem','POBox','Warehouse','Forward'));
			$table->enum('status', array('Active','Inactive'))->default('Active');
			$table->integer('created_by');
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->integer('deleted_by')->nullable();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agency');
	}

}
