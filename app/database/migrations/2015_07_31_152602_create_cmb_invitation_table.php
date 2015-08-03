<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbInvitationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_invitation', function(Blueprint $table)
		{
			$table->increments('id_cmb_invitation');
			$table->integer('id_pcustomer')->index('id_pcustomer');
			$table->string('email');
			$table->integer('cant');
			$table->enum('status', array('Not Registered','Registered'))->index('status');
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
		Schema::drop('cmb_invitation');
	}

}
