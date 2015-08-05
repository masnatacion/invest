@extends("crud.layout-index")

	@section("table")

		<table class="table table-striped table-bordered ">
			<thead>
				<tr>

					<td> {{ $columns->id_carrusel->label }} </td>
					<td> Imagen</td>
					<td> Nombre</td>


					@include("crud.index-column-buttons")

				</tr>
			</thead>
			<tbody>

			
			@foreach($records as $record)
				<tr>


					<td>{{ parseToHTML($columns->id_carrusel,$record,$fk_column) }}</td>
					
					<td>
						<img src="./storage/image/{{ $record->id_inmueble_record->imagen  }}/200">
					</td>
					<td>{{ $record->id_inmueble_record->nombre }}</td>


					@include("crud.index-buttons")

				</tr>
			@endforeach



			</tbody>
		</table>

	@stop