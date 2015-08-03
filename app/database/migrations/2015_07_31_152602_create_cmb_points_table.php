<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbPointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_points', function(Blueprint $table)
		{
			$table->increments('id_cmb_points');
			$table->integer('id_pcustomer')->index('id_pcustomer');
			$table->integer('id_cmb_invitation')->index('id_cmb_invitation');
			$table->integer('id_awb')->index('id_awb');
			$table->string('message', 60);
			$table->integer('points');
			$table->enum('status', array('Valid','Invalid'))->index('status');
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
		Schema::drop('cmb_points');
	}

}
