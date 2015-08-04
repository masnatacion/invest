<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id_users');
			$table->integer('id_roles')->default(1);
			$table->integer('id_eventos')->nullable();
			$table->string('first_name', 60);
			$table->string('last_name', 60);
			$table->enum('sex', array('Male','Female'));
			$table->string('email', 80);
			$table->string('password');
			$table->string('last_ip', 15)->nullable();
			$table->string('ip_mask', 15)->nullable();
			$table->string('remember_token')->nullable();
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
		Schema::drop('users');
	}

}
