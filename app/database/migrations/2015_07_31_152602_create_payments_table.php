<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->increments('id_payments');
			$table->integer('id_pcustomer')->index();
			$table->integer('id_agency')->index();
			$table->date('paydate');
			$table->text('description');
			$table->enum('paymethod', array('Cash','Credit Card','Linx Card','Check','Wire Transfer'));
			$table->decimal('amount', 9);
			$table->enum('ptype', array('invoice','awb'))->index();
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
		Schema::drop('payments');
	}

}
