<?php
namespace App\Model;

use App\Config\AbstractModel\AbstractModel;

class User extends AbstractModel
{
    public function __construct()
    {
        $this->connectDbb();
        
    }
}
