<?php

echo "<pre>";
$var = array(
       array ("Oleg0","Dima0","Olya0","Sveta0","Diana0"),
       array ("Oleg1","Dima1","Olya1","Sveta1","Diana1"),
       array ("Oleg2","Dima2","Olya2","Sveta2","Diana2"),
);

$var [] = "Nazar";
unset($var [4]);
$var [99999] = "Vasa";
echo count($var);

//echo implode (",", $var);

//$var = "This is test string";
//$var = strtoupper($var);
//$var = str_replace("test","good",$var);
//echo $var = strrpos ($var, "good");
//$var = "привет";
//echo mb_strlen($var);

var_dump($var);

//$var=100.19;
//$var = (int)$var;
//var_dump($var);
//    die;

//$var *= 2;
//$var *- 2;

//$var = $var %= 2;

//echo $var++;
//echo ++$var;

//var_dump($var);