<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

use Zizaco\Entrust\HasRole;

class Pcustomer extends Crud implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait,HasRole;

    protected $primaryKey = 'id_pcustomer'; // !important

    protected $table = 'pcustomer';

    //protected $fillable = [];

    protected $hidden = ['password'];

    protected $attributes = [

    ];
    
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
        //
        // Title
        //
        "title"     => "Customers",
        //
        //  Rename the columns names.
        //  ["first_name" => "First Name"]
        // 
        "labels"    => ['id_pcustomer'=>'Customer ID'],
        //
        // Replace default inputs by column
        // ["first_name" => "text"] 
        // "remotemultiple","multiple","radiogroup","radios","editor","toggle","html","text", "hidden", "digit", "textarea", "password", "email","datetime","date","time","select","autocomplete","money","currency","file","document","audio","video","zip"
        //
        "inputs"    => ['status'=>'radiogroup','name'=>'addinput','flag_shpinst'=>'hidden','flag_puinst'=>'hidden','flag_mroom'=>'hidden'],
        // 
        // Choose column or columns for the FK to show
        // ["id_roles" => "name"] or ["id_roles" => ["name","status"]]
        //
        "fk_column" => ["id_agency"=>"company_name"],
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
        // Tabs
        // Allways create names of tabs with snake case for example
        // if you want Chart Report tab you will write chart_report
        // ["chart_report","permissions","settings"]
        //
        "tabs"      => [
                            "coshare"   => "Co-Share",
                            "pobox"     =>"POBOX",
                            "awb"       =>'AWB',
                            "invoices"  =>"Invoices",
                            "probshp"   =>"Prob Shipment",
        					"shopame"   =>"Shop America",
                            "pickup_inst"=>"PickUp Inst",
                            "claims"     =>"Claims",
                            "shp_inst"  =>"Shipping Inst",
        					"uniden_shp"=>"Unidentified Ship",
                            "points"    =>"Points",
                            "password"  =>"Password",
                        ],
        
        
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
        "create"    => ['id_pcustomer', 'name',  'address',  'city',  'state',  'zip',  'country',  'phone',  'phone2',  'fax',  'cellphone',  'cust_instructions',  'comments',  'email',  'company_comments',  'date_ini',  'date_end',  'date_plus',  'member_type',  'username',  'password',  'remember_token',  'remember_phrase',  'auth_code',  'rate_type',  'destination',  'shipping_instuctions',  'delivery_service',  'approved_limit',  'insurance',  'dest_zone',  'hear_about_us',  'invnotes',  'status'],
        "edit"      => [],
        "index"     => ['id_pcustomer','name','member_type','status'],
        "show"      => [],

        "not_in_create" => ["remember_token","created_at","created_by","updated_at","updated_by"],
        "not_in_edit"   => ["remember_token","created_at","created_by","updated_at","updated_by"],
        // "not_in_index"  => ["created_at","updated_at"],
        // "not_in_show"   => ["created_at","updated_at"],

        //
        // Buttons
        //

        // "btn_in_index"  => ["print","create","edit","show","delete","search"],
        // "btn_in_show"   => [],
        // "btn_in_create" => [],
        // "btn_in_edit"   => [],

        // HAS_ONE, HAS_MANY, BELONGS_TO
        // "role"      => self::BELONGS_TO,
        // 'User', 'local_key', 'parent_key')

        "relations" => []

    ];
    

   // public function getNameAttribute($value)
   // {
   //      return \Currency::format(12, 'USD');
   // }


   public function coshare($id,$record)
    {

        $class = new \PcustomerRelated;

        $records = $class->join("pcustomer","pcustomer.id_pcustomer","=","pcustomer_related.related_id_pcustomer")
                     ->select("pcustomer.id_pcustomer","pcustomer.name","pcustomer.email","pcustomer_related.status")
                     ->where("pcustomer_related.id_pcustomer",$id)
                     ->paginate(25);


        $path     = "pcustomer.tabs.coshare";
        

        return $this->customTab($id,$class,$path,$records);
    }

    
   public function pobox($id,$record)
    {
        $table     = "pobox";
        $arguments = [
            "index"        => ["id_pobox","created_at","description","status"]
        ];
        $where = ["where" => ["id_pcustomer"=>$id]];
        //id_pobox, created_at, description, status

        return $this->tab($table,$where,$arguments);
    }


    public function awb($id,$record)
    {
        $table     = "awb";
        $arguments = [
            "index"        => [ "id_awb","from_name","to_name","date","origin","destination","pieces","weight","unit"]
        ];
        $where = ["orwhere" => [
                                    "to_id_customer"  => $id,
                                    "from_id_customer"   => $id
                                ]
               ];

        return $this->tab($table,$where,$arguments);
    }

    public function invoices($id,$record)
    {
        $table     = "invoice";
        $arguments = [
            "index"        => ["id_invoice","invoicenum","date","balance","total"]
        ];
        $where = ["where" => ["id_pcustomer"=>$id]];
        //id_invoice , invoicenum, date, balance, total

        return $this->tab($table,$where,$arguments);
    }
    
    public function probshp($id,$record)
    {
        $table     = "cmb_nf_probshp";
        $arguments = [
            "index"        => ["id_cmb_nf_probshp","problem_date","carrier","tracking","status"]
        ];
        $where = ["where" => ["id_pcustomer"=>$id]];
        //id_cmb_nf_probshp, problem_date, carrier, tracking, status

        return $this->tab($table,$where,$arguments);
    }    
    
    public function shopame($id,$record)
    {
        $table     = "cmb_nf_shop";
        $arguments = [
            "index"        => ["id_cmb_nf_shop","company_name","itemname","item","price","status"]
        ];
        $where = ["where" => ["id_pcustomer"=>$id]];
        //id_cmb_nf_shop, company_name, itemname, item, price, status

        return $this->tab($table,$where,$arguments);
    }

 
    public function pickup_inst($id,$record)
    {
        $table     = "cmb_nf_pickup";
        $arguments = [
            "index"        => ["id_cmb_nf_pickup","order_num","pieces","status"]
        ];
        $where = ["where" => ["id_pcustomer"=>$id]];
        //id_cmb_nf_pickup, order_num, pieces, status

        return $this->tab($table,$where,$arguments);
    }


    public function claims($id,$record)
    {
        $table     = "cmb_nf_claims";
        $arguments = [
            "index"        => ["id_cmb_nf_claims","date_shipped","claim_note","status"]
        ];
        $where = ["where" => ["id_pcustomer"=>$id]];
        //id_awb, date_shipped, claim_note, status

        return $this->tab($table,$where,$arguments);
    }
    
    
    public function shp_inst($id,$record)
    {
        $table     = "cmb_nf_shpinst";
        $arguments = [
            "index"        => ["id_cmb_nf_shpinst","shippers_name","pickup_company","pickup_date","status"]
        ];
        $where = ["where" => ["id_pcustomer"=>$id]];
        //id_cmb_nf_shpinst , shippers_name, pickup_company, pickup_date, status

        return $this->tab($table,$where,$arguments);
    }

    public function uniden_shp($id,$record)
    {
        $table     = "cmb_nf_lost";
        $arguments = [
            "index"        => ["id_cmb_nf_lost","comments","status"]
        ];
        $where = ["where" => ["id_pcustomer"=>$id]];
        //id_cmb_points, message, status

        return $this->tab($table,$where,$arguments);
    }


    public function points($id,$record)
    {
        $table     = "cmb_points";
        $arguments = [
            "index"        => ["id_cmb_points","message","status"]
        ];
        $where = ["where" => ["id_pcustomer"=>$id]];
        //id_cmb_points, message, status

        return $this->tab($table,$where,$arguments);
    }

    public function password($id,$record)
    {
        
        return View::make('admin.pcustomer.tabs.password')
            ->with("id",$id);
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
