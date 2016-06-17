<?php


try
{
    $flag=false;
    if (!$flag) throw new Exception("Нет коннектас БД"); //........... бросили в класс пхп ексептион
    echo "Работает какой-то код...<br>";
}
catch(Exception $e) //................................................ поймали (вытянули) из класса експетион
{
    echo $e->getMessage();
    echo "<br> на строке - ".$e->getline();
    echo "<br> в файле - ".$e->getfile();
}


echo "<br>";
echo "<br>";


/*
function __autoload($name){   //............................. для вызова файла для работы (class User вынесли в
//........................................................... отдельный файл и вызываем его для работы)
    include "class.".$name.".php";
}
*/

class User
{
    public $name, $login, $mail;
    private $pass;
    function __construct($n,$l,$m,$p)
    {
        $this->name=$n;
        $this->login=$l;
        $this->mail=$m;
        $this->pass=$p;
    }
    function iterate()
    {
        foreach ($this as $n=>$v)
        {
            echo $n." : ".$v."<br>";
        }
    }
}

$user1=new User("Jackie","jackkkie","chan@mail.ru","12345");
$user1->iterate();

//foreach ($user1 as $n=>$v)..................... из глобальной области доступа к закрытым обьектам
//{
//    echo $n." : ".$v."<br>";
//}



echo "<br>";
echo "<br>";


/*
abstract class DB
{
    private $host;
    private $user;
    private $pass;
    abstract function connect($prop);
}

class dbMySQL extends DB
{
    function connect(){}
}

class Mirror extends DB{
    function Record(DB $obj){

    }
}

abstract class Gadget
{
    public $model;
    public $gms;
    public $wifi;
    abstract function call();
}

class Mobile extends Gadget
{
    public $model;
    public $gsm;
    public $wifi;
    function call()
    {
    }
}

class Phone extends Mobile
{
}

class Tablet extends Mobile
{
}
*/


interface videoCall{
    function videoCall ();
}

abstract class Gadget //.................... нельзя создать обьекты в абстрактном классе
{
    public $model;
    public $gms;
    public $wifi;
    abstract function call();
}

class Mobile extends Gadget
{
    public $model;
    public $gsm;
    public $wifi;
    function call()
    {
    }
}

class Phone extends Mobile
{
}

class Tablet extends Mobile implements videoCall
{
    function videoCall()
    {
    }
}
