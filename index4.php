<?php
/**
 * Created by PhpStorm.
 * User: gudvo
 * Date: 11.12.2015
 * Time: 18:53
 */


/*
$arr [0,1,2,3,4,[[0,1,[0,1,2],2],1,2,[0,1,2,]]];
echo"<pre>";
function myCount($arr)
{
    $i=0;
    foreach ($arr as $item)
    {
        $i++;
        if (is_array($item))
        {
            $i+=myCount($item);
        }
    }
    return $i;
}
echo myCount($arr);
echo count($arr,1);
*/


/*
echo "<pre>";
function foo ($a,$b,$c){
    return[$a,$b,$c];
}
$arr = foo(1,2,3)[0];
function newSum()
{
    echo "Переданно параметров", func_num_args();
    $arr = func_get_args();
    $sum = 0;
    foreach ($arr as %v){
    $sum += $v;
}
    return $sum;
}
$sum=newSum(1,1,1,1,1,1,1,1,1,1,1);
echo $sum;
*/


/*
//foo(1,2,3,4,5,2,1,3,5,4,15,1);
function operate(){
    $nums=func_get_args();
    $type=$nums[count($nums)-1];
    $v=$nums[count($nums)-2];
    if ($type)
    {
        foreach ($nums as $k => $item)
        {
            $nums[$k] += $v;
        }
    }
    else
    {
        foreach ($nums as $k=>$item)
        {
            $nums[$k]-=$v;
        }
    }
    return $nums;
}
echo"<pre>";
$arr=[1,2,3,4,5,2,1,3,5,4,15,1];
print_r($arr);
$arr=operate(1,2,3,4,5,2,1,3,5,4,15,1);
print_r($arr);
*/