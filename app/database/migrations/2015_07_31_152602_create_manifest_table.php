<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManifestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manifest', function(Blueprint $table)
		{
			$table->increments('id_manifest');
			$table->integer('id_agency');
			$table->integer('id_agency_fwdto');
			$table->string('refid', 25);
			$table->date('date');
			$table->string('origin', 20);
			$table->string('destination', 20);
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
		Schema::drop('manifest');
	}

}
