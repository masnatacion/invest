<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInsuranceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('insurance', function(Blueprint $table)
		{
			$table->increments('id_insurance');
			$table->date('date');
			$table->string('supplier', 40);
			$table->text('value');
			$table->integer('nopcs');
			$table->enum('accounttype', array('CMB Standard','CMB Gold','CMB Platinum','JSL Regular'));
			$table->integer('accuntnumber');
			$table->text('description');
			$table->text('marksandnos');
			$table->string('consignee', 60);
			$table->string('phone', 20);
			$table->date('departuredate');
			$table->string('airlane', 60);
			$table->string('flightno', 20);
			$table->integer('id_awb');
			$table->string('pointoforigin', 60);
			$table->string('pointofdestination', 60);
			$table->text('itemspackaged');
			$table->decimal('premiumcalcvalue', 7);
			$table->decimal('premiumcalctotal', 7);
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
		Schema::drop('insurance');
	}

}
