<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permissions', function(Blueprint $table)
		{
			$table->increments('id_permissions');
			$table->integer('id_parent_permissions')->default(0);
			$table->string('name')->unique();
			$table->string('display_name');
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->integer('deleted_by')->nullable();
			$table->softDeletes();
			$table->enum('internal_use', array('Yes','No'));
			$table->string('created_table', 35)->nullable();
			$table->string('updated_table', 35)->nullable();
			$table->string('deleted_table', 35)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permissions');
	}

}
