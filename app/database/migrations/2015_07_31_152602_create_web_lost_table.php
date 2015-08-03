<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebLostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_lost', function(Blueprint $table)
		{
			$table->increments('id_web_lost');
			$table->integer('id_lost_items');
			$table->string('name', 60);
			$table->string('phone', 20);
			$table->text('address');
			$table->string('email', 60);
			$table->text('comments');
			$table->date('date');
			$table->enum('flag', array('On','Off'));
			$table->enum('status', array('New','In Precess','Aproved'));
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
		Schema::drop('web_lost');
	}

}
