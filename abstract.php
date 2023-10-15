<?php

abstract class rat
{

    public function noOfCar()
    {

        echo "Car : 1";
    }

    abstract public function price($price);
}
// if you try to create instance or object of abstract class this will give error
// abstract class methods are only accessable by inheritence 
// here an a example of this
// here i'm declare a abstract function in rat class and define in mat class
class mat extends rat
{
   public function price($price)
   {
    echo '<br/>price : '.$price;
   }
}

$rat = new mat();
$rat->noOfCar();
$rat->price(100);
