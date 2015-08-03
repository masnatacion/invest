<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebShpinstTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_shpinst', function(Blueprint $table)
		{
			$table->increments('id_web_shpinst');
			$table->string('uniquekey', 40);
			$table->string('customer_name', 60);
			$table->string('customer_phone', 20);
			$table->text('customer_address');
			$table->string('customer_email', 60);
			$table->string('shippers_name', 60);
			$table->text('shippers_company');
			$table->text('shippers_address');
			$table->string('shippers_phone', 20);
			$table->string('consignee_name', 60);
			$table->string('consignee_company', 60);
			$table->text('consignee_address');
			$table->string('consignee_phone', 20);
			$table->text('pickup_company');
			$table->text('pickup_contact');
			$table->date('pickup_date');
			$table->string('pickup_time', 10);
			$table->text('pickup_phone');
			$table->enum('shipping_service', array('Same Day','Next Day'));
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
		Schema::drop('web_shpinst');
	}

}
