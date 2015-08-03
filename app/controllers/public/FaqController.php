<?php

class FaqController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','faq')
					->firstOrFail();
					
		$record2 = $cms::where('status', 'Active')
					->where('alias','faq2')
					->first();
					
		$record3 = $cms::where('status', 'Active')
					->where('alias','faq3')
					->first();
		
	    return \View::make("public.faq.faq")
		    		->with('record',$record)
	    		->with('record2',$record2)
	    		->with('record3',$record3);
	}

}