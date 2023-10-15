<?php
class carw
{
    const NO_OF_WEEL = "This is the Const Variable";

    public function accessvalue(){

     return  self::NO_OF_WEEL;
    }

}
// const value to able to change or reassign
$bew= new carw;
echo $bew->accessvalue();