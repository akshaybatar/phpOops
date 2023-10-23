<?php

function hello($fun)
{

    return  $fun();  //invoke function here the hello function accept function as a parameter
}
// call back functions

echo hello(function () {
    return "hello world";
});

echo '<br/>';


$fu = function () {  // lambda function closure function
    return "pagal world";
};

echo $fu();

echo '<br/>';

// functional programming

function ArrayMap($arr, $fn)
{
    $arr2 = [];
    for ($i = 0; $i < sizeof($arr); $i++) {
        $arr2[$i] = $fn($arr[$i]);
    }
    return $arr2;
}


$arr = [1, 2, 3, 4, 5];

$userdefined = function ($item) {
    return $item + 10;
};

$rr = ArrayMap($arr, $userdefined);
echo "<pre>";
print_r($rr);
