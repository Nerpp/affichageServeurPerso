<?php
namespace App\Config\AbstractModel;

use App\Config\Connection\ConnectionDbb;


class AbstractModel
{
    protected function connectDbb(){
        $req = new ConnectionDbb;

        $req->test();

        var_dump('test');
         
    }
}
