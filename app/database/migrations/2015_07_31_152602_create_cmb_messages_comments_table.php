<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbMessagesCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_messages_comments', function(Blueprint $table)
		{
			$table->increments('id_cmb_messages_comments');
			$table->integer('id_cmb_messages');
			$table->integer('added_by');
			$table->enum('added_by_type', array('Customer','User'));
			$table->text('comments');
			$table->enum('internal_use', array('Yes','No'));
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
		Schema::drop('cmb_messages_comments');
	}

}
