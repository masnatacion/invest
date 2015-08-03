<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbNfShpinstTrackingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_nf_shpinst_tracking', function(Blueprint $table)
		{
			$table->integer('id_cmb_nf_shpinst_tracking', true);
			$table->integer('id_cmb_nf_shpinst');
			$table->enum('carrier', array('UPS','FEDEX','USPS','DHL','LASER SHIP','Others','TNT'))->index('carrier_2');
			$table->string('tracking', 40)->index('tracking');
			$table->integer('created_by');
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->integer('sdfsd');
			$table->integer('deleted_by')->nullable();
			$table->softDeletes();
			$table->index(['carrier','tracking'], 'carrier');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cmb_nf_shpinst_tracking');
	}

}
