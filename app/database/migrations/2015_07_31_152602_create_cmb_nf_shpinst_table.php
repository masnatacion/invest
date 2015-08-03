<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbNfShpinstTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_nf_shpinst', function(Blueprint $table)
		{
			$table->increments('id_cmb_nf_shpinst');
			$table->integer('id_pcustomer');
			$table->string('shippers_name', 60);
			$table->string('shippers_company', 60);
			$table->text('shippers_address');
			$table->string('shippers_phone', 20);
			$table->string('consignee_name', 60);
			$table->string('consignee_company', 60);
			$table->text('consignee_address');
			$table->string('consignee_phone', 20);
			$table->string('pickup_company', 60);
			$table->string('pickup_contact', 60);
			$table->date('pickup_date');
			$table->string('pickup_time', 20);
			$table->string('pickup_phone', 20);
			$table->enum('shipping_service', array('CMB Service','Express Cargo','Ocean Shipping'));
			$table->enum('destination_service', array('Hold for consignee','Delivery','Clear & Hold'));
			$table->enum('form_of_payment', array('Check','Cash','Freight collect','Money Order','Credit Card'));
			$table->string('payment_account', 20);
			$table->enum('need_insurance', array('Yes','No'));
			$table->text('special_instruction');
			$table->text('shipment_contents');
			$table->enum('flag', array('On','Off'));
			$table->enum('status', array('New','Open','Completed'));
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
		Schema::drop('cmb_nf_shpinst');
	}

}
