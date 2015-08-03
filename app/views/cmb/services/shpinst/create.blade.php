@extends("cmb.tabs.show")
@section("show")

<h2 class="margin-bottom-xs" >Shpping instructions</h2>


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

<h4 class="margin-bottom-md" style="color: #428bca">Information to Appear on Airway Bill</h4>
{{ Form::open( array('url' => array('cmb/services/shpinst'), 'method' => 'POST','files'  => true)) }}



	<div class="form-group row @if ($errors->has('shippers_name')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Shippers name") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::text("shippers_name","",["class" => "form-control","placeholder"=>"Shippers name"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('shippers_name') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('shippers_company')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Shippers company") }}
	   	</div>
	   	<div class="col-md-11">
	      {{ Form::text("shippers_company","",["class" => "form-control","placeholder"=>"Shippers company"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('shippers_company') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('shippers_address')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Shippers address") }}
	   	</div>
	   	<div class="col-md-11">
	      {{ Form::textarea("shippers_address", "",["class" => "form-control","placeholder"=>"Shippers address"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('shippers_address') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('shippers_phone')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Shippers phone") }}
	   	</div>
	   	<div class="col-md-11">
	    	{{ Form::text("shippers_phone","",["class" => "form-control","placeholder"=>"Shippers phone"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('shippers_phone') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('consignee_name')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Consignee name") }}
	   </div>
	   	<div class="col-md-11">
	      	{{ Form::text("consignee_name","",["class" => "form-control","placeholder"=>"Consignee name"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('consignee_name') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('consignee_company')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Consignee company") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::text("consignee_company","",["class" => "form-control","placeholder"=>"Consignee company"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('consignee_company') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('consignee_address')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Consignee address") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::textarea("consignee_address", "",["class" => "form-control","placeholder"=>"Consignee address"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('consignee_address') }}</span>
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


<h4 class="margin-bottom-md" style="color: #428bca">If pick up service is required please provide the following information below</h4>

	<div class="form-group row @if ($errors->has('pickup_company')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Pickup company") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::text("pickup_company","",["class" => "form-control","placeholder"=>"Pickup company"]); }}
	    </div>	
	 <span class="help-block">{{ $errors->first('pickup_company') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('pickup_contact')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Pickup contact") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::text("pickup_contact","",["class" => "form-control","placeholder"=>"Pickup contact"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('pickup_contact') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('pickup_date')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("date", "Pickup date") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::datepicker("pickup_date","",["class"=>"form-control","placeholder"=>"Pickup date"],"date") }}
	    </div>
	 <span class="help-block">{{ $errors->first('pickup_date') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('pickup_time')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Pickup time") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::text("pickup_time","",["class" => "form-control","placeholder"=>"Pickup time"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('pickup_time') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('pickup_phone')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Pickup phone") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::text("pickup_phone","",["class" => "form-control","placeholder"=>"Pickup phone"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('pickup_phone') }}</span>
	</div>


<h4 class="margin-bottom-md" style="color: #428bca">Please provide the following information below</h4>


	<div class="form-group row @if ($errors->has('shipping_service')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("select", "Shipping service") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::toggle("shipping_service","",["class" => "form-control","placeholder"=>"Shipping service"],$columns->shipping_service->data ); }}
	    </div>
	 <span class="help-block">{{ $errors->first('shipping_service') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('destination_service')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("select", "Destination service") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::toggle("destination_service","",["class" => "form-control","placeholder"=>"Destination service"],$columns->destination_service->data ); }}
	    </div>
	 <span class="help-block">{{ $errors->first('destination_service') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('form_of_payment')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("select", "Form of payment") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::toggle("form_of_payment","",["class" => "form-control","placeholder"=>"Form of payment"],$columns->form_of_payment->data ); }}
	    </div>
	 <span class="help-block">{{ $errors->first('form_of_payment') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('payment_account')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Payment account") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::text("payment_account","",["class" => "form-control","placeholder"=>"Payment account"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('payment_account') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('need_insurance')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("select", "Need insurance") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::toggle("need_insurance","",["class" => "form-control","placeholder"=>"Need insurance"],$columns->need_insurance->data ); }}
	    </div>
	 <span class="help-block">{{ $errors->first('need_insurance') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('special_instruction')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Special instruction") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::textarea("special_instruction", "",["class" => "form-control","placeholder"=>"Special instruction"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('special_instruction') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('shipment_contents')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Shipment contents") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::textarea("shipment_contents", "",["class" => "form-control","placeholder"=>"Shipment contents"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('shipment_contents') }}</span>
	</div>


	{{ Form::hidden("status", "New") }}
	{{ Form::hidden("flag", "On") }}
	{{ Form::hidden("id_pcustomer", Auth::customer()->id()) }}
	    


	<div class="text-center">
		<a href="#" class="tn btn-lg btn-success search">{{ trans('crud.create') }}</a>
	</div>


{{ Form::close() }}



@stop
     


