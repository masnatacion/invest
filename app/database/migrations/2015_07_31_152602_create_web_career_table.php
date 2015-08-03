<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebCareerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_career', function(Blueprint $table)
		{
			$table->increments('id_web_career');
			$table->string('uniquekey', 40);
			$table->string('position', 60);
			$table->string('name', 60);
			$table->string('email', 60);
			$table->string('address1', 60);
			$table->string('address2', 60);
			$table->string('city', 50);
			$table->string('zip', 20);
			$table->string('country', 50);
			$table->text('cv');
			$table->string('education', 60);
			$table->string('degree', 60);
			$table->string('graduation_year', 10);
			$table->string('salary', 10);
			$table->enum('flag', array('On','Off'));
			$table->enum('status', array('New','Revised'));
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
		Schema::drop('web_career');
	}

}
