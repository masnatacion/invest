@extends("crud.layout-show")

@section("form")

	
    @foreach ($columns as $column)
         
				<div class="row">
            @if ($column->is_primary)
                	<div class="col-xs-2 text-right bg-primary h4">
						{{ Form::label($column->input, $column->label) }}
					</div>
					<div class="col-xs-10 h4">
						{{ $record->$key_name }}
                	</div>
			@else
					<div class="col-xs-2 text-right">
						{{ Form::label($column->input, $column->label) }}
					</div>
					<div class="col-xs-10">
						{{ parseToHTML($column,$record,$fk_column) }}
					</div>

            @endif 
             	</div>
       


    @endforeach



@stop





