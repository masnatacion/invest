@extends("crud.layout-index")

	@section("table")

		<table class="table table-striped table-bordered ">
			<thead>
				<tr>

					<td> {{ $columns->id_cmb_nf_lost_items->label }} </td>
					<td> {{ $columns->tracking->label }} </td>


					@include("crud.index-column-buttons")

				</tr>
			</thead>
			<tbody>

			
			@foreach($records as $record)
				<tr>


					<td>{{ parseToHTML($columns->id_cmb_nf_lost_items,$record,$fk_column) }}</td>
					<td><a href="./cmb_nf_lost_items/{{ $record->id_cmb_nf_lost_items }}">{{ $record->tracking }}</a></td>


					@include("crud.index-buttons")

				</tr>
			@endforeach



			</tbody>
		</table>

	@stop