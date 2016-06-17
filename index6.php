<?php


class Human
{
    public static $num=0;
    public $name;
    function __construct($n)
    {
        echo ++self::$num."<br>"; //........................ self:: - это this-заменитель для static
        $this->name=$n;
    }
    static function getStat()
    {

        echo self::$num."<br>";
    }
    const MYCONST=100;
    function __clone()
    {
        echo ++self::$num."<br>";
    }
    function __destruct()
    {
        echo "<br>Обьект удален!";
    }
}


class newHuman extends Human
{
    const MYCONST=200;
}

$dima=new Human("dima");
$lena=new Human("lena");
echo "константа класса Human - ".Human::MYCONST."<br>";
echo "константа класса newHuman- ".newHuman::MYCONST."<br>";
$anton=clone $dima;
$anton->name="Anton";
echo "Имя Aнтона - ".$anton->name."<br>";
Human::getStat();

echo "<br>";
echo "<br>";


class user
{
    protected $name;
    protected $login;
    protected $pass;
    function __construct($n,$l,$p)
    {
        $this->name=$n; $this->login=$l; $this->pass=$p;
    }
    public function getUser()
    {
        echo "name = ".$this->name, "<br>login =".$this->login, "<br>pass = ".$this->pass;
    }
}
$a = new user('John','John@email.com','qwerty123');
$a->getUser();
echo'<br>';
echo'<br>';


class Moderator extends user
{
    protected $type;
    function __construct($n,$l,$p,$t)
    {
        parent::__construct($n,$l,$p);
        $this->type = $t;
    }

    function getUser()
    {
        parent::getUser();
        echo "<br>".$this->type;
    }

}
$moder= new Moderator("Olio","antoha","gandohahaha","Moder");
$moder->getUser();


class Phone{
    public $name;
    public $wifi;
    public $gsm;
    function __construct($n,$w,$g)
    {
        $this->name=$n;
        $this->wifi=$w;
        $this->gsm=$g;
    }
}

$nokia = new Phone("nokia 3250", true, true);


/*
class A
{
    public $a1;
    public $b1;
    public $c1;
    function __construct($q, $w, $e) //..............................
    {
        echo "Object created <br>";
        $this->a1=$q;
        $this->b1=$w;
        $this->c1=$e;
    }
}
*/