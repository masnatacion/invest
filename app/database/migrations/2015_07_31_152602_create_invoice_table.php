<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice', function(Blueprint $table)
		{
			$table->increments('id_invoice');
			$table->integer('id_agency')->index('id_agency');
			$table->string('invoicenum', 12);
			$table->date('date');
			$table->integer('id_pcustomer')->index('id_pcustomer');
			$table->string('name', 60);
			$table->enum('ratetype', array('Gen','Pref','Org','C.O.D'));
			$table->decimal('exchangerate', 9);
			$table->decimal('balance', 6);
			$table->decimal('total', 9);
			$table->text('note');
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
		Schema::drop('invoice');
	}

}
