<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactanosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactanos', function(Blueprint $table)
		{
			$table->increments('id_contactanos');
			$table->string('nombre', 160);
			$table->string('correo', 160);
			$table->string('ciudad', 80);
			$table->string('telefono', 160)->nullable();
			$table->string('celular', 80)->nullable();
			$table->text('mensaje')->nullable();
			$table->integer('created_by')->nullable();
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
		Schema::drop('contactanos');
	}

}
