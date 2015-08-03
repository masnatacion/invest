<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceAwbchgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_awbchg', function(Blueprint $table)
		{
			$table->increments('id_invoice_awbchg');
			$table->integer('id_invoice');
			$table->integer('id_awb');
			$table->string('charge_description', 60);
			$table->decimal('amount', 9);
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
		Schema::drop('invoice_awbchg');
	}

}
