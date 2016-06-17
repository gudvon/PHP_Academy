<?php
/**
 * Created by PhpStorm.
 * User: gudvo
 * Date: 20.01.2016
 * Time: 19:18
 */
//................................. COOKIE



/*
//setcookie("userName", "Jack", time(t=60*60*24*685), "catalog", "poddomen.site.ua", true, true);

$visits=0;
$lastvisit="";
print_r($_COOKIE);
if (isset($_COOKIE['visits'])){
    $visits=$_COOKIE['visits'];
}
$visits++;
if (isset($_COOKIE['lastvisits'])){
    $lastvisit=$_COOKIE['lastvisits'];
}
if ((date("d-m-Y", $lastvisit))!=(date("d-m-Y"))) {
    setcookie('visits', $visits);
    setcookie('lastvisit', time());
}
if ((isset($visits)) and (isset($lastvisit))){
    echo "Вы были у нас на сайте ".$visits." раз";
    echo "<br>";
    echo "Последнее посещение - ".date("d-m-Y".$lastvisit);
}
//setcookie("visits","");   //.............. просто затрется кука
//setcookie('visits','' ,1);    //.............. удаление куки
*/
?>


<?php

$name='';
$password='';
//if($_SERVER(['REQUEST_METHOD']=='POST')){
//    header('location '.$_SERVER("PHP_SELF"));
//}

//.......................... вывод времени с посекундным обновлением страницы ↓↓↓
//header ('REFRESH: 1');
//echo date('d-m-Y H.t.s',time()+3600);

?>

<!DOCTYPE html>

<html>
<form method="POST" action ="forma.php">
    <p>Введите имя</p>
    <input tupe="text" name="name">
    <br>
    <p>Введите пароль</p>
    <input type="password" name="password">
    <input type="submit">
</form>
<pre>
    <?PHP
    session_start();
    $_SESSION["name"]=$_POST["name"];
    $_SESSION["password"]=$_POST["password"];
    print_r($_SESSION);
    print_r($_COOKIE);
    ?>
</pre>
</html>