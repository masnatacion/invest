<?php

class CmbTermsController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','cmbterms')
					->firstOrFail();

		
	    return \View::make("public.cmbterms.cmbterms")
	    	   ->with('record',$record);
	}

}