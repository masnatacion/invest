@extends("cmb.layout")

@section("class")
customer {{ Session::get('member_type'); }} balance
@stop

@section("jumbotron")
@stop


@section("top-content")
	
<div class="title margin-bottom-lg">
	<h2 class="margin-bottom-md pull-left">Balance <span>TT$ 53,024.41</span></h2>

	<ul class="nav nav-pills pull-right">
	  <li role="presentation" class="text-center">
	  		<p class="no-margin"><strong>INVOICES</strong></p> 
	  		<span>293</span>

	  </li>
	  <li role="presentation" class="text-center">

	  		<p class="no-margin"><strong>TOTAL INVOICES</strong></p> 
	  		<span>$ 101,717.63</span>


	  </li>
	  <li role="presentation" class="text-center">
	  		<p class="no-margin"><strong>TOTAL PAYMENTS</strong></p> 
	  		<span>$ 54,198.12</span>

	  </li>
	</ul>

	
</div>


<div role="tabpanel" class="tabletas">

  <!-- Nav tabs -->
  <div class="wrapper">
    <ul class="nav nav-tabs list" id="tabs" data-tabs="tabs">
  		<li class="active"><a data-toggle="tabajax" href="cmb/balance/search"  rel="tooltip" data-target="#search">Search</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/balance/list_all"  rel="tooltip" data-target="#list_all">List All</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/balance/invoices"  rel="tooltip" data-target="#invoices">Invoices</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/balance/payments"  rel="tooltip" data-target="#payments">Payments</a></li>
  </ul>
</div>

  <!-- Tab panes -->

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane  show-tabs active " id="search">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabsactive " id="list_all">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs active " id="invoices">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs active " id="payments">
    </div> 
  </div>





@stop



