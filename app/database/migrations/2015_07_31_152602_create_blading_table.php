<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBladingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blading', function(Blueprint $table)
		{
			$table->increments('id_blading');
			$table->string('id_agency', 60)->index();
			$table->text('shippers_name_and_address');
			$table->string('doc_number', 20);
			$table->string('booking', 20);
			$table->string('export_refs', 20);
			$table->text('consignee');
			$table->string('fwdagent', 20);
			$table->string('point_of_origin', 20);
			$table->text('notify_party');
			$table->text('domestic_routing');
			$table->string('pre_carriage', 20);
			$table->string('place_of_receipt', 20);
			$table->string('exporting_carrier', 20);
			$table->string('port_of_loading', 20);
			$table->string('loading_pier', 20);
			$table->string('declared_value', 20);
			$table->string('port_of_discharge', 20);
			$table->string('transshiopment', 20);
			$table->string('type_of_move', 20);
			$table->enum('containerized', array('Yes','No'));
			$table->date('date');
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
		Schema::drop('blading');
	}

}
