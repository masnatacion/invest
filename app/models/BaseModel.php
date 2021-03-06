<?php
// doc eloquent 
// http://laraveles.com/docs/4.1/eloquent
//
class BaseModel extends \Eloquent {


	public function getEnumTable()
	{

		$table 	   = $this->getTable();
		$sql   	   = "SHOW COLUMNS FROM $table WHERE TYPE LIKE 'enum%' or TYPE LIKE 'set%'";
		$enums 	   = [];

	    $table_data= \DB::select(DB::raw($sql));

		foreach ($table_data as $column) 
			$enums[$column->Field] =  $this->getEnumValues($column->Type);

		return $enums;
	}

	public function getEnumValues($type)
	{

	  preg_match('/(enum|set)\((.*)\)$/', $type, $matches);
	  $enum = array();
	  
	  $enums = array();

	  if(isset($matches[2]))
	  {
		  foreach( explode(',', $matches[2]) as $value )
		  {

		    $v = trim( $value, "'" );
		    $enum = array_add($enum, $v, $v);
		  }

		  //fixed
		  	
			foreach ($enum as $value) {

				if(!is_array($value))
					$enums[] = $value;
			}
	  }


	  return $enums;
	}

//
// http://laraveles.com/docs/4.1/eloquent#accessors-and-mutators
//	
	public function setPasswordAttribute($value)
	{
		$this->attributes["password"] = \Hash::make($value);
	}


	
}