<?php

namespace App\Config\ConfigController;



abstract class AbstractController implements InterfaceController
{
    protected $_aParams = [];
    protected $_sPage   = '';
    protected $_aErr = [];


    

    public function _setParam()
    {

        return $this->_aParams;
    }

    public function _setPage()
    {
       return $this->_sPage ;
    }

    public function _setErr()
    {
        return $this->_aErr;
    }

    protected function _getParam(array $var)
    {
        $this->_aParams  = $var;
    }
    
    protected function _getPage(string $var)
    {
         $this->_sPage = $var;
    }

    protected function _getErr(string $index,string $message)
    {
        $this->_aErr[$index] = $message;
    }

    
}
