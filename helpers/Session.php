<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 21:10
 */

namespace helpers;


class Session
{
    public static function set_session($session_name,$session_values){
        session_start();
        $_SESSION[$session_name] = $session_values;
    }

    public static function start_session(){
        session_start();
    }
}