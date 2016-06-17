<!doctype html>
<table border='2' cellspacing='5' cellpadding='5'>

<?php
/**
 * Created by PhpStorm.
 * User: gudvo
 * Date: 02.12.2015
 * Time: 19:07
 */
//изучить if, else, elseif

//Циклы: for


//for ($i=1; $i<=50; $i++)
//{if ($i%2 ==1){echo $i." ";}}

$cols=8;
$rows=8;

    for ($i = 1; $i <= $rows; $i++)
    {
        echo "<tr>";
        $st = '';
        for ($j = 1; $j <= $rows; $j++)
        {
            echo "<td$st>";
            echo $i * $j;
            echo "</td>";
            $st = '';
        }
        echo "</tr>";
    }
echo "</table>";

echo "<br>";
echo "<br>";

//.........функция с проверкой число ли переменная или нет
function sum ($x, $y)
{
    if ((is_numeric($x)) and (is_numeric($y)))
    {
        echo $x + $y;
    }
}
sum (5,10);