<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChargesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('charges', function(Blueprint $table)
		{
			$table->increments('id_charges');
			$table->integer('id_agency');
			$table->string('charge_description', 60);
			$table->decimal('amount', 9);
			$table->decimal('charge_cust_var1', 10);
			$table->decimal('change_cust_var2', 10);
			$table->string('formula');
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
		Schema::drop('charges');
	}

}
