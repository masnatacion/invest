<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmsImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_images', function(Blueprint $table)
		{
			$table->increments('id_cms_images');
			$table->string('name', 60);
			$table->text('smalldescription');
			$table->string('picture', 60);
			$table->string('thumbnail', 60);
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
		Schema::drop('cms_images');
	}

}
