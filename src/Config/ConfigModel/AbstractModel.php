<?php
namespace App\Config\ConfigModel;

use App\Config\Connection\ConnectionDbb;
use App\Config\ConfigModel\InterfaceModel;


class AbstractModel implements InterfaceModel
{

    protected $_rParams;
    protected $_sWhere = '';
    protected $_sSelection = '';
    protected $_sFrom = '';
    protected $_rConnectionDbb;
    
    public function __construct()
    {
        $this->_rConnectionDbb = new ConnectionDbb;

    }

    public function _setParam(){

        return $this->_rParams;
    }

    public function _getparams(array $var)
    {
        $this->_rParams = $var;
    }

    protected function beBind($value){
        
            switch ($value) {
                case is_string($value):
                    $this->_sWhere = ':'.strval($value);
                    $this->_rParam = \PDO::PARAM_STR;
                    return ;
                    break;
                
                default:
                   
                    break;
            }
    }

    public function _getBy($selection,$from,$where)
    {
        $req = $this->_rConnectionDbb->getConnection()->prepare("SELECT $selection 
        FROM $from 
        WHERE $where = :$where ");
        $this->beBind($where);
        $req->bindValue($this->_sWhere, $where, $this->_rParam);
        $req->execute();
        $resultat = $req->fetch(\PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $resultat[$where];
    }
 
}
