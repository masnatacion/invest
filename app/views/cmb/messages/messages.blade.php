@extends("cmb.layout")

@section("class")
customer {{ Session::get('member_type'); }}
@stop

@section("jumbotron")
@stop


@section("top-content")


<h2 class="margin-bottom-lg">Messages</h2>

<div role="tabpanel">

  <!-- Nav tabs -->
  <div class="wrapper">
    <ul class="nav nav-tabs list" id="tabs" data-tabs="tabs">
  		<li class="active"><a data-toggle="tabajax" href="cmb/messages/inbox"  rel="tooltip" data-target="#inbox">Inbox</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/messages/outbox"  rel="tooltip" data-target="#outbox">Outbox</a></li>
  		<li class=""><a data-toggle="tabajax" href="cmb/messages/compose"  rel="tooltip" data-target="#compose">Compose</a></li>
  </ul>
</div>

  <!-- Tab panes -->

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane  active " id="inbox">
    </div> 
    <div role="tabpanel" class="tab-pane  active " id="outbox">
    </div> 
    <div role="tabpanel" class="tab-pane  active " id="compose">
    </div> 
  </div>





@stop



