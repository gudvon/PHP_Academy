<?php
/**
 * Created by PhpStorm.
 * User: gudvo
 * Date: 30.11.2015
 * Time: 18:39
 */
//................странны дз
//$countries = array('Ukraine' => 'Kiev', 'Russia' => 'Moscow', 'USA' => 'Washi' );
//echo '<pre>';
//print_r($countries);
//echo '<pre>';
//................странны дз
//echo '</br>';
//................массив в массиве
//$action = array(0 => 'CoD Mw1', 1 => 'CoD Mw2', 2 => 'CoD Mw3');
//$strategy = array ('TW Nap', 'TW Emp', 'TW Midle');
//$rpg = array('TES Obliv', 'TES Sky', 'TES Morow');
//$games = array ($action, $strategy, $rpg);
//echo '<pre>';
//print_r($games);
//echo '<pre>';
//................массив в массиве
//echo '</br>';
//................переменные переменных
//$hello5 = 'hello4';
//$hello4 = 'hello3';
//$hello3 = 'hello2';
//$hello2 = 'hello1';
//$hello1 = 'Hello!';
//echo $$$$$hello5;
//................переменные переменных
//echo '</br>';
//................предопределенные переменные


//...........дз - четные и не четные строки (по 68 лекцию)

//..........ДЗ - увеличить (foreach) категорию на +1, зарплату на +1.5
/*
$newarray=
[
    "Ivanov"=>
    [
        "zarplata"=>200,
        "age"=>25,
        "cattegory"=>1
    ],
    "Petrov"=>
    [
        "zarplata"=>300,
        "age"=>35,
        "cattegory"=>3
    ],
    "Sidorov"=>
    [
        "zarplata"=>250,
        "age"=>28,
        "cattegory"=>4
    ],
    "Vasnecov"=>
    [
        "zarplata"=>5000,
        "age"=>24,
        "cattegory"=>5
    ],
];
*/
//echo '<pre>';
//print_r($newarray);
//echo '<pre>';
//............................... через foreach ↓↓↓
/*
foreach ($newarray as $name => $personData)
{
    $newarray[$name]['zarplata'] *= 1.5;
    $newarray[$name]['cattegory'] += 1;
}
print_r($newarray);
//............................... через while ↓↓↓

while (list($key, $value) = each ($newarray))
{
    $newarray[$key]['zarplata'] *= 1.5;
    $newarray[$key]['cattegory'] += 1;
}
echo '<pre>';
print_r($newarray);
echo '<pre>';
//............................... через for ↓↓↓

$keys=array_keys($newarray);
$col=count($keys);
for ($i=0;$i<$col;$i++)
{
    $key=$keys[$i];
    $newarray["$key"]['zarplata']*= 1.5;
    $newarray["$key"]['cattegory']+= 1;
}
print_r($newarray);
*/


//.............................. количетсво всех елементов масива (count с учетом вложеным массивох)
//$arr=[1,2,[5,6,7,8],3];


//.............................. аналог фунции var_dump


//.............................. menu.php (добавлять нове пункты меню и выводить это меню),
// антимат в файл (отдельная страничка для редактирования)


//........ PHP 2 - c 1 по 15 (включая ДЗ)

/*
 * .................................................. Привести массив к объекту.
$a = array(
    'name' => 'John',
    'email' => 'qwerty@email.com',
    'message' => 'Hello John'
);
$b=(object)$a;
var_dump($b);
*/


class user
{
    protected $login;
    protected $pass;
    protected $email;
    protected $rating = '0';
    public function login($name)
    {
        echo $name.' is login <br>';
        $this->isLogged = true;
    }
    public function logout ($name)
    {
        echo $name.' is logout <br>';
        $this->isLogged = false;
    }
    public $isLogged;
}

$John = new user;
$John->login('John');

$Mike = new user;
$Mike->login('Mike');

$Tim = new user;
$Tim->logout('Tim');

$futureclon = new user();


class Manager extends user
{

}

$manager = new Manager();
$manager->login ('Manager');

class Admin extends user
{

}

$admin = new Admin();
$admin->login ('Admin');

class car
{
    public $brand;
    public $model;
    public $year;
    public $driver;
    public function showBrand()
    {
        echo $this->brand;
    }
    public function showModel()
    {
        echo $this->model;
    }
    private $price;
    public function getPrice($price)
    {
        if ($price = true)
        {
            $this->price = $english_format_number = number_format ($this->price, 2);
        }
        else
        {
            echo 'No price';
        }
    }
    public function setPrice()
    {
        return round($this->price, 2);
    }
}

$toyota = new car;
$toyota->brand = 'toyota';
$toyota->model = ' corolla';
$toyota->year = ' 2000';
$toyota->driver = $John;
$toyota->showBrand();
$toyota->showModel();
echo '<br>';

$mazda = new car;
$mazda->brand = 'mazda';
$mazda->model = ' 6';
$mazda->year = ' 2015';
$mazda->driver = $Mike;
$mazda->showBrand();
$mazda->showModel();
echo '<br>';

$ford = new car;
$ford->brand = 'ford';
$ford->model = ' taurus';
$ford->year = ' 1995';
$ford->driver = $Tim;
$ford->showBrand();
$ford->showModel();
echo '<br>';

//......................... ДЗ - ООП до конца, форум на ООП (класс который занимаеться получением данных из формы
// отправки коментариев и верефицирует; класс комент - метод - адд комент, метод - геткоментс, метод - шоу коментс)





/*
class postForm
{
    private $userName, $userMessage, $time;

    function __construct($array)
    {
        $this->userName = $array["userName"];
        $this->userMessage = $array["userMessage"];
        $this->time = time();
    }

    function validate()
    {

        {
            if... //валидация прошла
return true;
}

    else
        return false;
    }
}

    class Comment
{
    private static $commentsAll;
        function __construct($newMsg)
        {
            $this->userName = $array->userName;
            $this->userMessage = $array->userMessage;
            $this->time = $newMsg->time;
        }
        function addMsg(){
            //добавляем файл
            //в зависимости от того какое свойство commetsAll
        }

}

    if (isset($_POST["submit"])){
    $newMsg= new postFrom($_POST);
if ($newMsg->validate()){
    $comment= new Comment(postForm $newMsg);
}
}
}
$comment->addMsg();

//................... сделать и статическими свойства и обычными
*/