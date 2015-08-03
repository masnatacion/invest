<?php

class ContactUsController extends \BaseController {


	public function index(){


		$contactus = new \WebContactus();
		$response  = $contactus->_show();

	    return \View::make("public.contact-us.contact-us")
	    	->with("record",$response->record);
	}

	public function store(){

		$contactus = new \WebContactus();
		$inputs    = \Input::all();

		$inputs["Status"] = "New";
		
		$response  = $contactus->_create($inputs);

		if($response->isFail)
			return \Redirect::back()->withErrors($response->validator)->withInput(); // NUEVO CAMBIOS REVISAR


	    return \View::make("public.contact-us.contact-us")
	    	->with("record",$response->record);
	}

}