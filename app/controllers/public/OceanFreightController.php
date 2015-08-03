<?php

class OceanFreightController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;
		$record = $cms::where('status', 'Active')
					->where('alias','ocean-freight')
					->firstOrFail();


	    return \View::make("public.ocean-freight.ocean-freight")
	    		->with('record',$record);
	}

}