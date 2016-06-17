<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 22.01.2016
 * Time: 19:03
 */
function __autoload($name){ //....................... проверка файла перед запуском который не описан
    require_once 'class.$name.php';
}



abstract class DB{
    abstract function connect();
    abstract function execute();
    public function quer(){

    }
}
echo '<br>';
class newDB extends DB{
    function connect(){

    }
    function execute(){

    }
}
echo '<br>';
class User{
    private $login;
    private $pass;
    public function __construct($l, $p)
    {
        $this->login=$l;
        $this->pass=$p;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($v){
        $this->login=$v;
    }
//    function iterate(){
//        foreach ($this as $p=$v){
//            echo '$p,$v <br>';
//        }
}
$u=new User('user','12345');
echo '<br>';
class Moder extends User{
    private $type;
    public function __construct($l, $p, $t)
    {
        parent::__construct($l,$p);
        $this->type=$t;
    }
}
//$r=new Moder();
echo '<br>';
class Model{
    public static function getData() {
        echo 'Write data in DB-file. <br>';
    }
    public static function loadData() {
        echo 'Check data, validate. <br>';
        static::getData();
    }
}
echo '<br>';
class newModel extends Model{
    public static function getData() {
        echo 'Write data in DB-file. <br>';
    }
}
echo '<br>';
class Human{
    const MYCONST=100;
    public $name;
    public $age;
    public static $cnt=0;
    public function __construct($n, $a)
    {
        $this->name=$n;
        $this->age=$a;
        echo "Object # ".++self::$cnt;
    }
    public function __destruct()
    {
        echo "Object deleted <br>";
    }
}
echo '<br>';
class newHuman extends Human {
    const MYCONST=200;
}
$u1=new Human('Andrew','30');
//$u1->name='Andrew';
//$u1->login='andy';
echo $u1->name;
echo Human::MYCONST;
$u2=$u1;
echo '<br>';
echo $u2->name;
$u3=clone $u1;
echo '<br>';
echo $u3->name;
$u4= new Human('User','user');

echo '<br>';
interface Backup{
    function backuping();
}

echo '<br>';
class MyClass{
    private $props=[];
    function __set($p, $v)
    {
        echo 'New property $p, $v <br>';
        $this->props[$p]=$v;
    }
    function __get($p)
    {
        echo 'Try to call property $p <br>';
        echo $this->props[$p];
    }
}
$c=new MyClass();
$c->prop=100;
echo$c->prop;