@extends("cmb.tabs.show")
@section("show")
<div class="padding-md">
	
	<div class="row">
		<div class="col-xs-4 text-right bg-primary h4">
			{{ Form::label($columns->id_cmb_nf_probshp->input, $columns->id_cmb_nf_probshp->label) }}
		</div>
		<div class="col-xs-8 h4">
			{{ parseToHTML($columns->id_cmb_nf_probshp,$record,$fk_column) }}
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->problem_date->input, $columns->problem_date->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->problem_date,$record,$fk_column) }}
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
			{{ Form::label($columns->consignee_name->input, $columns->consignee_name->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->consignee_name,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->carrier->input, $columns->carrier->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->carrier,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->tracking->input, $columns->tracking->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->tracking,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->contents->input, $columns->contents->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->contents,$record,$fk_column) }}
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
			{{ Form::label($columns->comments->input, $columns->comments->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->comments,$record,$fk_column) }}
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


