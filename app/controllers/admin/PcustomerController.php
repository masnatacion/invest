<?php
namespace admin;

class PcustomerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function password($id_pcustomer)
	{

		$rules = array(
		    'password'         => 'required',
		    'password_confirm' => 'required|same:password'           // required and has to match the password field
		);

		$validator = \Validator::make(\Input::all(), $rules);

        if ($validator->fails())
        	return \Redirect::to('admin/pcustomer/1/tab/password')->withErrors($validator)->withInput(); // NUEVO CAMBIOS REVISAR


        
        $pcustomer = new \Pcustomer();
        $pcustomer = $pcustomer->find($id_pcustomer);

        $pcustomer->password = \Input::get("password");

        $pcustomer->save();

        return \Redirect::to('admin/pcustomer/1/tab/password')->with('success', trans('crud.success-updated'));
	

	}







}