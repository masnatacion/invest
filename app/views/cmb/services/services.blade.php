@extends("cmb.layout")

@section("class")
customer {{ Session::get('member_type'); }}
@stop

@section("jumbotron")
@stop


@section("top-content")

<h2 class="margin-bottom-xs">Services</h2>



<div role="tabpanel">

  <!-- Nav tabs -->
  <div class="wrapper">
    <ul class="nav nav-tabs list" id="tabs" data-tabs="tabs">
    	<!-- <li class="active"><a data-toggle="tabajax" href="cmb/services/home"  rel="tooltip" data-target="#home">Home</a></li> -->
  		<li class="active"><a data-toggle="tabajax" href="cmb/services/shopamerica"  rel="tooltip" data-target="#shopamerica">Shop<br>America</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/services/pickup"  rel="tooltip" data-target="#pickup"><span class="title">PickUp<br>Instructiones</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/services/shpinst"  rel="tooltip" data-target="#shpinst">Shipping<br>Instructions</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/services/unidentified"  rel="tooltip" data-target="#unidentified">Unidentified<br> Shipments</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/services/problems"  rel="tooltip" data-target="#problems">Problem<br>Shipments</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/services/returned"  rel="tooltip" data-target="#returned">Returned<br>Items</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/services/claims"  rel="tooltip" data-target="#claims">Claims</a></li>
  </ul>
</div>

  <!-- Tab panes -->

  <div class="tab-content">
<!--    <div role="tabpanel" class="tab-pane  show-tabs active " id="home">
    </div>  -->
	   <div role="tabpanel" class="tab-pane  show-tabs active" id="shopamerica">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs " id="pickup">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs " id="shpinst">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs " id="unidentified">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs " id="problems">
    </div> 
		<div role="tabpanel" class="tab-pane  show-tabs " id="returned">
    </div> 
		<div role="tabpanel" class="tab-pane  show-tabs " id="claims">
    </div> 

  </div>


@stop



