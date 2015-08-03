<?php
namespace cmb;

class AnalyticsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{

        return \View::make("cmb.analytics.analytics");
	}



}