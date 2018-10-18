<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 16.10.2018 г.
 * Time: 15:37
 */

namespace app\controllers;

use app\models\Image;
use app\models\User;

class HomeController extends Controller
{
    public function home(){
        $images =(new Image())->order_by_desc()->limit(0,10)->get();
        return $this->view("home/home",compact('images'));
    }
}