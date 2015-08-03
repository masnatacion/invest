<?php
namespace cmb;

class PointsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{

        return \View::make("cmb.points.points");
	}

	public function inbox()
	{
        return \View::make("cmb.points.inbox");
	}

	public function in_transit()
	{
		return \View::make("cmb.points.in_transit");	
	}

	public function delivered()
	{
		return \View::make("cmb.points.delivered");
	}

	public function with_claim()
	{
		return \View::make("cmb.points.with_claim");
	}

	public function historic()
	{
		return \View::make("cmb.points.historic");
	}

}