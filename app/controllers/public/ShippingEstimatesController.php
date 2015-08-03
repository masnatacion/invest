<?php

class ShippingEstimatesController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','shipping-estimates')
					->firstOrFail();


	    return \View::make("public.shipping-estimates.shipping-estimates")
	    		->with('record',$record);
	}

}