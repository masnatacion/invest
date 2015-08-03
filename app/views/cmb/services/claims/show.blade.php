@extends("cmb.tabs.show")
@section("show")
<div class="padding-md">

	<div class="row">
		<div class="col-xs-4 text-right bg-primary h4">
			{{ Form::label($columns->id_cmb_nf_claims->input, $columns->id_cmb_nf_claims->label) }}
		</div>
		<div class="col-xs-8 h4">
			{{ parseToHTML($columns->id_cmb_nf_claims,$record,$fk_column) }}
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->date_shipped->input, $columns->date_shipped->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->date_shipped,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->id_awb->input, $columns->id_awb->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ $record->id_awb }}
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
			{{ Form::label($columns->claim_note->input, $columns->claim_note->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->claim_note,$record,$fk_column) }}
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

