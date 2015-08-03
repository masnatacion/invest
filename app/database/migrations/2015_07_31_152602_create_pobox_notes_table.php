<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoboxNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pobox_notes', function(Blueprint $table)
		{
			$table->integer('id_pobox_notes')->unsigned();
			$table->integer('id_pobox');
			$table->text('notes');
			$table->enum('type', array('High','Medium','Low'));
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
		Schema::drop('pobox_notes');
	}

}
