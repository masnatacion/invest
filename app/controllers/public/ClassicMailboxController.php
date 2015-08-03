<?php

class ClassicMailboxController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','classic-mailbox')
					->firstOrFail();

		
	    return \View::make("public.classic-mailbox.classic-mailbox")
	    	   ->with('record',$record);
	}

}