<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 26/09/2015
 * Time: 09:43 AM
 */

namespace Sigesadmin\Http\Controllers;


use Sigesadmin\User;

class UserController extends Controller
{


    public function getOrm()
    {
        $users = User::first();
        dd($users->last_name);
    }


}