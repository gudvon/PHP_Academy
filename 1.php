<?php
/**
 * Created by PhpStorm.
 * User: gudvo
 * Date: 15.01.2016
 * Time: 13:01
 */
echo "<pre>";
print_r(PDO::getAvailableDrivers());
$dbPath="mysql:host=localhost,dbname=catalog";
$dbUser="root";
$dbPass='';
$dbConnect=new PDO($dbPath,$dbUser,$dbPass);
var_dump($dbConnect);
$sql='Select * FROM items';
$stmt=$dbConnect->query($sql);
While ($result=$stmt->fetch(PDO::FETCH_ASSOC)){
    foreach ($result as $k=>$v){
        echo "<br>Поле $k".$v;
    }
}