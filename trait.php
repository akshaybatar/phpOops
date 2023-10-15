<?php
trait Log
{
    public function logger()
    {
        echo '<br/> This Logger By Trait <br/>';
    }
}

class chcke123{

    public $rt="ok";
}

class post extends chcke123
{
    use Log;

    public function store()
    {
        echo ' Post Will Be stored';
    }
    public function checklog()
    {

        $this->logger();
    }
    public function ext()
    {

       echo $this->rt;
    }
}

function check(){
    $new= new post;
    $new->store();
    $new->checklog();
    $new->ext();
}

echo check();

// this code is use trait and extends a class called multiple inhertience

