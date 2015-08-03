@extends("public.layout")

@section("class")
contactus
@stop

@section("jumbotron")
@stop


@section("top-content")
	
@stop


@section("content")


<div class="row">
	<div class="col-md-6">

		<p>JSL SPEEDPAK SERVICES INC</p>
		<p>SPEEDPAK COMPLEX.</p>
		<p>PIARCO AIRPORT, TRINIDAD</p>
		<p>868-669-2133</p>
	</div>
	<div class="col-md-6">
		{{ Form::open( array('url' => array('contact-us/'), 'method' => 'POST','files'  => true)) }}



		<div class="form-group @if ($errors->has('first_name')) has-error @endif">

		 {{ Form::label("text", "First name") }}
		   
		      {{ Form::text("first_name",$record->first_name,["class" => "form-control","placeholder"=>"First name"]); }}
		    
		 <span class="help-block">{{ $errors->first('first_name') }}</span>
		</div>

		<div class="form-group @if ($errors->has('last_name')) has-error @endif">

		 {{ Form::label("text", "Last name") }}
		   
		      {{ Form::text("last_name",$record->last_name,["class" => "form-control","placeholder"=>"Last name"]); }}
		    
		 <span class="help-block">{{ $errors->first('last_name') }}</span>
		</div>

		<div class="form-group @if ($errors->has('email')) has-error @endif">

		 {{ Form::label("email", "Email") }}
		   
		      {{ Form::email("email",$record->email,["class" => "form-control","placeholder"=>"Email"]); }}
		    
		 <span class="help-block">{{ $errors->first('email') }}</span>
		</div>

		<div class="form-group @if ($errors->has('cmb_num')) has-error @endif">

		 {{ Form::label("number", "CMB#") }}
		   
		      {{ Form::number("cmb_num",$record->cmb_num,["class" => "form-control","placeholder"=>"Cmb num"]); }}
		    
		 <span class="help-block">{{ $errors->first('cmb_num') }}</span>
		</div>

		<div class="form-group @if ($errors->has('subject')) has-error @endif">

		 {{ Form::label("text", "Subject") }}
		   
		      {{ Form::text("subject",$record->subject,["class" => "form-control","placeholder"=>"Subject"]); }}
		    
		 <span class="help-block">{{ $errors->first('subject') }}</span>
		</div>

		<div class="form-group @if ($errors->has('message')) has-error @endif">

		 {{ Form::label("textarea", "Message") }}
		   
		      {{ Form::textarea("message", $record->message,["class" => "form-control","placeholder"=>"Message"]) }}
		    
		 <span class="help-block">{{ $errors->first('message') }}</span>
		</div>

		{{ Form::submit(trans('crud.save'), array('class' => 'btn btn-lg btn-success')) }}


		{{ Form::close() }}
	</div>
</div>



@stop


