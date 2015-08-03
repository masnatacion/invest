<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbNfLostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_nf_lost', function(Blueprint $table)
		{
			$table->increments('id_cmb_nf_lost');
			$table->integer('id_pcustomer');
			$table->integer('	id_cmb_nf_lost_items');
			$table->text('comments');
			$table->enum('flag', array('On','Off'));
			$table->enum('status', array('New','In Process','Aproved'));
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
		Schema::drop('cmb_nf_lost');
	}

}
