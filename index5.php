<?php

//....................O O П

/*
class A
{

}
$obj=new A();
if (is_object($obj)) echo "Object!";
*/


/*
class Pet
{
    public $breed;
    public $age;
    public $color;
    public $voice;
    function say()
    {
        echo "Hello!, ".$this->voice;
    }
}
class Cat extends Pet
{

}
class Dog extends Pet
{

}

$cat1 = new Cat();
$cat1->breed="Birma";
$cat1->age=5;
$cat1->color="black";
echo $cat1->breed;

$dog1=new Dog();
$dog1->breed="Deutche";
$dog1->age=10;
$dog1->color="mixed";
echo "<br>";
echo $dog1->breed;

//$dog1->voice="Gav";
//$cat1->voice="Meow";
echo "<br>";
//echo $dog1->voice;
$dog1->voice="Gav";
$cat1->voice="Meow";
echo "<br>";
$dog1->say();
echo "<br>";
$cat1->say();
if ($cat1 instanceof Cat) echo "Кошка";
echo "<br>";
if ($cat1 instanceof Pet) echo "Кошка jivotna9";
*/


/*
class B
{
    private $someProperty;  //............. доступ через наследника (class C extends B{})
}
class C extends B{}
$q=new C();
$q->someProperty=1;
*/


/*
 * ..................... присвоение обьекта только через ссылки!!!
$obj1 = new Class{};
$obj2 = $obj1;
$obj2->property=1234567890;
*/




class Phone extends Mobile
{
    protected $gsm=true;
    function getGsm() //................... геттер (из нутри класса обращаеться к методу и получает к нему доступ)
    {
        if ($this->gsm)
        {
            echo "GSM onboard";
        }
        else
        {
            echo "GSM univaliable";
        }
    }
    function setGsm($v)
    {
        $this->gsm=$v;
    }
}

$nokia = new Phone();
$nokia->sensor=false;
$nokia->g3=false;
$nokia->wifi=true;
//$nokia->gsm=true;
//$nokia->call("Some John");

class Tablet extends Mobile
{
    protected $gsm=false;
}

$sumsung=new Tablet();
$sumsung->sensor=true;
$sumsung->g3=false;
$sumsung->wifi=true;
//$sumsung->gsm=false;

class Mobile
{
    public $sensor;
    public $g3;
    public $wifi;
    protected $gsm; //.................. инкапсуляция (закрытый любой доступ)
    function call($name)
    {
        if ($this->gsm)
        {
            echo "<br>Звоню абоненту ".$name;
        }
        else
        {
            echo "<br>Пишу абоненту " . $name;
        }
    }
}

$nokia->call("Some John");
$sumsung->call("Some John");
echo "<br>";
$nokia->getGsm();
$nokia->setGsm("");
echo "<br>";
$nokia->getGsm();
echo "<br>";
