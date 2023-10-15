<?php

class newClass
{

    public $name;
    public $second ;
    public function __construct($objname, $second=" second")
    {
        $this->name = $objname;
        $this->second = $second;
    }
}

$check = new newClass('this construct function passing value',' third');

echo $check->name;
echo $check->second;
