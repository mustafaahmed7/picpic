<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 16.10.2018 г.
 * Time: 21:11
 */

namespace app\controllers;

use app\models\User;
use helpers\Session;

class AuthController extends Controller
{
    public function loginGet(){

        return $this->view("auth/login");
    }

    public function loginPost($email,$password){
        $_password = md5($password);
        $user =  (new User())->where('email',$email)->where('password',$_password)->get();
        if($user){
            if($user[0]['is_admin'] == true){
                Session::set_session('admin',$user);
            }else{
                Session::set_session('user',$user);
            }
            echo "ok";

        }else{
            echo "not";
        }
      return $this->redirect("/");
    }

    public function registerGet(){
        return $this->view('auth/register');
    }

    public function registerPost($username,$email,$password){
        $_password = md5($password);
        $user = (new User())->insert([
            'username'=>$username,
            'email'=>$email,
            'password'=>$_password,
            'created_at'=>date("Y-m-d h:i:sa"),
            'updated_at'=>date("Y-m-d h:i:sa"),
            'is_admin'=> false
        ]);
        if($user){
            echo "ok";
        }else{
            echo "err";
        }
        return $this->redirect('/');
    }

    public function logout(){
        session_start();
        session_destroy();
        unset($_SESSION['admin']);
        unset($_SESSION['user']);
        return $this->redirect("/");
    }
}