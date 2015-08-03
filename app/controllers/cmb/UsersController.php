<?php
namespace cmb;

class UsersController extends \BaseController {


	public function login_ajax()
	{
		return \View::make('cmb.login.login_ajax');
	}

	public function autologin()
	{
		\Session::forget('is_related');
		$id 		= \Input::get("id");

		$pcustomer = new \Pcustomer;

		if($pcustomer->find($id))
		{
			$customer 	= \Auth::customer()->loginUsingId($id,true);
			//$customer 	= \Auth::customer()->impersonate("customer",$id,true);


			if ( ! $customer)
			    return \Redirect::intended('/cmb')->with("error","Check the username and password and try again");
			else
			{

				$related = new \PcustomerRelated;
				$is_related = $related->where("related_id_pcustomer",$id)->first();

				if($is_related)
					\Session::set('is_related', $is_related->id_pcustomer);

				return \Redirect::intended('/cmb/dashboard')->with('success', 'You have logged in successfully');
			}
				
		}
		else
			return \Redirect::intended('/cmb')->with("error","User not found");

	}

	/**
	 * [login description]
	 * @return [type]
	 */
	public function login()
	{
		if (\Auth::customer()->check())
		{
		    return \Redirect::to("dashboard");
		}
		return \View::make('admin.home.login');
	}

	/**
	 * [loginEmail description]
	 * @return [type]
	 */
	public function loginEmail()
	{
		\Session::forget('is_related');

		$data = \Input::only(["email","password"]);
		$rules = [
			"password" => "required|min:3",
			"email" => "required|min:10|email"
		];


		$validation = \Validator::make($data,$rules);

		if($validation->passes())
		{
			$credentials = ["email" => $data["email"], "password" => $data["password"]];


			if(\Auth::customer()->attempt($credentials))
			{


				$member_type =  \Auth::customer()->get()->member_type;
				$member_type = strtolower($member_type);
				$member_type = str_replace(" ", "-", $member_type);
				
				if($member_type == "gold-plus")
					$member_type = "gold gold-plus";
				
				\Session::set('member_type', $member_type);


				$id =  \Auth::customer()->id();

				$related = new \PcustomerRelated;
				$is_related = $related->where("related_id_pcustomer",$id)->first();

				if($is_related)
					\Session::set('is_related', $is_related->id_pcustomer);


				return \Redirect::intended('/cmb/dashboard')->with('success', 'You have logged in successfully');
				//return Redirect::back();
			}

			return \Redirect::back()->withInput()->with("error","Check the username and password and try again");
		}

		return \Redirect::back()->withInput()->withErrors($validation->messages());
	}


	/**
	 * [logout description]
	 * @return [type]
	 */
	public function logout()
	{
		\Session::flush();
		\Auth::customer()->logout();
		return \Redirect::to('/cmb');
	}


	public function password()
	{


		$users = \DB::table('pcustomer')->get();

		foreach(DB::table("pcustomer")->get() as $user) {
		    DB::table("pcustomer")
		        ->where("id_pcustomer", $user->id_pcustomer)
		        ->update(array("password"=>Hash::make($user->real_password)));
		}

		

	}




}