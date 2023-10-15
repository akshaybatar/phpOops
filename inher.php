<?php
class car
{
    // public $pub = "this is public property <br/>";
    // private $prv = "this is private property <br/>";
    // protected $protr = "this is protected property <br/>";
    public $pub;
    public $prv; // private
    protected $protr;
    public $owner;

    public function __construct($pub, $prv, $protr)
    {
        $this->pub = $pub;
        $this->prv = $prv;
        $this->protr = $protr;
    }
    public function engineType()
    {
        echo ' <br/> Diesal';
    }
    final function noOfWeels()
    {
        //final function can not be overide
        echo '<br/>' . 4;
    }

    public function access()
    {
        echo $this->pub;
        echo $this->prv;
        echo $this->protr;
        echo $this->owner;
    }
}
class audi extends car
{
    //this is sub class 
    public $owner;
    public function __construct($pub, $prv, $protr, $owner)
    {
        $this->pub = $pub;
        $this->prv = $prv;
        $this->protr = $protr;
        $this->owner = $owner;
    }

    public function engineType()
    {
        echo '<br/> Battery';
    }

    // public function noOfWeels()
    // {
    //not overiding possible
    //     echo '<br/>' . 6;
    // }
}

$audi = new audi("public ", "private ", " protected", " mhi hu");
$audi->access();
$audi->engineType();
$audi->noOfWeels();

//echo $audi;

// $test = new car();
// $test->access();


final class bmw{

    public function index(){

        echo '<br/> this is final class example final class not able to inherit in another class';
    }
}
// class nh extends bmw{
// // giving error if try to extends
// }

$fin= new bmw; // class are accessable without these bractes()

$fin->index();

