<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 17.10.2018 г.
 * Time: 18:48
 */

namespace app\controllers;


class ContactController extends Controller
{
    public function contact(){

        return $this->view('contact/contact');
    }
    public function contactPost($name,$email,$subject,$message){
        mail('devuzala@1thecity.biz',$subject,$message,'From:'.$email." Name:".$name);
        return $this->view('contact/contact');
    }
}