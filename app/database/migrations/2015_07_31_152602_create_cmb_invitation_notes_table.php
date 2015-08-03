<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbInvitationNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_invitation_notes', function(Blueprint $table)
		{
			$table->integer('id_cmb_invitation_notes')->unsigned();
			$table->integer('id_cmb_points');
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
		Schema::drop('cmb_invitation_notes');
	}

}
