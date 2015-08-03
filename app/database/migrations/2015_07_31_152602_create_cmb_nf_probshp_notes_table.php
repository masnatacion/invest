<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbNfProbshpNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_nf_probshp_notes', function(Blueprint $table)
		{
			$table->integer('id_cmb_nf_probshp_notes')->unsigned();
			$table->integer('id_cmb_nf_probshp');
			$table->text('notes');
			$table->enum('type', array('High','Medium','Low'));
			$table->enum('internal_use', array('Yes','No'));
			$table->enum('from_tbl', array('users','pcustomer'));
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
		Schema::drop('cmb_nf_probshp_notes');
	}

}
