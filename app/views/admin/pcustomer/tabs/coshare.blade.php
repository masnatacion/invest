@if(count($records) == 0)
	<div class="padding-lg">
		<p class="text-center">{{ trans('crud.not_records_found') }}</p>
	</div>
	
@endif

@if(count($records) > 0)

	<div class="table-responsive">
		<table class="table table-striped table-bordered ">
			<thead>
				<tr>
					<td> ID </td> 
					<td> Name </td> 
					<td> Email </td> 
					<td> Status </td> 
				</tr>
			</thead>
			<tbody>


			
			@foreach($records as $index => $record)
				<tr>

						@if($index == "id_pcustomer")
							<td> {{ HTML::link(getenv('APP_ADMIN_PREFIX')."/pcustomer/".$record->id_pcustomer,$record->id_pcustomer) }}  </td>
						@endif
						<td>{{ $record->name }}</td> 
						<td>{{ $record->email }}</td> 
						<td>{{ $record->status }}</td> 
					
				</tr>
			@endforeach
			</tbody>
		</table>

			<div class="text-center"> {{ $records->links() }} </div>


	</div>

	<script type="text/javascript">
	  $(".show-tabs.active .pagination a").click(function(){
	      var id = $(".show-tabs.active").attr("id");
	      tabajax("#"+id,$(this).attr("href"));
	      return false;
	  });
	</script>

@endif

