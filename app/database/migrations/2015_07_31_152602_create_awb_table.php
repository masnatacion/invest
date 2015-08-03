<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAwbTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('awb', function(Blueprint $table)
		{
			$table->increments('id_awb');
			$table->string('customerref', 12);
			$table->date('date');
			$table->string('origin', 30);
			$table->string('destination', 30);
			$table->integer('pieces');
			$table->decimal('weight', 9, 3);
			$table->enum('unit', array('Lb','Oz','Kg','Gr'));
			$table->decimal('size_l', 4);
			$table->decimal('size_h', 4);
			$table->decimal('size_w', 4);
			$table->enum('size_unit', array('mm','cm','mt','in','ft'));
			$table->decimal('volweight', 9, 3);
			$table->decimal('chgweight', 9, 3);
			$table->text('description');
			$table->decimal('declaredvalue', 6);
			$table->enum('type', array('Document','Non Document'));
			$table->enum('dest_serv', array('ATA','DTD'));
			$table->string('info', 120);
			$table->enum('paymethod', array('Prepaid','Credit','C.O.D','Regular'));
			$table->enum('service_type', array('Air','Air Cargo','Ground','Sea'));
			$table->integer('id_rates');
			$table->decimal('shipping_charges', 9);
			$table->integer('from_id_customer')->index('from_id_customer');
			$table->string('from_name', 60);
			$table->text('from_address');
			$table->string('from_city', 40);
			$table->string('from_state', 10);
			$table->string('from_zip', 5);
			$table->string('from_country', 25);
			$table->string('from_phone', 20);
			$table->string('from_email', 40);
			$table->integer('to_id_customer')->index('to_id_customer');
			$table->string('to_name', 60);
			$table->text('to_address');
			$table->string('to_city', 40);
			$table->string('to_state', 10);
			$table->string('to_zip', 5);
			$table->string('to_country', 25);
			$table->string('to_phone', 20);
			$table->string('to_email', 40);
			$table->text('awb_notes');
			$table->text('awb_claims');
			$table->enum('claim_status', array('High','Normal','Low','Closed'));
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
		Schema::drop('awb');
	}

}
