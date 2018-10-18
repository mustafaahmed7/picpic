<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 16.10.2018 г.
 * Time: 15:55
 */

include_once ("./helpers/Session.php");
\helpers\Session::start_session();
define('ROOT_PATH', __DIR__);
define('MAIN_PATH',basename(dirname(__FILE__)));
include_once(ROOT_PATH."/system/autoload.php");
include_once ("routes\web.php");
