<?php
//lambda function anonmous functions 
$name = "akshay";

function hello($name){

    return function($w)use($name){
         return $name.' '.$w;
    };
}

 $b= hello('ann');

echo $b('okoko');

echo '<br/>';

define('MY','this is define constant value by define function');
echo MY;

echo '<br/>';

const AB= "this is const variable value";

echo AB;