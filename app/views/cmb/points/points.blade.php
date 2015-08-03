@extends("cmb.layout")

@section("class")
customer {{ Session::get('member_type'); }} balance points
@stop

@section("jumbotron")
@stop


@section("top-content")

<div class="title margin-bottom-lg">
	<h2 class="margin-bottom-md pull-left">Points <span>10,201</span></h2>

	<ul class="nav nav-pills pull-right">
	  <li role="presentation" class="text-center">
	  		<p class="no-margin"><strong>EARNED</strong></p> 
	  		<span>10,576</span>

	  </li>
	  <li role="presentation" class="text-center">

	  		<p class="no-margin"><strong>USED</strong></p> 
	  		<span>375</span>


	  </li>

	</ul>

	
</div>


<div role="tabpanel" class="tabletas">

Great Prizes
To Check our prize and claim your available points click over the prizes image.
</div>






@stop



