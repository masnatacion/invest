<?php

function browser()
{
    return new \Jenssegers\Agent\Agent();
}


function is_assoc(array $array) {
  return (bool)count(array_filter(array_keys($array), 'is_string'));
}


function parseToHTML($column,$record,$fk_column)
{


    if($column->is_foreign_key)
    {

        if(count($fk_column) > 0)
        {

            $is_with_link = getFKColumn($column->name,$record,$fk_column);

            if(in_array($column->name,["created_by","updated_by","deleted_by"]))
            {

                $multi = Config::get('auth.multi');
                $table = $multi["customer"]["table"];

                $table_column = explode("_", $column->name);
                $table_column = $table_column[0];

                if($record->{$table_column."_table"} == $table)
                {
                    if($is_with_link != "---" and $is_with_link!="")
                        return HTML::link(getenv('APP_ADMIN_PREFIX')."/".$table."/".$record->{$column->name},$is_with_link) ;
                    else
                        return $is_with_link;

                }else{

                    if($is_with_link != "---" and $is_with_link!="")
                        return HTML::link(getenv('APP_ADMIN_PREFIX')."/".toTable($column->model)."/".$record->{$column->name},$is_with_link) ;
                    else
                        return $is_with_link ;
                }    


            }else{

                if($is_with_link != "---" and $is_with_link!="")
                    return HTML::link(getenv('APP_ADMIN_PREFIX')."/".toTable($column->model)."/".$record->{$column->name},$is_with_link) ;
                else
                    return $is_with_link ;

            }

        }
        else if($record->{$column->name} == 0)
            return $record->{$column->name};
        else
            return HTML::link(getenv('APP_ADMIN_PREFIX')."/".toTable($column->model)."/".$record->{$column->name},$record->{$column->name});
       
    }
    else
        return Purifier::clean($record->{$column->name});

}


function toModel($model)
{
    $model     = strtolower($model);
    $model     = str_replace(["id_","_id"], "", $model);
    $model     = ucfirst(camel_case($model));
    //$model     = str_singular($model);
    

    return $model;
}


function toTable($model)
{
    $model     = snake_case($model);
    $model     = strtolower($model);
    $model     = str_replace(["id_","_id"], "", $model);
    $model     = snake_case($model);

    return $model;
}



function getCurrentAction(){
    
    //Route::currentRouteName()
    $action = Route::current()->getActionName();
    $action = explode("@", $action);
    return $action = $action[count($action)-1];
}


function getAdminAction(){
    
    if(!\Request::is('admin*'))
        return true;
    else
        return getCurrentAction();
}


function getCurrentModel(){
    
    //Route::currentRouteName()
    $route  = Route::currentRouteName();
    $route  = explode(".", $route);
    return $action = toModel($route[count($route)-2]);
}


function getLastAction()
{
    $column     = \Request::path();
    $column     = explode("/", $column);
    return $column     = $column[count($column)-1];
}

function getFirstAction()
{
    $column     = \Request::path();
    $column     = explode("/", $column);
    return $column     = $column[0];
}


function getFKColumn($column = NULL,$default_record = [],$fk_column = [],$first = true)
{


    if(in_array($column,["created_by","updated_by","deleted_by"]))
    {

        $multi = Config::get('auth.multi');
        $table = $multi["admin"]["table"];

        $table_column = explode("_", $column);
        $table_column = $table_column[0];
        $record = null;
        
        if(!empty($default_record->{$table_column."_table"}))
        {
            if($default_record->{$table_column."_table"} != $table){
                if($first)
                    $record = $default_record->{$column."_customer_record"}()->first();
                else
                    $record = $default_record->{$column."_customer_record"};
            }else{
                if($first)
                    $record = $default_record->{$column."_record"}()->first();
                else
                    $record = $default_record->{$column."_record"};
            }

        }

        if(!$record)
            return "---";

    }elseif(isset($default_record->{$column."_record"}))
    {

        if($first)
            $record = $default_record->{$column."_record"}()->first();
        else
            $record = $default_record->{$column."_record"};

        if(!$record)
            return "---";
    }else
    {
        if(isset($default_record->{$column}))
            return $default_record->{$column};
        elseif(!is_array($default_record))
            return ;

    }
        
    return getColumnsFK($column,$record,$fk_column);

}


function getColumnsFK($column,$record,$fk_column,$primary_key = null)
{

    $fk_column_name = "";


    if(array_key_exists($column,$fk_column) and is_array($fk_column[$column]))
    {


        foreach ($fk_column[$column] as $fk_column_record) 
        {

            if(isset($record->$fk_column_record))
                $fk_column_name.= $record->{$fk_column_record}." ";

        }

    }else if(array_key_exists($column,$fk_column))
        $fk_column_name = $record->{$fk_column[$column]};
    else
    {


        if($primary_key)
            $fk_column_name = $record->{$primary_key};
        elseif(isset($record->{$column}))
            $fk_column_name = $record->{$column};
        
            
    }
        
    
        
            
    return $fk_column_name;
}


function strip_out_subdomain($domain)  {     
    $only_my_domain = preg_replace("/^(.*?)\.(.*)$/","$2",$domain);      
    return $only_my_domain;  
}

