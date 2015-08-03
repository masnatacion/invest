<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shopinfo', function(Blueprint $table)
		{
			$table->increments('id_shopinfo');
			$table->integer('id_pcustomer');
			$table->string('title', 60);
			$table->string('link', 80);
			$table->text('description');
			$table->text('banner');
			$table->enum('category', array('Electronics','Clothing','Personal Accessories','Household Items','Books','Misc'));
			$table->enum('flag', array('On','Off'));
			$table->enum('status', array('Active','Inactive'));
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
		Schema::drop('shopinfo');
	}

}
