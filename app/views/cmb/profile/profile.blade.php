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
      <div class="tab-pane active in" id="home">

		{{ Form::open( array('url' => array('cmb/profile/personal_info'), 'id' => 'tab2','method' => 'POST','files'  => true)) }}


			<div class="form-group @if ($errors->has('name')) has-error @endif">

			 {{ Form::label("text", "Name") }}
			   
			      {{ Form::text("name",Auth::customer()->get()->name,["class" => "form-control","placeholder"=>"Name"]); }}
			    
			 <span class="help-block">{{ $errors->first('name') }}</span>
			</div>


			<div class="form-group @if ($errors->has('email')) has-error @endif">

			 {{ Form::label("email", "Email") }}
			   
			      {{ Form::email("email",Auth::customer()->get()->email,["class" => "form-control","placeholder"=>"Email"]); }}
			    
			 <span class="help-block">{{ $errors->first('email') }}</span>
			</div>

			<div class="form-group @if ($errors->has('address')) has-error @endif">

			 {{ Form::label("textarea", "Address") }}
			   
			      {{ Form::textarea("address", Auth::customer()->get()->address,["class" => "form-control","placeholder"=>"Address"]) }}
			    
			 <span class="help-block">{{ $errors->first('address') }}</span>
			</div>

			<div class="form-group @if ($errors->has('city')) has-error @endif">

			 {{ Form::label("text", "City") }}
			   
			      {{ Form::text("city",Auth::customer()->get()->city,["class" => "form-control","placeholder"=>"City"]); }}
			    
			 <span class="help-block">{{ $errors->first('city') }}</span>
			</div>

			<div class="form-group @if ($errors->has('state')) has-error @endif">

			 {{ Form::label("text", "State") }}
			   
			      {{ Form::text("state",Auth::customer()->get()->state,["class" => "form-control","placeholder"=>"State"]); }}
			    
			 <span class="help-block">{{ $errors->first('state') }}</span>
			</div>

			<div class="form-group @if ($errors->has('zip')) has-error @endif">

			 {{ Form::label("text", "Zip") }}
			   
			      {{ Form::text("zip",Auth::customer()->get()->zip,["class" => "form-control","placeholder"=>"Zip"]); }}
			    
			 <span class="help-block">{{ $errors->first('zip') }}</span>
			</div>

			<div class="form-group @if ($errors->has('country')) has-error @endif">

			 {{ Form::label("text", "Country") }}
			   
			      {{ Form::text("country",Auth::customer()->get()->country,["class" => "form-control","placeholder"=>"Country"]); }}
			    
			 <span class="help-block">{{ $errors->first('country') }}</span>
			</div>

			<div class="form-group @if ($errors->has('phone')) has-error @endif">

			 {{ Form::label("text", "Phone") }}
			   
			      {{ Form::text("phone",Auth::customer()->get()->phone,["class" => "form-control","placeholder"=>"Phone"]); }}
			    
			 <span class="help-block">{{ $errors->first('phone') }}</span>
			</div>


			<div class="form-group @if ($errors->has('fax')) has-error @endif">

			 {{ Form::label("text", "Fax") }}
			   
			      {{ Form::text("fax",Auth::customer()->get()->fax,["class" => "form-control","placeholder"=>"Fax"]); }}
			    
			 <span class="help-block">{{ $errors->first('fax') }}</span>
			</div>

			<div class="form-group @if ($errors->has('cellphone')) has-error @endif">

			 {{ Form::label("text", "Cellphone") }}
			   
			      {{ Form::text("cellphone",Auth::customer()->get()->cellphone,["class" => "form-control","placeholder"=>"Cellphone"]); }}
			    
			 <span class="help-block">{{ $errors->first('cellphone') }}</span>
			</div>

		  {{ Form::submit('Change', array('class' => 'btn btn-lg btn-success')) }}
		{{ Form::close() }}

      </div>
      
    </div>



@stop


