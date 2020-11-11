<?php
namespace App\Module\Router;

use App\Module\Security\Filter;

abstract class AbstractRouter
{
    protected $_sPage           = '';
    protected $_sFolder         = '';
    protected $_aParam          = array();
    protected $_aCleanedUrl     = array();

    public function __construct()
    {
        $this->_aCleanedUrl = (new Filter())->__setParameters();
    }

    protected function buildParam()
   {

        $this->_sPage = (!isset($this->_aCleanedUrl['p'])) ? 'index' : $this->_aCleanedUrl['p'];

        if (isset($this->_aCleanedUrl['p'])){
            unset($this->_aCleanedUrl[array_search($this->_aCleanedUrl['p'], $this->_aCleanedUrl)]);
        }

        $this->_aParam = $this->_aCleanedUrl;
   }

}