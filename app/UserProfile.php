<?php namespace Sigesadmin;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {



    /*
     * retorna de la base de datos la edad de los usuarios
     */
	public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->birthday)->age;

    }

}
