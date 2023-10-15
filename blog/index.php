<?php
require_once('vendor/autoload.php');

use App\database\DatabaseConnection;
use App\config\mail;
use App\model\User;

class postkm
{
    public $title;
    public function __construct($title)
    {
        echo $title;
    }
}

new postkm('This title print by construct functon <br/>');

new DatabaseConnection;
echo "<br/>";
new mail;
echo "<br/>";
new User;



