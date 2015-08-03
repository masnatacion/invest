<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebInvoiceItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_invoice_items', function(Blueprint $table)
		{
			$table->increments('id_web_invoice_items');
			$table->string('shipper', 60);
			$table->string('consignee', 60);
			$table->string('box', 20);
			$table->integer('num_pcs');
			$table->text('description');
			$table->text('comments');
			$table->enum('status', array('Listed','Not Listed'));
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
		Schema::drop('web_invoice_items');
	}

}
