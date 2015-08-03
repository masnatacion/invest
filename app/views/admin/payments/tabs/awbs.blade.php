
<div class="table-responsive">
	<table class="table table-striped table-bordered ">
		<thead>
			<tr>

				<td> ID </td> 
				<td> Invoice Num </td> 
				<td> Date </td> 
				<td> Total </td>
				<td> Amount </td>
				
			</tr>
		</thead>
		<tbody>

		
		@foreach($records as $record)
			<tr>

				@foreach ($columns as $column)
					@if($column->is_foreign_key)
						<?php
							$is_with_link = getFKColumn($column->name,$record,$fk_column);
						?>
						@if($is_with_link != "---")
							<td> {{ HTML::link(getenv('APP_ADMIN_PREFIX')."/".strtolower($columns->{$column->name}->model)."/".$record->{$column->name},$is_with_link) }}  </td>
						@else
							<td> {{ $is_with_link }}  </td>
						@endif
					@else
						<td> {{ $record->{$column->name} }}  </td> 
					@endif
					
				@endforeach



			</tr>
		@endforeach
		</tbody>
	</table>

		@if(count($records) == 0)
			<div class="padding-lg">
				<p class="text-center">{{ trans('crud.not_records_found') }}</p>
			</div>
			
		@endif
</div>



