<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

use Zizaco\Entrust\HasRole;

class Users extends Crud implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait,HasRole;

	protected $primaryKey = 'id_users'; // !important

	protected $table = 'users';

	//protected $fillable = [];

	protected $hidden = ['password'];

	protected $attributes = [];
	
	public function __construct(array $attributes = array())
	{

	    parent::__construct($attributes);
	}

    // ===================================================================
    // EVENTS
    // ===================================================================
    //
    //  $params return array object link this
    //
    // "me"             => Access to methods of the controller. return object 'index', 'create', 'store', 'show', 'edit', 'update', 'destroy','printItem'
    // "btn"            => Enable buttons. return array "print","create","edit","show","delete","search","advance-search",
    // "fk_column"      => Column(s) of the relation. Only FK. return array ["id_roles" => "name"] ,
    // "title"          => Title of the module,
    // "class"          => Instance of the model. Return object,
    // "model"          => Model name. return string,
    // "key_name"       => Primary Key Name. return string,
    // *"key_value"     => Primary Key Value. return integer.
    // "action"         => Action in action. return string. 'index', 'create', 'store', 'show', 'edit', 'update', 'destroy','printItem',
    // *"record(s)"     => Array with all items. return object array,
    // *"validations"   => Array with the validations. for example ["email" => "required|min:10|email"]
    // *"validator"     => Validator object native of laravel. http://laravel.com/docs/4.2/validation
    // "columns"        => Details of the columns of table . return object array. is_primary, is_foreign_key, auto_increment, model, label, name, type, input, length, data, required
    // "path"           => Path ot the view. for example crud.index or users.index
    //

    public function beforeStore(&$params){}
    public function afterStore(&$params){}

    public function beforeUpdate(&$params){}
    public function afterUpdate(&$params){}

    public function beforeDestroy(&$params){}
    public function afterDestroy(&$params){}

    public function beforeIndex(&$params){}
    public function beforeCreate(&$params){}
    public function beforeEdit(&$params){}
    public function beforePrint(&$params){}

    public function beforeShow(&$params){}

    public function beforeSearch(&$params){}
    
    // ===================================================================
    // FORMAT COLUMNS
    // ===================================================================
    //
    // Example : column first_name
    // you will create a function like this: 

    // public function getFirstNameAttribute($value)
    // {
    //      return $value;
    // }



    // ===================================================================
    // CRUD
    // ===================================================================
    //

    protected $crud = [
        "title"     => "Users",
        //
        //  Rename the columns names.
        //  ["first_name" => "First Name"]
        // 
        "labels"    => [],
        //
        // Replace default inputs by column
        // ["first_name" => "text"] 
        // "remotemultiple","multiple","radiogroup","radios","editor","toggle","html","text", "hidden", "digit", "textarea", "password", "email","datetime","date","time","select","autocomplete","money","currency","file","document","audio","video","zip"
        //
        "inputs"    => [],
        // 
        // Choose column or columns for the FK to show
        // ["id_roles" => "name"] or ["id_roles" => ["name","status"]]
        //
        "fk_column" => [],
        //
        // JOINS
        // Remember by default the framework create autojoins when you define id_(table)   
        // you can get the info like this : $records->id_(table)_record
        // [ "column" => [ "table","table_column" ]            
        // [ "id_roles"  => ["roles","id_roles"] 
        // [ "id_parent" => ["current_table","id_primary_key"] 
        //        
        "joins"      => [],     
        //
        // Sort Order
        // ["first_name" => "DESC","id_agency"=>"ASC"] 
        //
        "sort_order" => [],  
        //
        // FILTER QUERIES FROM USERS COLUMNS 
        // ["id_agency"=>"agency"] column,table
        // table will be contais id_users , id_agency and his primary key
        // ["id_roles"] column
        //
        // how to works? every table that we will query this will be filter for example:
        // ["id_agency"=>"users_agency"]
        // for every table with column id_agency will be filter
        //
        // *** This feature is only from the USERS model.
        //    
        "filter_queries" => [],          
        // 
        // Tabs
        // Allways create names of tabs with snake case for example
        // if you want Chart Report tab you will write chart_report
        // ["chart_report","permissions","settings"]
        //
        "tabs"      => [],
        // 
        // Default Tabs
        // if you can change the columns and inputs you will go to model
        // for example users_notes go to app/models/UsersNotes.php
        //
        "default_tabs" => ["notes","logs"],
        //
        // Validate inputs
        // Rules by column
        // "email" => "required|min:10|email"
        //
        // http://laravel.com/docs/4.2/validation#available-validation-rules
        // 
        //
        "validations"       => [],

        // 
        // Standar Search and Advance Search
        // Write columns that you want to search.
        // By default search in columns that you see in index view
        // ["first_name","status"]
        //
        "standar_search"    => [],
        "advance_search"    => [],

        //
        // Columns enable by view
        // Default enable all columns
        //
        "create"    => [],
        "edit"      => [],
        "index"     => [],
        "show"      => [],

        "not_in_create"   => ["remember_token","last_ip","created_at","created_by","updated_at","updated_by"],
        "not_in_edit"     => ["remember_token","last_ip","created_at","created_by","updated_at"],
        "not_in_show"     => ["password","remember_token"],
        "not_in_index"    => ["id_agency","ip_mask","last_ip","password","remember_token","created_at","updated_at"],
        
        //
        // Buttons
        //

        // "btn_in_index"  => ["print","create","edit","show","delete","search"],
        // "btn_in_show"   => [],
        // "btn_in_create" => [],
        // "btn_in_edit"   => [],



    ];

    public function chart_report()
    {
        return View::make("dashboard.dashboard");
    }

	public function getAuthIdentifier()
	{
	    return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
	    return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
	    return $this->email;
	}



}