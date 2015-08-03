<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePcustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pcustomer', function(Blueprint $table)
		{
			$table->increments('id_pcustomer');
			$table->integer('id_agency')->nullable()->index('id_agency');
			$table->string('name', 60);
			$table->text('address')->nullable();
			$table->string('city', 40)->nullable();
			$table->string('state', 10)->nullable();
			$table->string('zip', 5)->nullable();
			$table->string('country', 25)->nullable();
			$table->string('phone', 25)->nullable();
			$table->string('phone2', 25)->nullable();
			$table->string('fax', 25)->nullable();
			$table->string('cellphone', 25)->nullable();
			$table->text('cust_instructions')->nullable();
			$table->text('comments')->nullable();
			$table->string('email');
			$table->text('company_comments')->nullable();
			$table->date('date_ini');
			$table->date('date_end');
			$table->date('date_plus');
			$table->enum('member_type', array('Gold','Gold Plus','Platinum','Standard'))->index('member_type');
			$table->string('username');
			$table->string('password');
			$table->text('remember_token')->nullable();
			$table->string('remember_phrase', 60);
			$table->string('auth_code', 60);
			$table->enum('rate_type', array('Gen','Pref','Org'));
			$table->string('destination', 30);
			$table->text('shipping_instuctions');
			$table->enum('delivery_service', array('Hold for Pick up at JSL Office','Deliver to Home','Deliver to Business'))->nullable();
			$table->enum('approved_limit', array('Do not clear my shipments? deliver documents to my address','Do not clear my shipments? Hold documents for pick up','.00 - 0.00','1-0.00','1.00-00.00','00.00 - 00.00'))->nullable();
			$table->enum('insurance', array('No insurance requested','on all my shipments','Written notice for insurance on a particular shipment will be submitted'))->nullable();
			$table->enum('dest_zone', array('Central Trinidad','Nortern Trinidad','Southern Trinidad','Eastern Trinidad','Western Trinidad'))->nullable();
			$table->string('hear_about_us', 60)->nullable();
			$table->text('invnotes')->nullable();
			$table->text('flag_shpinst')->nullable();
			$table->text('flag_puinst')->nullable();
			$table->text('flag_mroom')->nullable();
			$table->enum('status', array('Active','Inactive','Cancelled','Billed'))->default('Active')->index('status');
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
		Schema::drop('pcustomer');
	}

}
