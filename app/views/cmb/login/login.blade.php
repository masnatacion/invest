<?php
$disable_header= 1;
$disable_footer= 1;
$css= "cmb";
?>

@extends("public.layout")

@section("class")
login
@stop

@section("jumbotron")
@stop


@section("content")




<div class="container">
    <div class="row">
    	<div class="col-md-5 col-md-offset-3">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			  		<img src="./img/login-logo.png">

			    	<div class="panel-title">
			    		<h2>SpeedPak Services Ltd.</h2>
			    		<p>Service is our driving force!</p>
			    	</div>
			 	</div>
			  	<div class="panel-body">
			    	{{ Form::open(['route' => 'cmb/login/email','method'=>'post', 'role'=>'form']) }}
                    <fieldset>

			    	  	<div class="margin-bottom-sm input-group @if ($errors->has('email')) has-error @endif">
			    		    <span class="input-group-addon glyphicon glyphicon-user"></span>
			    		    {{ Form::email("email", $value = null, ["class"=>"form-control", "id"=>"exampleInputEmail1", "data-invalid"=>"false" ,"placeholder"=>"Email","required"=>"true"]); }}
			    			<span class="help-block">{{ $errors->first("email"); }}</span>
			    		</div>
			    		<div class="margin-bottom-sm input-group @if ($errors->has('password')) has-error @endif">
			    			<span class="input-group-addon icon-lock"></span>
			    			{{ Form::password("password", ["class"=>"form-control", "id"=>"exampleInputPassword1" ,"placeholder"=>"Password","required"=>"true"]); }}
			    			<span class="help-block">{{ $errors->first("password"); }}</span>
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="LOGIN">
			    	</fieldset>
			      	{{ Form::close() }}

			    </div>
			    <div class="panel-footer">
			    	<div class="pull-left">
			    		<a href="">FORGOT PASSWORD?</a>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</div>
@stop