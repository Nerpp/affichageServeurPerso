<?php
namespace App\Config\Connection;

use App\Config\Env\AbstractEnv;
use App\Config\Exception\ExceptionConfig;
use \PDO;

class ConnectionDbb extends AbstractEnv
{
  
        public function test()
        {
            $this->configBdd();
            
          
            $options = [
                PDO::MYSQL_ATTR_COMPRESS => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            try { 
                return new \PDO('mysql:host=' . $this->_Data['valueServeur']. ';dbname=' . $this->_aData['bddName'] . ';charset=utf8', $this->_aData['valueRoot'], $this->_aData['valueMdp'], $options);  
            } catch (\ErrorException $e) {
                
                (new ExceptionConfig())->enregistrementErreur($e);
            }
            
        }
}