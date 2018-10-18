<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 16.10.2018 г.
 * Time: 15:47
 */

namespace app\controllers;


class Controller
{
    protected function view($file, $var = false)
    {
        is_array($var) ? extract($var) : '';
        return include(ROOT_PATH ."/app/views/".$file.".view.php");
    }

    protected function redirect($redirect){
        return header("location:$redirect");
    }
}