<?php

class newClass
{

    public $name;
    public $second;
    public function __construct($objname, $second = " second")
    {
        $this->name = $objname;
        $this->second = $second;
        echo 'constructor function called  <br />';
    }

    public function __destruct()
    {
        echo ' <br/> inside the destructor function';
    }
}

$check = new newClass('this construct function passing value', ' third');
echo 'object created <br />';
echo $check->name;
echo $check->second;
