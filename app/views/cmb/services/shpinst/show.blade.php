@extends("cmb.tabs.show")
@section("show")

<div class="padding-md">



	
	<div class="row">
		<div class="col-xs-4 text-right bg-primary h4">
			{{ Form::label($columns->id_cmb_nf_shpinst->input, $columns->id_cmb_nf_shpinst->label) }}
		</div>
		<div class="col-xs-8 h4">
			{{ parseToHTML($columns->id_cmb_nf_shpinst,$record,$fk_column) }}
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->shippers_name->input, $columns->shippers_name->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->shippers_name,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->shippers_company->input, $columns->shippers_company->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->shippers_company,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->shippers_address->input, $columns->shippers_address->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->shippers_address,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->shippers_phone->input, $columns->shippers_phone->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->shippers_phone,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->consignee_name->input, $columns->consignee_name->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->consignee_name,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->consignee_company->input, $columns->consignee_company->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->consignee_company,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->consignee_address->input, $columns->consignee_address->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->consignee_address,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->consignee_phone->input, $columns->consignee_phone->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->consignee_phone,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->pickup_company->input, $columns->pickup_company->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->pickup_company,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->pickup_contact->input, $columns->pickup_contact->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->pickup_contact,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->pickup_date->input, $columns->pickup_date->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->pickup_date,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->pickup_time->input, $columns->pickup_time->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->pickup_time,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->pickup_phone->input, $columns->pickup_phone->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->pickup_phone,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->shipping_service->input, $columns->shipping_service->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->shipping_service,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->destination_service->input, $columns->destination_service->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->destination_service,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->form_of_payment->input, $columns->form_of_payment->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->form_of_payment,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->payment_account->input, $columns->payment_account->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->payment_account,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->need_insurance->input, $columns->need_insurance->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->need_insurance,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->special_instruction->input, $columns->special_instruction->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->special_instruction,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->shipment_contents->input, $columns->shipment_contents->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->shipment_contents,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->flag->input, $columns->flag->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->flag,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->status->input, $columns->status->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->status,$record,$fk_column) }}
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->created_at->input, $columns->created_at->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->created_at,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->updated_at->input, $columns->updated_at->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->updated_at,$record,$fk_column) }}
		</div>
	</div>




</div>

@stop

