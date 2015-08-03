@extends("admin.layout")

@section("class")
crud index
@stop

@section("jumbotron")
@stop


@section("content")

	

<h2 class="margin-bottom-xs">Search {{ Input::get("tracking") }}</h2>


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
		      	{{ HTML::link(getenv('APP_ADMIN_PREFIX')."/".$record->table."/".$record->id,$record->id) }}
		        
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


@stop



