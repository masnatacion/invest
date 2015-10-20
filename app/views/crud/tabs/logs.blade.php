
<div class="table-responsive">
	<table class="table table-striped table-bordered ">
		<thead>
			<tr>
				@foreach ($columns as $column)
					<td> {{ $column->label }} </td> 
					
				@endforeach
				
			</tr>
		</thead>
		<tbody>


		
		@foreach($records as $record)
			<tr>

				@foreach ($columns as $column)

					@if($column->is_primary)
						<td> {{ HTML::link(getenv('APP_ADMIN_PREFIX')."/".$column->table."/".$record->{$column->name},$record->{$column->name}) }}  </td>
					@else
						<td>{{ parseToHTML($column,$record,$fk_column) }}</td> 
					@endif
					
				@endforeach


			</tr>
		@endforeach
		</tbody>
	</table>

		<div class="text-center"> {{ $records->links() }} </div>

		    @if(count($records) == 0)
		      <div class="padding-lg">
		        <p class="text-center">{{ trans('crud.not_records_found') }}</p>
		      </div>
		      
		    @endif
</div>

<script type="text/javascript">
  $(".show-tabs.active .pagination a").click(function(){
      var id = $(".show-tabs.active").attr("id");
      tabajax("#"+id,$(this).attr("href"));
      return false;
  });
</script>



