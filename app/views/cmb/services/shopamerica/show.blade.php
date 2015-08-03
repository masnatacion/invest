@extends("cmb.tabs.show")
@section("show")

<div class="padding-md">



	<div class="row">
		<div class="col-xs-4 text-right bg-primary h4">
			{{ Form::label($columns->id_pobox_items->input, $columns->id_pobox_items->label) }}
		</div>
		<div class="col-xs-8 h4">
			{{ parseToHTML($columns->id_pobox_items,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->id_pobox->input, $columns->id_pobox->label) }}
		</div>
		<div class="col-xs-8 ">
			 {{ $record->id_pobox }}
			<!-- {{ parseToHTML($columns->id_pobox,$record,$fk_column) }} -->
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->item_description->input, $columns->item_description->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->item_description,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->carrier_name->input, $columns->carrier_name->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->carrier_name,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->Tracking->input, $columns->Tracking->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->Tracking,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->weight->input, $columns->weight->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->weight,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->wunit->input, $columns->wunit->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->wunit,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->size_width->input, $columns->size_width->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->size_width,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->size_height->input, $columns->size_height->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->size_height,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->size_length->input, $columns->size_length->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->size_length,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->munit->input, $columns->munit->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->munit,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->vol_weight->input, $columns->vol_weight->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->vol_weight,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->chg_weight->input, $columns->chg_weight->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->chg_weight,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->declared_value->input, $columns->declared_value->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->declared_value,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->location->input, $columns->location->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->location,$record,$fk_column) }}
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->created_by->input, $columns->created_by->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->created_by,$record,$fk_column) }}
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 text-right ">
			{{ Form::label($columns->updated_by->input, $columns->updated_by->label) }}
		</div>
		<div class="col-xs-8 ">
			{{ parseToHTML($columns->updated_by,$record,$fk_column) }}
		</div>
	</div> -->
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