/**
 * Groups an array by a given key. Any additional keys will be used for grouping
 * the next set of sub-arrays.
 *
 * @author Jake Zatecky
 *
 * @param array $arr The array to have grouping performed on.
 * @param mixed $key The key to group or split by.
 *
 * @return array
 */
function array_group_by($arr, $key)
{
    if (!is_array($arr)) {
        trigger_error("array_group_by(): The first argument should be an array", E_USER_ERROR);
    }
    if (!is_string($key) && !is_int($key) && !is_float($key)) {
        trigger_error("array_group_by(): The key should be a string or an integer", E_USER_ERROR);
    }

    // Load the new array, splitting by the target key
    $grouped = array();
    foreach ($arr as $value) {
        $grouped[$value[$key]][] = $value;
    }

    // Recursively build a nested grouping if more parameters are supplied
    // Each grouped array value is grouped according to the next sequential key
    if (func_num_args() > 2) {
        $args = func_get_args();

        foreach ($grouped as $key => $value) {
            $parms = array_merge(array($value), array_slice($args, 2, func_num_args()));
            $grouped[$key] = call_user_func_array("array_group_by", $parms);
        }
    }

    return $grouped;
}

function in_array_field($needle, $needle_field, $haystack, $strict = false) { 
    if ($strict) { 
        foreach ($haystack as $item) 
            if (isset($item->$needle_field) && $item->$needle_field === $needle) 
                return $item; 
    } 
    else { 
        foreach ($haystack as $item) 
            if (isset($item->$needle_field) && $item->$needle_field == $needle) 
                return $item; 
    } 
    return false; 
} 


function in_array_match($regex, $array) {
    if (!is_array($array))
        trigger_error('Argument 2 must be array');
    foreach ($array as $v) {
        $match = preg_match($regex, $v);
        if ($match === 1) {
            return true;
        }
    }
    return false;
}


function _in_array_match($regex, $array) {
    $return = [];

    if (!is_array($array))
        trigger_error('Argument 2 must be array');
    foreach ($array as $v) {
        $match = preg_match($regex, $v);
        if ($match === 1) {
            $return[] = $v;
        }
    }
    return $return;
}


function str_normal($string)
{
    $string = snake_case($string);

    return ucfirst(str_replace('_',' ', $string));
}


function getFileNameInputs($inputs = [])
{
    $file = [];

    foreach ($inputs as $name => $value) {
        if (Input::hasFile($name))
            $file[] = $name;
    }
    return $file;
}



function upload($class,$record = null)
{

    $file_inputs = getFileNameInputs(\Input::all());


        if(count($file_inputs) > 0)
        {
            $destinationPath = app_path().'/storage/uploads/'; // upload path
            
            
            foreach ($file_inputs as $file) {
                if (\Input::file($file)->isValid()) {


                  

                  if(is_string($class))
                    $fileName = md5($class); // renameing image
                  else       
                    $fileName = md5($class->getTable()."|".$file."|".$record->{$class->getKeyName()}); // renameing image
                  

                  if(!str_contains($fileName,"."))
                  {
                     $extension = \Input::file($file)->getClientOriginalExtension();
                     $fileName  = $fileName.".".$extension;
                  }

                  \Input::file($file)->move($destinationPath, $fileName); // uploading file to given path

                    if($record)
                        $record->{$file} = $fileName;

                }
            }

            if($record)
                $record->save();
        }
}




function show($class,$id=null)
{
    return update($class,$id,[]);
}

function create($class,$inputs = [],$validations = [])
{
    return update($class,null,$inputs,$validations);
}

function update($class,$id = null,$inputs = [],$validations = [],$record = null)
{
    $success = false;

    if(is_string($class))
        $class   = new $class();


    if(count($inputs) == 0 and \Request::isMethod('post'))
        $inputs = \Input::all();

   
    $columns   = $class->getColumnsByView($inputs);


    $isFail   = false;
    $validator = null;

    if(count($inputs) > 0)
    {

        if(!$validations)
            $validations = $class->getValidations($columns,$id);

        $validator      = \Validator::make($inputs, $validations);
        $isFail         = $validator->fails();


        if(!$isFail)
        {
            if($id and !$record)
                $record = $class::find($id);

            if(!$record)
                $record = $class;


            $inputs = (object)$inputs;

            foreach ($columns as $column)
            {
                if(is_array($inputs->{$column->name}))
                {
                    $inputs->{$column->name} = array_filter($inputs->{$column->name});
                    $record->{$column->name} = implode(",", $inputs->{$column->name});
                }else
                    $record->{$column->name} = $inputs->{$column->name};
            }

            

            if($record->save())
            {
                $success = true;
                $file_inputs = $class->getFileNameInputs($inputs);

                $key_name    = $class->getKeyName();


                if(count($file_inputs) > 0)
                    upload($class,$record);
            }  
        }



    }else 
    {
        $success = true;
        $record = [];
        foreach ($columns as $column)
            $record[$column->name] = ""; 

        $record = (object)$record;
    }



    return (object)["success" => $success,"columns" => $columns, "record" => $record, "isFail"=> $isFail, "validator"=>$validator];
}




?>