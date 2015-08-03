<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrackingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tracking', function(Blueprint $table)
		{
			$table->increments('id_tracking');
			$table->enum('carrier', array('UPS','FEDEX','USPS','DHL','LASER SHIP','Others','TNT'))->index();
			$table->string('tracking', 40)->index();
			$table->date('in_date')->index();
			$table->integer('created_by');
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->integer('deleted_by')->nullable();
			$table->softDeletes();
			$table->index(['carrier','tracking']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tracking');
	}

}
