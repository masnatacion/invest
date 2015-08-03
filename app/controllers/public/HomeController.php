<?php

class HomeController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;
		$record = $cms::where('status', 'Active')
					->where('alias','home')
					->firstOrFail();
					
		$record2 = $cms::where('status', 'Active')
					->where('alias','home2')
					->first();
					
		$record3 = $cms::where('status', 'Active')
					->where('alias','home3')
					->first();


	    return \View::make("public.home.home")
	    		->with('record',$record)
	    		->with('record2',$record2)
	    		->with('record3',$record3);
	}



}