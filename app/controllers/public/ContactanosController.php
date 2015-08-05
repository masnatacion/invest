<?php

class ContactanosController extends \BaseController {


	public function index(){

		$contactanos = new \Contactanos();
		$class = $contactanos->_create();

	    return \View::make("public.contactanos.contactanos")
	    	->with("record",$class->record);
	}



}