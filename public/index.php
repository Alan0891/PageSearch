<?php
require "../vendor/autoload.php";
//error_reporting("~E-notice");
use src\core\core;

try{
   (new core())->Run();
}catch(ErrorException $error){
    echo $e->getMessage();
}
