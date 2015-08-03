<?php

class PricingController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','algun-alias')
					->firstOrFail();


	    return \View::make("public.pricing.pricing")
	    		->with('record',$record);
	}

}