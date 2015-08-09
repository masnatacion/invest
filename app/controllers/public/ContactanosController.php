<?php

class ContactanosController extends \BaseController {


	public function index(){

		$contactus = new \Contactanos();
		$inputs    = \Input::all();

		if(empty(\Input::get('cmb_num')))
			$inputs["cmb_num"] = 0;	

		$inputs["Status"] = "New";
		
		$response  = $contactus->_create($inputs);

		if($response->isFail)
			return \Redirect::to(app('url')->previous(). '#contactanos')->withErrors($response->validator)->withInput(); // NUEVO CAMBIOS REVISAR


		\Session::flash('success', 'Tu mensaje se ha enviado correctamente');

	    return \Redirect::to(app('url')->previous(). '#contactanos'); // NUEVO CAMBIOS REVISAR
	}



}