@extends("cmb.tabs.show")
@section("show")
<div class="padding-md">
	
	
	<div class="row">
		<div class="col-xs-4 text-right bg-primary h4">
			{{ Form::label($columns->id_returned_items->input, $columns->id_returned_items->label) }}
		</div>
		<div class="col-xs-8 h4">
			{{ parseToHTML($columns->id_returned_items,$record,$fk_column) }}
		</div>
	</div>

	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->shipper->input, $columns->shipper->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->shipper,$record,$fk_column) }}
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
			{{ Form::label($columns->driver->input, $columns->driver->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->driver,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->notes->input, $columns->notes->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->notes,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->date->input, $columns->date->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->date,$record,$fk_column) }}
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


