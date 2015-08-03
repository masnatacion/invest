@extends("cmb.tabs.show")
@section("show")
<div class="padding-md">

	<div class="row">
		<div class="col-xs-4 text-right bg-primary h4">
			{{ Form::label($columns->id_cmb_nf_pickup->input, $columns->id_cmb_nf_pickup->label) }}
		</div>
		<div class="col-xs-8 h4">
			{{ parseToHTML($columns->id_cmb_nf_pickup,$record,$fk_column) }}
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->company->input, $columns->company->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->company,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->address->input, $columns->address->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->address,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->phone->input, $columns->phone->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->phone,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->contact_name->input, $columns->contact_name->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->contact_name,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->consignee->input, $columns->consignee->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->consignee,$record,$fk_column) }}
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
			{{ Form::label($columns->instructions->input, $columns->instructions->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->instructions,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->order_num->input, $columns->order_num->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->order_num,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->cnee_instructions->input, $columns->cnee_instructions->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->cnee_instructions,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->pieces->input, $columns->pieces->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->pieces,$record,$fk_column) }}
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


