<?php

class HomeController extends \BaseController {


	public function index(){


		$contactanos = new \Contactanos();
		$class = $contactanos->_create();

	    return \View::make("public.home.home")
	    	->with("record",$class->record);
	}



}