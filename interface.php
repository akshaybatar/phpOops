<?php

interface carInterface
{
    public function startCar();
    public function stopCar();
}

class bmw implements carInterface
{

    public function startCar()
    {
        echo "<br/> BMW start";
    }
    public function stopCar()
    {
        echo "<br/> BMW stop";
    }
}

class audit implements carInterface
{

    public function startCar()
    {
        echo " <br/> Audi start";
    }
    public function stopCar()
    {
        echo "<br/> Audi stop";
    }
    public function okok()
    {
        echo 'okoko <br/>';
    }
}

function cartest(carInterface $car)
{
    $car->startCar();
    $car->stopCar();
   
    //$car->okok(); if we try to access this method it will give error because this method
    // is not register in the inside of interface 
}

$bmw = new bmw;
$audi = new audit;
$audi->okok();
cartest($audi);
cartest($bmw);
