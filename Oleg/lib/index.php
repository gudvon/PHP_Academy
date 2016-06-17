<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 27.01.2016
 * Time: 19:52
 */
function __autoload($class_name){
    $class_name=strtolower($class_name);
    $file_name='lib/'.$class_name.'class.php';
    if (file_exists($file_name)){
        require $file_name;
    }else {
        die('Error');
    }
}
//spl_autoload_register('libAutoloader');
//include '/PHPMailer/PHPMailerAutoload.php';
//$mail = new PHPMailer();

$a = new Config();
$a = new Session();
