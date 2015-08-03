<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmbPrizesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cmb_prizes', function(Blueprint $table)
		{
			$table->increments('id_cmb_prizes');
			$table->string('name', 60);
			$table->text('smalldescription');
			$table->text('description');
			$table->enum('category', array('Electronics','Household','OfficeSupply','Miscellaneous'));
			$table->string('picture', 60);
			$table->string('thumbnail', 60);
			$table->integer('points');
			$table->enum('status', array('Active','Inactive'));
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
		Schema::drop('cmb_prizes');
	}

}
