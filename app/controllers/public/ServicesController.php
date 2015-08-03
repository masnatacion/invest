<?php

class ServicesController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','services')
					->firstOrFail();

		
	    return \View::make("public.services.services")
	    	   ->with('record',$record);
	}

}