<?php
class trying
{
    public static $msg="This is static property <br/>";

    public static function getAge(){
        return 10 . '<br/>';
    }

    // calling static function inside class using self keyword and resolution operator

    public static function gtName()
    {
        return "User Ok hai! ". self::getAge() . 'and msg ' .self::$msg; // calling static function
    }
}

class post {
    public static function userPost(){
        return 'user posts :'. trying::gtName(); // get static metod of another class in another class
    }
}

class rtm extends trying{

    public static function another(){
        return 'using parent method :'. parent::gtName(); // get static metod of another class using parent

    }
}
//echo trying::gtName();

echo post::userPost();

echo rtm::another();

echo trying::$msg;  // calling static property