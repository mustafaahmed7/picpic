<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 18:44
 */

namespace app\controllers;

use app\models\Image;

class ImageController extends Controller
{
    public function images()
    {
      $images = (new Image())->get();
     return $this->view("images/images",compact('images'));
    }

    public function pagination($id){
        $prev= 0;
        $next = 10;
        $temp = 1;
        if($id<=0){
            $id = 1;
        }
        if($id >  $temp){
            $prev =+ 10;
            $next =+ 10;
            $temp++;
        }else if($id <  $temp){
            $prev =- 10;
            $next =- 10;
            $temp--;
        }
        $images = (new Image())->limit($prev,$next)->get();
        return $this->view("images/images",compact('images'));
    }
}