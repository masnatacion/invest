<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAwbChargesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('awb_charges', function(Blueprint $table)
		{
			$table->increments('id_awb_charges');
			$table->string('id_awb', 12)->index('id_awb');
			$table->string('charge_description', 60);
			$table->decimal('charge_amount', 6);
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
		Schema::drop('awb_charges');
	}

}
