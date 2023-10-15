<?php

class dest
{
    // public $pu = "public access modifer or properties";
    // private $pr = "private property";
    // protected $pt = "protected property";

    // public function detail()
    // {
    //     echo $this->pu . '<br/>';
    //     echo $this->pr . '<br/>';
    //     echo $this->pt . '<br/>';
    // }

    public function pubFn()
    {

        echo 'this is public function <br/>';

        $this->privat();
        $this->protect();
    }

    private function privat()
    {

        echo 'this is private function <br/>';
    }

    protected function protect()
    {

        echo 'this protected functioon <br/>';
    }

    public static function access()
    {

        echo "this is static function access through semicolons";
    }
}


$fn = new dest();
$fn->pubFn();

//$fn::access();
// $fn->privat();


// $rt = new dest();
// echo $rt->detail();
