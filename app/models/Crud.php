<?php

class Crud extends \CrudBase {


    public function __construct($attributes = array())
    {
        parent::__construct($attributes);


        $this->default_crud["btn_in_index"]  = ["create","delete","search"];
        $this->default_crud["btn_in_show"]   = ["edit","cancel"];
        $this->default_crud["btn_in_create"] = ["create","cancel"];
        $this->default_crud["btn_in_edit"]   = ["edit","cancel"];

    }

}