<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebPickupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_pickup', function(Blueprint $table)
		{
			$table->increments('id_web_pickup');
			$table->string('uniquekey', 40);
			$table->string('name', 60);
			$table->string('company', 60);
			$table->string('email', 60);
			$table->string('phone', 30);
			$table->string('pu_company', 60);
			$table->string('pu_address', 60);
			$table->string('pu_phone', 30);
			$table->string('pu_contact', 60);
			$table->text('pu_instructions');
			$table->string('pu_order', 20);
			$table->string('pu_cnee_instructions', 20);
			$table->string('num_pieces', 10);
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
		Schema::drop('web_pickup');
	}

}
