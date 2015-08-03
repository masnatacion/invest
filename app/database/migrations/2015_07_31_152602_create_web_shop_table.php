<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebShopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_shop', function(Blueprint $table)
		{
			$table->increments('id_web_shop');
			$table->string('uniquekey', 40);
			$table->string('shopper_name', 60);
			$table->string('shopper_phone', 20);
			$table->text('shopper_address');
			$table->string('shopper_email', 60);
			$table->string('contact_name', 60);
			$table->string('company_name', 60);
			$table->string('phone', 20);
			$table->text('address');
			$table->string('city', 40);
			$table->string('state', 40);
			$table->string('item_name', 60);
			$table->string('item', 60);
			$table->string('model_serial', 60);
			$table->integer('quantity');
			$table->decimal('value');
			$table->text('brief_description');
			$table->text('special_instructions');
			$table->enum('purchase_service', array('JSL Purchase & P/UP','JSL Purchase with courier DLVY'));
			$table->enum('shipping_service', array('Door to door','Airpot to Airport'));
			$table->enum('flag', array('On','Off'));
			$table->enum('status', array('Open','Problem','Partial Order','Wrong Order','Completed','Shipped','Paid','RMA','Claim','Cancelled','Closed'));
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
		Schema::drop('web_shop');
	}

}
