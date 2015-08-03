<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlogfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plogfile', function(Blueprint $table)
		{
			$table->increments('id_plogfile');
			$table->string('name', 60);
			$table->dateTime('datetime');
			$table->integer('username');
			$table->string('action', 80);
			$table->integer('aid');
			$table->string('awb', 12);
			$table->text('mid');
			$table->string('ip', 20);
			$table->timestamps();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
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
		Schema::drop('plogfile');
	}

}
