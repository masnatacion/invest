<?php

class AboutUSController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','aboutus')
					->firstOrFail();

		
	    return \View::make("public.about-us.about-us")
	    	   ->with('record',$record);
	}

}