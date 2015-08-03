<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMawbTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mawb', function(Blueprint $table)
		{
			$table->increments('id_mawb');
			$table->integer('id_certificate')->nullable();
			$table->integer('id_agency')->nullable();
			$table->integer('id_handover')->nullable();
			$table->string('issuedby', 20);
			$table->text('shippers_name_and_address')->nullable();
			$table->string('shippers_account_number', 30)->nullable();
			$table->text('consignee_name_and_address')->nullable();
			$table->string('consignee_account_number', 30)->nullable();
			$table->text('issuingcarrier_agent_name_and_city')->nullable();
			$table->text('accounting_information')->nullable();
			$table->string('agentsiata_code', 20)->nullable();
			$table->string('account_no', 10)->nullable();
			$table->string('airport_of_departure', 30)->nullable();
			$table->string('to1', 10)->nullable();
			$table->string('by_first_carrier', 30)->nullable();
			$table->string('to2', 10)->nullable();
			$table->string('by1', 10)->nullable();
			$table->string('to3', 10)->nullable();
			$table->string('by2', 10)->nullable();
			$table->string('currency', 4)->nullable();
			$table->string('chgs_code', 3)->nullable();
			$table->string('wt_val_ppd', 1)->nullable();
			$table->string('wt_val_coll', 1)->nullable();
			$table->string('other_ppd', 1)->nullable();
			$table->string('other_coll', 1)->nullable();
			$table->string('declared_value_for_carriage', 10)->nullable();
			$table->string('declared_value_for_customs', 10)->nullable();
			$table->string('airport_of_destination', 15)->nullable();
			$table->string('flight_date1', 20)->nullable();
			$table->string('flight_date2', 20)->nullable();
			$table->decimal('amount_of_insurance', 6)->nullable();
			$table->text('handling_information')->nullable();
			$table->integer('num_of_pieces_1')->nullable();
			$table->decimal('gross_weight_1', 4)->nullable();
			$table->enum('weight_unit_1', array('kg','lb'))->nullable();
			$table->string('commodity_item_no_1', 10)->nullable();
			$table->decimal('chargeable_weight_1', 4)->nullable();
			$table->string('rate_charge_1', 10)->nullable();
			$table->decimal('total_charge_1', 6)->nullable();
			$table->string('description_1', 20)->nullable();
			$table->integer('num_of_pieces_2')->nullable();
			$table->decimal('gross_weight_2', 4)->nullable();
			$table->enum('weight_unit_2', array('kg','lb'))->nullable();
			$table->string('commodity_item_no_2', 10)->nullable();
			$table->decimal('chargeable_weight_2', 4)->nullable();
			$table->string('rate_charge_2', 10)->nullable();
			$table->decimal('total_charge_2', 6)->nullable();
			$table->string('description_2', 20)->nullable();
			$table->integer('num_of_pieces_3')->nullable();
			$table->decimal('gross_weight_3', 4)->nullable();
			$table->enum('weight_unit_3', array('kg','lb'))->nullable();
			$table->string('commodity_item_no_3', 10)->nullable();
			$table->decimal('chargeable_weight_3', 4)->nullable();
			$table->string('rate_charge_3', 10)->nullable();
			$table->decimal('total_charge_3', 6)->nullable();
			$table->string('description_3', 20)->nullable();
			$table->integer('num_of_pieces_4')->nullable();
			$table->decimal('gross_weight_4', 4)->nullable();
			$table->enum('weight_unit_4', array('kg','lb'))->nullable();
			$table->string('commodity_item_no_4', 10)->nullable();
			$table->decimal('chargeable_weight_4', 4)->nullable();
			$table->string('rate_charge_4', 10)->nullable();
			$table->decimal('total_charge_4', 6)->nullable();
			$table->string('description_4', 20)->nullable();
			$table->integer('num_of_pieces_5')->nullable();
			$table->decimal('gross_weight_5', 4)->nullable();
			$table->enum('weight_unit_5', array('kg','lb'))->nullable();
			$table->string('commodity_item_no_5', 10)->nullable();
			$table->decimal('chargeable_weight_5', 4)->nullable();
			$table->string('rate_charge_5', 10)->nullable();
			$table->decimal('total_charge_5', 6)->nullable();
			$table->string('description_5', 20)->nullable();
			$table->integer('num_of_pieces_6')->nullable();
			$table->decimal('gross_weight_6', 4)->nullable();
			$table->enum('weight_unit_6', array('kg','lb'))->nullable();
			$table->string('commodity_item_no_6', 10)->nullable();
			$table->decimal('chargeable_weight_6', 4)->nullable();
			$table->string('rate_charge_6', 10)->nullable();
			$table->decimal('total_charge_6', 6)->nullable();
			$table->string('description_6', 20)->nullable();
			$table->integer('total_num_of_pieces')->nullable();
			$table->decimal('total_gross_weight', 4)->nullable();
			$table->decimal('total_total_charge', 6)->nullable();
			$table->decimal('weight_charge_prepaid', 6)->nullable();
			$table->decimal('weightcharge_collect', 6)->nullable();
			$table->decimal('valuationcharge_prepaid', 6)->nullable();
			$table->decimal('valuationcharge_collect', 6)->nullable();
			$table->decimal('tax_prepaid', 6)->nullable();
			$table->decimal('tax_collect', 6)->nullable();
			$table->decimal('total_other_chargedue_agent_prepaid', 6)->nullable();
			$table->decimal('total_other_chargedue_agent_collect', 6)->nullable();
			$table->decimal('total_other_chargedue_carrier_prepaid', 6)->nullable();
			$table->decimal('total_other_chargedue_carrier_collect', 6)->nullable();
			$table->string('other_charge1_desc', 25)->nullable();
			$table->string('other_charge2_desc', 25)->nullable();
			$table->string('other_charge3_desc', 25)->nullable();
			$table->string('cod_currency', 5)->nullable();
			$table->decimal('total_prepaid', 6)->nullable();
			$table->decimal('total_collect', 6)->nullable();
			$table->decimal('currency_conversion_rates', 6)->nullable();
			$table->decimal('cccharges_indest_currency', 6)->nullable();
			$table->decimal('charges_at_destination', 6)->nullable();
			$table->decimal('total_collect_charges', 6)->nullable();
			$table->string('signature', 30);
			$table->string('executedon', 30);
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
		Schema::drop('mawb');
	}

}
