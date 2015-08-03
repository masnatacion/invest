<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoboxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pobox', function(Blueprint $table)
		{
			$table->increments('id_pobox');
			$table->integer('id_pcustomer')->index();
			$table->integer('id_awb')->nullable()->index();
			$table->integer('id_manifest')->nullable()->index();
			$table->integer('id_agency')->index();
			$table->string('sender', 60);
			$table->string('consignee', 45);
			$table->string('driver', 30)->nullable();
			$table->string('driverid', 30)->nullable();
			$table->text('description');
			$table->text('comments')->nullable();
			$table->decimal('invoice_value', 12);
			$table->string('shipment_commodity', 40);
			$table->integer('pieces');
			$table->decimal('tact_weight', 9, 3);
			$table->decimal('tvol_weight', 9, 3);
			$table->decimal('tchg_weight', 9, 3);
			$table->enum('w_unit', array('Lb','Oz','Kg','Gr'));
			$table->string('info', 120);
			$table->enum('status', array('inbox','outbox','history','discard','discarted','error'))->index();
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
		Schema::drop('pobox');
	}

}
