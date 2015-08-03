@extends("cmb.tabs.show")
@section("show")



<h2 class="margin-bottom-xs">Pickup / Delivery</h2>



<p class="margin-bottom-lg">
This form is to be used when requesting courier services in the United States or the Caribbean Courier services to all Caribbean destinations except Trinidad are to be requested by telephone, please contact us at <strong>1868-669-2133</strong>. All requests submitted before 12:00 noon will not be submitted for Pickup/Delivery the next day. The cost of the pickup/delivery is determined by the weight of the shipment, the size of the shipment, the distance from the pickup/delivery point, the me constraints for pickup/delivery and the waiting time. Any pick up that is Dry-run due to Incorrect information from the customer of the shipper will be charged a Dry-run fee of $8.00 usd. Thank you for Choosing Classic Mail Box and for allowing us to service your shipping needs.

If you have any question you can contact out Customer Service representative at <strong>jslmiacustomersvc@jslspeedpak.com</strong> 1-868-669-2133 
</p>



<h4 class="margin-bottom-md" style="color: #428bca">CMB Member Info</h4>

	<div class="form-group row">

		<div class="col-md-1">
			{{ Form::label("text", "Name") }}
		</div>
	 		
		<div class="col-md-11">
			<p>{{Auth::customer()->get()->name}}</p>
		</div>
	  
	</div>

	<div class="form-group row">

		<div class="col-md-1">
			{{ Form::label("text", "Phone") }}
		</div>
	 		
		<div class="col-md-11">
			<p>{{Auth::customer()->get()->email}}</p>
		</div>
	  
	</div>

	<div class="form-group row">

		<div class="col-md-1">
			{{ Form::label("text", "Email") }}
		</div>
	 		
		<div class="col-md-11">
			<p>{{Auth::customer()->get()->email}}</p>
		</div>
	  
	</div>


{{ Form::open( array('url' => array('cmb/services/pickup'), 'method' => 'POST','files'  => true)) }}


<h4 class="margin-bottom-md" style="color: #428bca">Pickup Info</h4>


	<div class="form-group row @if ($errors->has('company')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Company") }}
	    </div>

	    <div class="col-md-11">
	      {{ Form::text("company","",["class" => "form-control","placeholder"=>"Company"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('company') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('address')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Address") }}
	   	</div>

	   	<div class="col-md-11">
	      {{ Form::textarea("address", "",["class" => "form-control","placeholder"=>"Address"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('address') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('phone')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Phone") }}
	   	</div>

	   	<div class="col-md-11">
	      {{ Form::text("phone","",["class" => "form-control","placeholder"=>"Phone"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('phone') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('contact_name')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Contact name") }}
	   	</div>

	   	<div class="col-md-11">
	      {{ Form::text("contact_name","",["class" => "form-control","placeholder"=>"Contact name"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('contact_name') }}</span>
	</div>


<h4 class="margin-bottom-md margin-top-lg" style="color: #428bca">Consignee Info</h4>

	<div class="form-group row @if ($errors->has('consignee')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Consignee") }}
	   	</div>

	   	<div class="col-md-11">
	      {{ Form::text("consignee","",["class" => "form-control","placeholder"=>"Consignee"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('consignee') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('consignee_phone')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Consignee phone") }}
		</div>

		<div class="col-md-11">	   
	      {{ Form::text("consignee_phone","",["class" => "form-control","placeholder"=>"Consignee phone"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('consignee_phone') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('instructions')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Instructions") }}
	   	</div>

	   	<div class="col-md-11">
	      {{ Form::textarea("instructions", "",["class" => "form-control","placeholder"=>"Instructions"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('instructions') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('order_num')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Order num") }}
	   	</div>

	   	<div class="col-md-11">
	      {{ Form::text("order_num","",["class" => "form-control","placeholder"=>"Order num"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('order_num') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('cnee_instructions')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Cnee instructions") }}
	   	</div>

	   	<div class="col-md-11">
	      {{ Form::textarea("cnee_instructions", "",["class" => "form-control","placeholder"=>"Cnee instructions"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('cnee_instructions') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('pieces')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Pieces") }}
	   	</div>

	   	<div class="col-md-11">
	      {{ Form::text("pieces","",["class" => "form-control","placeholder"=>"Pieces"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('pieces') }}</span>
	</div>


	<div class="text-center">
		<a href="#" class="tn btn-lg btn-success search">{{ trans('crud.create') }}</a>
		
	</div>

	{{ Form::hidden("status", "New") }}
	{{ Form::hidden("flag", "On") }}
	{{ Form::hidden("id_pcustomer", Auth::customer()->id()) }}


{{ Form::close() }}



@stop

