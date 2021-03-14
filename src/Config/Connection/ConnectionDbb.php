<?php
namespace App\Config\Connection;

use App\Config\Env\AbstractEnv;
use App\Config\Exception\ExceptionCustom;
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

            try { 
                return new \PDO('mysql:host=' . $this->_aData['valueServeur']. ';dbname=' . $this->_aData['bddName'] . ';charset=utf8', $this->_aData['valueRoot'], $this->_aData['valueMdp'], $options);  
            } 
            catch (\PDOException $e) {
                
                (new ExceptionCustom())->enregistrementErreur($e);
            }
            
        }
}