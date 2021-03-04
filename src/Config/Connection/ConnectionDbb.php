<?php
namespace App\Config\Connection;

use App\Config\Env\AbstractEnv;
use \PDO;

class ConnectionDbb extends AbstractEnv
{
  
        public function __invoke()
        {
            $this->configBdd();
            
            $options = [
                PDO::MYSQL_ATTR_COMPRESS => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            return new \PDO('mysql:host=' . $this->_aData['valueServeur']. ';dbname=' . $this->_aData['bddName'] . ';charset=utf8', $this->_aData['valueRoot'], $this->_aData['valueMdp'], $options);  
        }
}