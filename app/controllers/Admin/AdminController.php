<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 19:17
 */
namespace app\controllers\Admin;
use app\controllers\Controller;
use app\models\Image;

class AdminController extends Controller
{
    public function home(){

        return $this->view('admin/home');
    }

    public function images(){
        $images = (new Image())->get();
        return $this->view('admin/images/images',compact('images'));
    }

    public function remove_image($id){
        $image = (new Image())->where("id",$id)->delete();
        if($image){
            return $this->redirect('/admin/images');
        }
       return "err";
    }

    public function users(){

        return $this->view('admin/users/users');
    }
}