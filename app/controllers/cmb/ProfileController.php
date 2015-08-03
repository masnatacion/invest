<?php
namespace cmb;

class ProfileController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{


/*
Agrega Tab de coShare
Basado en la tabla pcustomer_related se mostraria una lista de los pcustomer relacionados al "master"
Ejemplo de Query:
SELECT pcustomer_related.related_id_pcustomer, Name, Email, pcustomer_related.Status FROM `pcustomer_related` 

LEFT JOIN pcustomer
ON pcustomer_related.related_id_pcustomer=pcustomer.ID_pcustomer
WHERE pcustomer_related.id_pcustomer=1

En el caso que el usuario sea un coshare, Solo se mostraria en este Tab una legenda
"You have a Co-Share Account. You cannot share your benefits with hother accounts.
*/
		$customers = [];

		if(!\Session::get('is_related'))
		{

			$id =  \Auth::customer()->id();
			$related = new \PcustomerRelated;

			$customers = $related->join("pcustomer","pcustomer.id_pcustomer","=","pcustomer_related.related_id_pcustomer")
						 ->where("pcustomer_related.id_pcustomer",$id)
						 ->select("pcustomer.id_pcustomer","pcustomer.name","pcustomer.email","pcustomer_related.status")
						 ->limit(25)
						 ->get();
		}


        return \View::make("cmb.profile.profile")
        		->with("customers",$customers);
	}

	public function personal_info()
	{
        $class       = new \Pcustomer();
        $inputs      = \Input::only(["name","email","address","city","state","zip","country","phone","fax","cellphone"]);

        $id 	     = \Auth::customer()->id();

        $columns     = $class->getColumnsByView($inputs);
        $validations = $class->getValidations($columns,$id);

        $validator = \Validator::make($inputs, $validations);


        if ($validator->fails())
			return \Redirect::back()->withErrors($validator)->withInput(); // NUEVO CAMBIOS REVISAR
        

        $record = $class->find($id);

        foreach ($inputs as $key => $value)
            $record->$key = $value;
        

        if($record->save())
        	return \Redirect::intended('/cmb/profile')->with('success', trans('crud.success-updated'));

        return \Redirect::back()->withInput()->withErrors($validator->messages());

	}

	public function password()
	{

		if(!\Input::get())
	        return \View::make("cmb.profile.password");
		

        $old_password = \Input::get("old_password");
        $password = \Input::get("password");


		\Validator::extend('passcheck', function($attribute, $value, $parameters) {
		    return \Hash::check($value, \Auth::customer()->get()->password); // Works for any form!
		});

		$messages = array(
		    'passcheck' => 'Your old password was incorrect',
		);

		$validation = \Validator::make(\Input::all(), [
		    'old_password'  => 'passcheck',
		], $messages);

		if($validation->passes())
		{
			$id = \Auth::customer()->id();
			$pcustomer = \Pcustomer::find($id);

			$pcustomer->password = $password;

			$pcustomer->save();

			return \Redirect::intended('/cmb/profile')->with('success', trans('crud.success-updated'));
		}
			


		return \Redirect::back()->withInput()->withErrors($validation->messages());

	}



	public function create_coshare()
	{

		$data = \Input::all();

		if(!$data)
			return \View::make("cmb.profile.create_coshare");
		


		$rules = [
			"name" 	  => "required|min:3",
			"address" => "required|min:10",
			"phone"   => "required|min:4",
			"email"   => "required|min:10|email",
			"image"	  => "required"
		];

		$validation = \Validator::make($data,$rules);

		if($validation->passes())
		{
		    $id   = \Auth::customer()->id();

		    $note = new \PcustomerNotes();
		    $note->id_pcustomer = $id;

		    $notes = '
				<div class="row">
					<div class="col-xs-2 text-right">
						<label>Name</label>
					</div>
					<div class="col-xs-10">
						'.\Input::get("name").'
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2 text-right">
						<label>Phone</label>
					</div>
					<div class="col-xs-10">
						'.\Input::get("email").'
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2 text-right">
						<label>Address</label>
					</div>
					<div class="col-xs-10">
						'.\Input::get("address").'
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2 text-right">
						<label>Phone</label>
					</div>
					<div class="col-xs-10">
						'.\Input::get("phone").'
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 text-right">
						<a href="./admin/pcustomer/?name='.\Input::get("name").'&email='.\Input::get("email").'&address='.\Input::get("address").'&phone='.\Input::get("phone").'" class="btn btn-primary btn-lg">ADD USER</a>
					</div>
				</div>
		    ';

		    $note->notes = $notes ;
		    $note->type = "High";

			return \Redirect::intended('/cmb/profile/coshare')->with('success', 'Your Request has been submitted, please do not Resubmit your Request');
		}


		return \Redirect::back()->withInput()->withErrors($validation->messages());

	}




	public function coshare()
	{

		if(!\Input::get())
		{
			$id =  \Auth::customer()->id();
			$related = new \PcustomerRelated;

			$customers = $related->join("pcustomer","pcustomer.id_pcustomer","=","pcustomer_related.related_id_pcustomer")
						 ->where("pcustomer_related.id_pcustomer",$id)
						 ->select("pcustomer.id_pcustomer","pcustomer.name","pcustomer.email","pcustomer_related.status")
						 ->limit(25)
						 ->get();

			return \View::make("cmb.profile.coshare")
					->with("customers",$customers);
		}

	}


	public function notifications()
	{
	    
	    return \View::make("cmb.profile.notifications");

	}

	public function boxsetup()
	{
	    
	    return \View::make("cmb.profile.boxsetup");

	}


}