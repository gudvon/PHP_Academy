<?php
/**
 * Created by PhpStorm.
 * User: gudvo
 * Date: 09.12.2015
 * Time: 19:07
 */
/*function welcome()
{
    echo "Hello!<br>";
}
*/

/*
$f=false;
if ($f)
{
    function welcome()
{
        echo "Hello!<br>";
    }
}
welcome();
welcome();
welcome();
*/

/*
function foo()
{
    echo"Вызвана функция",__FUNCTION__,"<br>";
}
function welcome()
{
    echo "Hello!",__FUNCTION__,"<br>";
}
foo();
welcome();
*/

/*
define("MYCONST",100);
function welcome($name,$role)
{
    switch ($role)
    {
        case 0:$type="Гость";$st='style="font-size:20px;color:green"';break;
        case 1:$type="Moder";$st='style="font-size:24px;color:blue"';break;
        case 2:$type="Admin";$st='style="font-size:28px;color:red"';break;
        default:$type="Somebody";$st='style="font-size:18px;color:pink"';
        break;
    }
    echo "<p$st>Hello$type$name!</p>>";
    //global $name;
    $GLOBALS["name"]="Someone else";
    $name="Someone else";
    //echo "MYCONST=",MYCONST,"<br>";
}
welcome("",3);
welcome("Юра",0);
//welcome("Гена",1);
//welcome("Миша",2);
$name="John";
welcome($name, 3);
//print_r($GLOBALS);
*/

/*
function sum($a,$b){
    $res=$a+$b;
    //return $res;
}
//$newRes=sum(5,5);
function sumArray($arr)
{
    $sum=0;
    foreach ($arr as $y)
    {
        $sum+=$y;
    }
    return $sum;
}
$array=[1,2,3,4,5,6];
$sum=sumArray($array);
echo $sum;
*/
//..............................функция count ↓↓↓
/*
function newCount($arr)
{
    if (!is_array($arr)){
        echo "Требуеться масив";
        return false;
    }
    $i=0;
    foreach ($arr as $y){
        $i++;
    }
    return $i;
}
$arr=[0,1,2,3,4,5];
echo "<pre>";
echo newCount($arr);
$arr="что то";
*/

/*
$arr=[0,1,2,3,4,5];
echo "<br>";
function qwerty ($arr){
    global $arr;
    foreach ($arr as $y=>$k){
    $arr["$y"]+=1;
    }
}
print_r($arr);
*/
//..............................степень ↓↓↓
/*
function stepen($n,$st){
    $res=$n;
    for ($i=2;$i<=$st;$i++){
        $n*=$res;
    }
    return $n;
}
echo stepen(2,3);
*/
//..............................факториал (5! = 1*2*3*4*5)
/*
function factorial($n)
{
    if ($n==1) return 1;
    return $n*factorial($n-1);
}
echo factorial(5);
*/

/*
function newArr($a,$b,$c)
{
    return[$a,$b,$c];
}
$arr=newArr(1,2,3)[0];
echo $arr;
*/