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
      	<li><a href="./cmb/profile/coshare" class="active" data-toggle="tab">coShare</a></li>
      @endif
      <li><a href="./cmb/profile/notifications"  data-toggle="tab">Notifications</a></li>
      <li><a href="./cmb/profile/boxsetup" data-toggle="tab">Box Setup</a></li>
    </ul>
    
    
    <div id="myTabContent" class="tab-content">


	      <div class="tab-pane fade" id="coShare">

	      	{{ Form::open( array('url' => array('cmb/profile/coshare'), 'method' => 'POST','files'  => true)) }}

				<div class="form-group @if ($errors->has('name')) has-error @endif">

				 {{ Form::label("text", "Name") }}
				   
				      {{ Form::text("name",$record->name,["class" => "form-control","placeholder"=>"Name"]); }}
				    
				 <span class="help-block">{{ $errors->first('name') }}</span>
				</div>

				<div class="form-group @if ($errors->has('address')) has-error @endif">

				 {{ Form::label("textarea", "Address") }}
				   
				      {{ Form::textarea("address", $record->address,["class" => "form-control","placeholder"=>"Address"]) }}
				    
				 <span class="help-block">{{ $errors->first('address') }}</span>
				</div>


				<div class="form-group @if ($errors->has('phone')) has-error @endif">

				 {{ Form::label("text", "Phone") }}
				   
				      {{ Form::text("phone",$record->phone,["class" => "form-control","placeholder"=>"Phone"]); }}
				    
				 <span class="help-block">{{ $errors->first('phone') }}</span>
				</div>


				<div class="form-group @if ($errors->has('email')) has-error @endif">

				 {{ Form::label("email", "Email") }}
				   
				      {{ Form::email("email",$record->email,["class" => "form-control","placeholder"=>"Email"]); }}
				    
				 <span class="help-block">{{ $errors->first('email') }}</span>
				</div>

				{{ Form::submit(trans('crud.save'), array('class' => 'btn btn-lg btn-success')) }}

			{{ Form::close() }}	

	      </div>

	</div>




@stop




