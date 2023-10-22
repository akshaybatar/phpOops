<?php
require_once('abc.php');


class bca extends abc
{
    public function index()
    {
        echo abc::ml();
        echo 'hello';
    }
}

$rr = new bca;
$rr->index();
