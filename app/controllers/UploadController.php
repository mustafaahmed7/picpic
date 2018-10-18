<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 19:26
 */

namespace app\controllers;


use app\models\Image;

class UploadController extends Controller
{
    public function upload(){
        return $this->view('upload/upload');
    }

    public function uploadPost($file,$file_size){
        $target_dir = "uploads";
        $target_file = basename($file);
        $img_format = strrchr($target_file,".");
        $path = $this->random().$img_format;
        move_uploaded_file($file_size,"$target_dir/$path");

        $image = (new Image())->insert([
            'path'=> $path,
            'created_at'=>date("Y-m-d h:i:sa"),
            'updated_at'=>date("Y-m-d h:i:sa"),
            'user_id'=>1
        ]);
        if($image){
            echo"ok";
        }else{
            echo"err";
        }
        return $this->redirect('/upload');
    }

    private function random(){
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $charsLength = strlen($characters) -1;
        $string = "";
        for($i=0; $i<10; $i++){
            $randNum = mt_rand(0, $charsLength);
            $string .= $characters[$randNum];
        }
        return $string;
    }
}