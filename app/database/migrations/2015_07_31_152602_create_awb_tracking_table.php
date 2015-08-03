<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAwbTrackingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('awb_tracking', function(Blueprint $table)
		{
			$table->increments('id_awb_tracking');
			$table->string('id_awb', 12)->index('id_awb');
			$table->string('id_agency', 60)->index('id_agency');
			$table->dateTime('datetime');
			$table->string('message', 90);
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
		Schema::drop('awb_tracking');
	}

}
