<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbNfPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_nf_payments', function(Blueprint $table)
		{
			$table->increments('id_cmb_nf_payments');
			$table->integer('id_pcustomer')->index('id_pcustomer');
			$table->integer('service_id');
			$table->enum('ns_form', array('cmb_nf_shop','cmb_nf_ebay','web_shop','new','renewal'));
			$table->decimal('amount');
			$table->decimal('rate_exchange', 9);
			$table->text('notes');
			$table->enum('status', array('New','Processed'));
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
		Schema::drop('cmb_nf_payments');
	}

}
