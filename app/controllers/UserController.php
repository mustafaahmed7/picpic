<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 18:49
 */

namespace app\controllers;

use app\models\User;

class UserController extends Controller
{
    public function users(){
        $users = (new User())->where('is_admin',false)->get();
        return $this->view('users/users',compact("users"));
    }
}