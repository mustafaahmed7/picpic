<?php
/**
 * Created by PhpStorm.
 * User: Mustafa
 * Date: 16.10.2018 г.
 * Time: 15:36
 */

include_once(ROOT_PATH."/system/autoload.php");
include ("Router.php");
use routes\Router;
use app\controllers\HomeController;
use app\controllers\AuthController;
use app\controllers\ImageController;
use app\controllers\ContactController;
use app\controllers\UserController;
use app\controllers\Admin\AdminController;
use app\controllers\UploadController;

$path = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router = new Router($path, $method);
$router->get('/', function(){
    (new HomeController())->home();
});

$router->get('/login', function(){
    (new AuthController())->loginGet();
});
$router->post('/login', function(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    (new AuthController())->loginPost($email,$password);
});

$router->get('/register', function(){
    (new AuthController())->registerGet();
});

$router->post('/register', function(){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    (new AuthController())->registerPost($username,$email,$password);
});
if(isset($_SESSION['admin'])) {
    $router->get('/admin', function () {
        (new AdminController())->home();
    });
    $router->get('/admin/images', function () {
        (new AdminController())->images();
    });
    $router->get('/admin/users', function () {
        (new AdminController())->users();
    });
    $router->get('/admin/images/remove/([\w]+)', function ($id) {
        (new AdminController())->remove_image($id);
    });
}

$router->get('/images',function (){
    (new ImageController())->images();
});
$router->get('/images/([\w]+)',function ($id){
    (new ImageController())->pagination($id);
});
$router->get('/contact',function (){
    (new ContactController())->contact();
});

$router->post('/contact',function (){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];
    (new ContactController())->contactPost($name,$email,$subject,$message);
});

$router->get('/users',function (){
    (new UserController())->users();
});
if(isset($_SESSION['admin']) || isset($_SESSION['user'])) {

    $router->get("/upload", function () {
        (new \app\controllers\UploadController())->upload();
    });
    $router->post("/upload", function () {
        (new UploadController())->uploadPost($_FILES["upload_file"]["name"], $_FILES["upload_file"]["tmp_name"]);
    });
}
$router->get("/logout",function (){
    (new AuthController())->logout();
});

$router->run();


