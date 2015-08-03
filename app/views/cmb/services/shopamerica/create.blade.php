@extends("cmb.tabs.show")
@section("show")


<h2 class="margin-bottom-xs">Shop America</h2>


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

<h4 class="margin-bottom-md" style="color: #428bca">Ordering information</h4>

{{ Form::open( array('url' => array('cmb/services/shopamerica'), 'method' => 'POST','files'  => true)) }}

	<div class="form-group row @if ($errors->has('contact_name')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Contact name") }}
	   	</div>

	   	<div class="col-md-11">
	      {{ Form::text("contact_name","",["class" => "form-control","placeholder"=>"Contact name"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('contact_name') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('company_name')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Company name") }}
	   	</div>
	 	<div class="col-md-11">
	    	{{ Form::text("company_name","",["class" => "form-control","placeholder"=>"Company name"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('company_name') }}</span>
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

	<div class="form-group row @if ($errors->has('address')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Address") }}
	   
	   	<div class="col-md-11">
	    	{{ Form::textarea("address", "",["class" => "form-control","placeholder"=>"Address"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('address') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('city')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "City") }}
	    </div>

	    <div class="col-md-11">
	      {{ Form::text("city","",["class" => "form-control","placeholder"=>"City"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('city') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('state')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "State") }}
	   	</div>
	 	<div class="col-md-11">
	    	{{ Form::text("state","",["class" => "form-control","placeholder"=>"State"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('state') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('itemname')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Itemname") }}
	   	</div>
	 	<div class="col-md-11">
	    	{{ Form::text("itemname","",["class" => "form-control","placeholder"=>"Itemname"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('itemname') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('item')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Item") }}
	   	</div>
	   	<div class="col-md-11">
	    	{{ Form::text("item","",["class" => "form-control","placeholder"=>"Item"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('item') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('model_serial')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Model serial") }}
	   	</div>
	   	<div class="col-md-1">
	      {{ Form::text("model_serial","",["class" => "form-control","placeholder"=>"Model serial"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('model_serial') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('quantity')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("number", "Quantity") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::number("quantity","",["class" => "form-control","placeholder"=>"Quantity"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('quantity') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('price')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Price") }}
	   	</div>
	    <div class="col-md-11">	
	    	{{ Form::text("price","",["class" => "form-control","placeholder"=>"Price"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('price') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('fee')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Fee") }}
	   	</div>
	   	<div class="col-md-11">
	    	{{ Form::text("fee","",["class" => "form-control","placeholder"=>"Fee"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('fee') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('brief_description')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Brief description") }}
	   	</div>
	    <div class="col-md-11">
	    	{{ Form::textarea("brief_description", "",["class" => "form-control","placeholder"=>"Brief description"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('brief_description') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('special_instructions')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("textarea", "Special instructions") }}
	   	</div>
	   	<div class="col-md-11">

	    	{{ Form::textarea("special_instructions", "",["class" => "form-control","placeholder"=>"Special instructions"]) }}
	    </div>
	 <span class="help-block">{{ $errors->first('special_instructions') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('purchase_service')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("select", "Purchase service") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::toggle("purchase_service","",["class" => "form-control","placeholder"=>"Purchase service"],$columns->purchase_service->data ); }}
	    </div>
	 <span class="help-block">{{ $errors->first('purchase_service') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('shipping_service')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("select", "Shipping service") }}
	   	</div>
	   	<div class="col-md-11">
	    	{{ Form::toggle("shipping_service","",["class" => "form-control","placeholder"=>"Shipping service"],$columns->shipping_service->data ); }}
	    </div>
	 <span class="help-block">{{ $errors->first('shipping_service') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('pay_method')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("select", "Pay method") }}
	   	</div>
	   	<div class="col-md-11">
	    	{{ Form::toggle("pay_method","",["class" => "form-control","placeholder"=>"Pay method"],$columns->pay_method->data ); }}
	    </div>
	 <span class="help-block">{{ $errors->first('pay_method') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('carrier')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("select", "Carrier") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::toggle("carrier","",["class" => "form-control","placeholder"=>"Carrier"],$columns->carrier->data ); }}
	    </div>
	 <span class="help-block">{{ $errors->first('carrier') }}</span>
	</div>

	<div class="form-group row @if ($errors->has('tracking')) has-error @endif">

		<div class="col-md-1">
	 		{{ Form::label("text", "Tracking") }}
	   	</div>
	   	<div class="col-md-11">
	      	{{ Form::text("tracking","",["class" => "form-control","placeholder"=>"Tracking"]); }}
	    </div>
	 <span class="help-block">{{ $errors->first('tracking') }}</span>
	</div>


	<div class="text-center">
		<a href="#" class="tn btn-lg btn-success search">{{ trans('crud.create') }}</a>
	</div>


	{{ Form::hidden("status", "Open") }}
	{{ Form::hidden("flag", "On") }}
	{{ Form::hidden("id_pcustomer", Auth::customer()->id()) }}

{{ Form::close() }}



@stop


