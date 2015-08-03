<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmsVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_videos', function(Blueprint $table)
		{
			$table->increments('id_cms_videos');
			$table->string('name', 60);
			$table->text('smalldescription');
			$table->text('description');
			$table->string('video', 60);
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
		Schema::drop('cms_videos');
	}

}
