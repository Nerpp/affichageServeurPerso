<?php
namespace App\Model;

use App\Config\ConfigModel\AbstractModel;

final class RegistrationModel extends AbstractModel
{
    public function findBy($selection, $from, $where){

       return $this->_getBy($selection,$from,$where);
    }
  
}
