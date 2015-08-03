<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbNfLostItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_nf_lost_items', function(Blueprint $table)
		{
			$table->increments('id_cmb_nf_lost_items');
			$table->integer('id_cmb_nf_lost')->nullable();
			$table->string('shipper_name', 60);
			$table->string('consignee', 60);
			$table->enum('carrier', array('UPS','FEDEX','USPS','DHL','LASER SHIP','Others','TNT'));
			$table->string('tracking', 40)->index('tracking');
			$table->integer('pieces');
			$table->text('comments');
			$table->enum('status', array('Unclaimed','In Process','Claimed'));
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
		Schema::drop('cmb_nf_lost_items');
	}

}
