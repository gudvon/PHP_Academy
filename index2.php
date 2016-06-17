<?php
/**
 * Created by PhpStorm.
 * User: gudvo
 * Date: 04.12.2015
 * Time: 18:57
 */
//$nav=
//    [
//    ["url"=>"index2.php","text" =>"Home"],
//    ["url"=>"dostavka.php","text"=>"Delivery"],
//    ["url"=>"about.php","text"=>"About us"],
//    ["url"=>"contacts.php","text"=>"Contacts"],
//    ];
//error_reporting(E_ALL);
//echo "<pre>";
//echo "<pre>";
//print_r ($nav);
//echo "<ul>";
//foreach ($nav as $item){
//    echo "<li>";
//    echo "<a href={$item['url']}>{$item['text']}</a>"; //.......выводим ссылки массива $nav
//    echo "</li>";
//}
//echo "</ul>";
//echo "<pre>";
//$arr=[
//    1=>1,
//    5=>1,
//    "newkey2"=>1,
//    10=>1,
//    20=>10,
//    "newkey"=>1,
//    100=>1
//];
//$arr[]=5;
//.........................выводим сумму чисел в массиве ↓↓↓
//$sum=0;
//foreach ($arr as $y){
//    $sum+=$y;
//}
//echo $sum, "<br>";
//foreach ($arr as $k=>$y){
//    $arr["$k"]*=1.5;
//}
//print_r($arr);
//foreach($arr as &$y){
//    $y*=1.5;
//}
//print_r($arr);
//.........................замена функции foreach ↓↓↓
//$i=0;
//$j=0;
//$col=count($arr);
//$sum=0;
//while ($j<$col)
//{
//    if (array_key_exists($i,$arr))
//    {
//        //$arr["$i"]*=1.5;..................умножение всех елементов массива на 1.5
//        $sum+=$arr["$i"];
//        $j++;
//    }
//    $i++;
//}
//echo "<br>","Сумма = ",$sum;
//.........................замена функции foreach для массива из цыфр и слов ↓↓↓
//$sum=0;
//$keys=array_keys($arr);
//$col=count($keys);
//for ($i=0;$i<$col;$i++){
//    $key=$keys[$i];
//    $sum+=$arr["$key"];
//}
//echo "<br>",$sum,"<br>";
//.........................функции ↓↓↓
//function foo()
//{
//$flag=true;
//    function fooNew($user)
//    {
//        echo "Hello $user", "<br>";
//        $user="twtwtwtw";
//    }
//}
//$user="User";
//fooNew("Moderator");
//fooNew("Guest");
//echo $user;