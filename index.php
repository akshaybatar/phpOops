<?php

class abc
{

    public $name = 'This is class varible name ';

    public function getName($na)
    {

        return $na;
    }

    public function new()
    {

        return $this->name;
    }

    public function setName($value)
    {

        $this->name = $value;
    }
}

$clas = new abc();

echo $clas->new();
echo "<br>";
echo $clas->name = "rewrite class variable name";
echo "<br>";
echo $clas->getName('this class funnction test');
echo "<br>";
echo $clas->getName('this is another test');
echo "<br>";

$newcar = new abc();

$newcar->setName("this is set name function which is set name value");

$rt=$newcar->new();

echo $rt;
