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
      <li><a href="./cmb/profile/password" class="active" data-toggle="tab">Password</a></li>
      @if(!Session::get('is_related'))
      	<li><a href="./cmb/profile/coshare" data-toggle="tab">coShare</a></li>
      @endif
      <li><a href="./cmb/profile/notifications"  data-toggle="tab">Notifications</a></li>
      <li><a href="./cmb/profile/boxsetup" data-toggle="tab">Box Setup</a></li>
    </ul>
    
    
    <div id="myTabContent" class="tab-content">

      <div class="tab-pane fade" id="profile">

      	{{ Form::open( array('url' => array('cmb/profile/password'), 'id' => 'tab2','method' => 'POST','files'  => true)) }}

		  <div class="form-group">
		    <label for="exampleInputEmail1">Old Password</label>
		    <input name="old_password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Old Password">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">New Password</label>
		    <input name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="New Password">
		  </div>

		  {{ Form::submit('Change', array('class' => 'btn btn-lg btn-success')) }}

    	{{ Form::close() }}


      </div>

    </div>


@stop


