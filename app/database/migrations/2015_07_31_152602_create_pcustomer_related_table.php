<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePcustomerRelatedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pcustomer_related', function(Blueprint $table)
		{
			$table->integer('id_pcustomer_related', true);
			$table->integer('id_pcustomer');
			$table->integer('related_id_pcustomer');
			$table->enum('type', array('co-share','virtual'));
			$table->enum('status', array('Active','Inactive','Suspended','New'));
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
		Schema::drop('pcustomer_related');
	}

}
