<?php

class ShopAmericaController extends \BaseController {


	public function index(){

		$cms = new \CmsPages;

		$record = $cms::where('status', 'Active')
					->where('alias','shop-america')
					->firstOrFail();


	    return \View::make("public.shop-america.shop-america")
	    		->with('record',$record);
	}

}