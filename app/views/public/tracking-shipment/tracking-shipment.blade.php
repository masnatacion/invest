@extends("public.layout")

@section("class")

@stop

@section("jumbotron")
@stop


@section("top-content")
	
@stop


@section("content")
	<div class="about-us ">
		<div class="row ">
			<div class="col-md-8">
				<h2>{{ $record->txt_title }}</h2>

				
				<div class="box">
					<div class="row margin-bottom-lg">
						<div class="col-md-3">
							<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjA0Njg3NSIgeT0iNzAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNDB4MTQwPC90ZXh0PjwvZz48L3N2Zz4=" alt="..." class="img-thumbnail">	
						</div>
						<div class="col-md-9">
							
	
							{{ Form::open( array('url' => array('tracking-shipment'),'class'=>'form-inline', 'method' => 'POST','files'  => true)) }}
							
							  <div class="form-group">
							    {{ Form::label("text", "Enter Airway Bill Number") }}
							    <input name="tracking" class="form-control" type="text" placeholder="Tracking" value="{{ $tracking }}">
							  </div>

							  <button type="submit" class="btn btn-default btn-success">Go</button>

							{{ Form::close() }}




	                  
							</div>
						</div>
					</div>
				</div>



					
			</div>

			<div class="row">
				<div class="col-ls-12">

						@if(isset($records) and count($records) > 0)

							
							<div class="table-responsive">
								<table class="table table-hover">
								  <thead>
								    <tr>
								      <th>ID</th>
								      <th></th>
								    </tr>
								  </thead>
								  <tbody>

								    @foreach($records as $record)

									    <tr>

									      <th scope="row">
									        {{ $record->id }}
									      </th>
									      <td>
									      	{{ $record->title }}
									      </td>
									      <td>
									      	{{ Date::createFromFormat('Y-m-d H:i:s', $record->created_at)->format('l, j F Y'); }}
									      </td>
									    </tr>



								    @endforeach
								   </tbody>
								</table>
							</div>


							  
							  <div class="text-center"> 
							    <p class="margin-top-lg">{{ "Displaying ".$records->getFrom() ." - ".$records->getTo(). " of ".number_format($records->getTotal())." result(s)"; }}</p>
							    {{ $records->links() }} 
							  </div>

						@elseif(isset($records))
							{{ trans('crud.not_records_found'); }}  
						@endif  

				</div>	
			</div>
		</div>
	</div>

@stop


