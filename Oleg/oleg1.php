<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 27.01.2016
 * Time: 19:12
 */
//Singleton
//.................................. ограничение создание обьекта
//..................................
//..................................
/*.................................. первый метод ↓↓↓
class Db{
    public static $count=0;

    private function __construct(){
        self::$count++;
        echo "Обьект создан ".self::$count." раз <br>";
    }
    public static function test(){
        $object = new self();
    }
}
//$a = new Db();
Db::test();
*/
//..................................
//..................................
/*.................................. второй метод (правильный) ↓↓↓
class Db{
    public static $instance=null;
    private function __construct(){
        echo 'Обьект создан<br>';
    }
    public static function getinstance(){
        if (empty(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
}
$object = Db::getinstance();
*/
//..................................
//..................................
/*
class Db{
    public static $instance=null;
    private function __construct(){
        echo 'Обьект создан<br>';
    }
   // __clone
   // __wakeup
    public static function getinstance(){
        if (empty(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function test(){
        echo "alive";
        return $this;
    }
}
Db::getinstance()->test()->test();
*/



//index.php?controller=products&action=index
//index.php?controller=pages&action=view&parem=about
