<?php

class RegisterController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','register')
					->firstOrFail();

		
	    return \View::make("public.register.register")
	    	   ->with('record',$record);
	}

}