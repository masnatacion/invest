<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebLostNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_lost_notes', function(Blueprint $table)
		{
			$table->integer('id_web_lost_notes')->unsigned();
			$table->integer('id_web_lost');
			$table->text('notes');
			$table->enum('type', array('High','Medium','Low'));
			$table->enum('internal_use', array('Yes','No'));
			$table->enum('from_tbl', array('users','web'));
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
		Schema::drop('web_lost_notes');
	}

}