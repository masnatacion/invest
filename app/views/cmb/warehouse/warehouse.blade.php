@extends("cmb.layout")

@section("class")
customer {{ Session::get('member_type'); }}
@stop

@section("jumbotron")
@stop


@section("top-content")


<h2 class="margin-bottom-lg">Warehouse</h2>

<div role="tabpanel">

  <!-- Nav tabs -->
  <div class="wrapper">
    <ul class="nav nav-tabs list" id="tabs" data-tabs="tabs">
  		<li class=""><a data-toggle="tabajax" href="cmb/warehouse/advance"  rel="tooltip" data-target="#advance">Advance</a></li>
  		<li class="active"><a data-toggle="tabajax" href="cmb/warehouse/inbox"  rel="tooltip" data-target="#inbox">Inbox</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/warehouse/in_transit"  rel="tooltip" data-target="#in_transit">In transit</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/warehouse/delivered"  rel="tooltip" data-target="#delivered">Delivered</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/warehouse/with_claim"  rel="tooltip" data-target="#with_claim">With claim</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/warehouse/historic"  rel="tooltip" data-target="#historic">Historic</a></li>
  </ul>
</div>

  <!-- Tab panes -->

  <div class="tab-content">
	<div role="tabpanel" class="tab-pane   show-tabs" id="advance">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs active" id="inbox">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs " id="in_transit">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs " id="delivered">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs " id="with_claim">
    </div> 
    <div role="tabpanel" class="tab-pane  show-tabs " id="historic">
    </div> 
  </div>





@stop



