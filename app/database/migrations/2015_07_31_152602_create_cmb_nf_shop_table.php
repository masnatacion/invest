<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbNfShopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_nf_shop', function(Blueprint $table)
		{
			$table->increments('id_cmb_nf_shop');
			$table->integer('id_pcustomer')->index();
			$table->string('contact_name', 60);
			$table->string('company_name', 60);
			$table->string('phone', 20);
			$table->text('address');
			$table->string('city', 40);
			$table->string('state', 40);
			$table->string('itemname', 60);
			$table->string('item', 60);
			$table->string('model_serial', 60);
			$table->integer('quantity');
			$table->decimal('price');
			$table->decimal('fee', 9);
			$table->text('brief_description');
			$table->text('special_instructions');
			$table->enum('purchase_service', array('JSL Purchase & P/UP','JSL Purchase with courier DLVY'));
			$table->enum('shipping_service', array('Door to door','Airpot to Airport'));
			$table->enum('pay_method', array('Royal Bank Blue Visa CC','Royal Bank Frequent Flyer Master CC','American Express Blue CC','American Express Gold CC','Capital One Visa CC','Cash','Cashiers check','Jsl Company check','Wire Transfer'));
			$table->enum('carrier', array('UPS','FEDEX','USPS','DHL','LASER SHIP','Others','TNT'))->nullable();
			$table->string('tracking', 40)->nullable();
			$table->enum('flag', array('On','Off'));
			$table->enum('status', array('Open','Problem','Partial Order','Wrong Order','Completed','Shipped','Paid','RMA','Claim','Cancelled','Closed'))->index();
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
		Schema::drop('cmb_nf_shop');
	}

}
