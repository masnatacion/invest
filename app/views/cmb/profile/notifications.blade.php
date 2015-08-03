@extends("cmb.layout")

@section("class")
customer {{ Session::get('member_type'); }} profile
@stop

@section("jumbotron")
@stop


@section("top-content")

	<div class="avatar margin-bottom-lg">
			<img class="profile-img-card" src="./img/avatar.png">
			<div class="content">
				<h3>{{ Auth::customer()->get()->name }}</h3>
				<h4>{{ Auth::customer()->get()->member_type }}</h4>
				<p>	Balance : TT$ 53,024.41</p>
			</div>
	</div>


    <ul class="nav nav-tabs profile-tabs">
      <li class=""><a href="./cmb/profile" data-toggle="tab">Profile</a></li>
      <li><a href="./cmb/profile/password" data-toggle="tab">Password</a></li>
      @if(!Session::get('is_related'))
      	<li><a href="./cmb/profile/coshare" data-toggle="tab">coShare</a></li>
      @endif
      <li><a href="./cmb/profile/notifications" class="active" data-toggle="tab">Notifications</a></li>
      <li><a href="./cmb/profile/boxsetup" data-toggle="tab">Box Setup</a></li>
    </ul>
    
    
    <div id="myTabContent" class="tab-content">

      <div class="tab-pane active in" id="notifications">
    	<form id="tab2">

		  <div class="form-group">
		    <label for="exampleInputEmail1">Warehosue Movements : </label><br>
		    <input type="checkbox" name="" value="advance" class="form-checkbox" id="exampleInputAdvance" placeholder="Advance"> Advance
		    <input type="checkbox" name="" value="inbox" class="form-checkbox" id="exampleInputAdvance" placeholder="Inbox"> Inbox
		    <input type="checkbox" name="" value="outbox" class="form-checkbox" id="exampleInputAdvance" placeholder="Outbox"> Outbox
		    <input type="checkbox" name="" value="outfordelivery" class="form-checkbox" id="exampleInputAdvance" placeholder="Advance"> Out For Delivery
		    <input type="checkbox" name="" value="delivered" class="form-checkbox" id="exampleInputAdvance" placeholder="Delivered"> Delivered
		    
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Please select the way that you want us to communicate with you. : </label><br>
		    <input type="checkbox" name="" value="advance" class="form-checkbox" id="exampleInputAdvance" placeholder="Advance"> Newsletter
		    <input type="checkbox" name="" value="inbox" class="form-checkbox" id="exampleInputAdvance" placeholder="Inbox"> Promotions
	    
		  </div>


		  <div class="form-group">
		    <label for="exampleInputEmail1">Type</label><br>
		    <input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Email"> Email
		    <input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="SMS"> SMS
		    <input type="checkbox" name="" value="email" class="form-checkbox" id="exampleInputAdvance" placeholder="Call"> Phone Call
		  </div>

          <button class="btn btn-lg btn-success">Change</button>
    	</form>
      </div>
      
    </div>



@stop


