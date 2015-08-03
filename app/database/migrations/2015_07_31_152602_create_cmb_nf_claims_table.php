<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbNfClaimsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_nf_claims', function(Blueprint $table)
		{
			$table->increments('id_cmb_nf_claims');
			$table->integer('id_pcustomer');
			$table->date('date_shipped');
			$table->integer('id_awb');
			$table->string('consignee', 45);
			$table->text('claim_note');
			$table->enum('flag', array('On','Off'));
			$table->enum('status', array('New','In Process','Closed'));
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
		Schema::drop('cmb_nf_claims');
	}

}
