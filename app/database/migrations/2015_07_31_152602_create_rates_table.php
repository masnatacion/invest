<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rates', function(Blueprint $table)
		{
			$table->increments('id_rates');
			$table->integer('id_agency')->index();
			$table->string('rate_nme', 40);
			$table->text('dest');
			$table->decimal('rate_first', 6);
			$table->decimal('rate_add', 6);
			$table->decimal('rate_cust_var1', 6);
			$table->decimal('rate_cust_var2', 6);
			$table->enum('service_type', array('Air','Air Cargo','Ground','Sea'))->index();
			$table->enum('rate_type', array('Gen','Pref','Org'))->index();
			$table->text('formula');
			$table->decimal('vol_weight', 8, 4);
			$table->enum('size_unit', array('mm','cm','mt','in','ft'));
			$table->enum('unit', array('Lb','Oz','Kg','Gr'));
			$table->enum('edition', array('Everyone','Edit Permission','No one'));
			$table->enum('status', array('Active','Inactive'));
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
		Schema::drop('rates');
	}

}
