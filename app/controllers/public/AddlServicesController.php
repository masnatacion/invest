<?php

class AddlServicesController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','addl_services')
					->firstOrFail();

		
	    return \View::make("public.addl_services.addl_services")
	    	   ->with('record',$record);
	}

}