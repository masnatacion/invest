<?php
namespace cmb;

class DashBoardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
        return \View::make("cmb.dashboard.dashboard");
	}



}