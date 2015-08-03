<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbNfPickupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_nf_pickup', function(Blueprint $table)
		{
			$table->increments('id_cmb_nf_pickup');
			$table->integer('id_pcustomer')->index('id_pcustomer');
			$table->string('company', 60);
			$table->text('address');
			$table->string('phone', 20);
			$table->string('contact_name', 60);
			$table->string('consignee', 60);
			$table->string('consignee_phone', 20);
			$table->text('instructions');
			$table->string('order_num', 20);
			$table->text('cnee_instructions');
			$table->string('pieces', 20);
			$table->enum('flag', array('On','Off'));
			$table->enum('status', array('New','Open','Picked up','Shipped','Closed'));
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
		Schema::drop('cmb_nf_pickup');
	}

}
