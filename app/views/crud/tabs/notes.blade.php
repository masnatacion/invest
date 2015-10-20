<div class="notes">

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

						@if($column->name == "attachment")
							<td> 
								@if($record->attachment)
									<a href="./storage/download/{{ $record->{$column->name} }}">
										<i class="fa fa-picture-o" style="font-size:2em"></i>
									</a> 
								@endif
							</td>
						@else
							<td> {{ HTML::decode(parseToHTML($column,$record,$fk_column)) }}  </td> 
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


	<a data-toggle="modal" class="notes-modal" href="./admin/{{$table}}/create/?{{$key_name}}={{$key_value}}" data-target="#modal">
		<span class="glyphicon glyphicon-plus"></span>
	</a>

	<script type="text/javascript">
		ModalAjax(".notes-modal",function($status,$modal){
			
			var $me = $(this);

			
			FormAjax(function(data){

				if(data.substr(0,1) == '{')
				{
					var obj = jQuery.parseJSON( data );

					if(obj.success == "false")
						alert(obj.msg);
					else if(obj.success == "true")
					{
						$modal.modal('hide');
						var tab = $(".tab-pane.active");
						var id  = tab.attr("id");
						$(".nav-tabs.list").find("[data-target=#"+id+"]").trigger("click");
					}
				}else
					$('#modal .modal-content').html(data);

					
			});

		});


	</script>

</div>



