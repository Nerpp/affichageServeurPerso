<?php
namespace App\Config\AbstractController;

use App\Config\Connection\ConnectionDbb;
use App\Env\DatabaseEnv;


class AbstractController
{
    
   protected function loadBdd(){
    $test = new ConnectionDbb;
    var_dump('test');
   }
}