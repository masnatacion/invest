@extends("admin.layout")

@section("class")
crud index
@stop

@section("jumbotron")
@stop


@section("content")



		@include("crud.toolbar")

			@yield("table")
			

		
<div class="text-center hidden-print"> 

	<div class="pull-left">
		{{ $records->links() }}
	</div>
	

	<span class="pagination pull-right">
		{{ $records->getFrom() ." - ".$records->getTo(). " of ".number_format($records->getTotal())." result(s)"; }}
	</span>

</div>

@stop



