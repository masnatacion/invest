<?php
namespace cmb;

class ExportController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{

        return \View::make("cmb.export.export");
	}



}