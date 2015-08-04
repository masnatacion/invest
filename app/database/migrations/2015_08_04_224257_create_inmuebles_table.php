<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInmueblesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inmuebles', function(Blueprint $table)
		{
			$table->integer('id_inmuebles', true);
			$table->enum('status', array('Disponible','Ocupado'))->nullable();
			$table->string('nombre', 80)->nullable();
			$table->text('direccion')->nullable();
			$table->string('categoria', 80)->nullable();
			$table->string('estado', 80)->nullable();
			$table->string('municipio', 80)->nullable();
			$table->float('superficie_terreno', 10, 0)->nullable();
			$table->text('construccion')->nullable();
			$table->text('estacionamiento')->nullable();
			$table->text('local_disponible')->nullable();
			$table->text('informes')->nullable();
			$table->string('fotografia', 35)->nullable();
			$table->string('plano_aquitectonico', 35)->nullable();
			$table->text('google_maps')->nullable();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->integer('deleted_by')->nullable();
			$table->timestamps();
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
		Schema::drop('inmuebles');
	}

}
