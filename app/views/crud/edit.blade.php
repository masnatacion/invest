@extends("crud.layout-form")

@section("form")

<div class="form-group">
	<div class="row">
		<div class="col-xs-2 text-right bg-primary h4">
			{{ Form::label($columns->$key_name->input, $columns->$key_name->label) }}
		</div>
		<div class="col-xs-10 h4">
			{{ $record->$key_name }}
		</div>
	</div>

</div>


	@include("crud.form")

    
     

@stop

