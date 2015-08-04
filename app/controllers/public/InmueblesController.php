<?php

class InmueblesController extends \BaseController {


	public function index(){

	    return \View::make("public.inmuebles.inmuebles");
	}



}