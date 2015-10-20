<?php

use Illuminate\Database\Eloquent\Model;

//use Session;

class Online extends Model {

    /**
     * {@inheritDoc}
     */
    public $table = 'sessions';

    /**
     * {@inheritDoc}
     */
    public $timestamps = false;

    /**
     * Returns all the guest users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGuests($query)
    {
        return $query->whereNull('id_users');
    }


    public function scopeAdmin($query)
    {
        $multi = Config::get('auth.multi');
        $table = $multi["admin"]["table"];

        return $query->whereNotNull('id_users')
                ->where('table',$table)
                ->where('last_activity','>=',strtotime(\Date::now()->subMinutes(15)->toDateTimeString()))
                ->with("users");
    }


    public function scopeCustomer($query)
    {   
        $multi = Config::get('auth.multi');
        $table = $multi["customer"]["table"];

        return $query->whereNotNull('id_users')
                ->where('table',$table)
                ->where('last_activity','>=',strtotime(\Date::now()->subMinutes(15)->toDateTimeString()))
                ->with("users");
    }



    /**
     * Updates the session of the current user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUpdateCurrent($query)
    {
       
        $id_users = null;
        $table    = null;

        if(\Auth::admin()->check())
        {
            $id_users = Auth::admin()->id();
            $table    = Auth::admin()->get()->getTable();

        }elseif(\Auth::customer()->check())
        {
            $id_users = Auth::customer()->id();
            $table    = Auth::customer()->get()->getTable();
        }
             
        return $query->where('id', Session::getId())->update(array(
            'id_users' => $id_users,
            'table'    => $table
        ));

    }


     /**
     * Returns the user that belongs to this entry.
     *
     * @return \Cartalyst\Sentry\Users\EloquentUser
     */
    public function users()
    {

        if(\Auth::admin()->check())
        {
            $multi = Config::get('auth.multi');
            $table = $multi["admin"]["table"];

        }elseif(\Auth::customer()->check())
        {
            $multi = Config::get('auth.multi');
            $table = $multi["customer"]["table"];
        }
        $model  = toModel($table);

        return $this->belongsTo($model,"id_".$table,"id_".$table); # Sentry 3
        // return $this->belongsTo('Cartalyst\Sentry\Users\Eloquent\User'); # Sentry 2
    }

}