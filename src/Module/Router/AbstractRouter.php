<?php
namespace App\Module\Router;

use App\Module\Security\Filter;

abstract class AbstractRouter
{
    protected $_sPage           = '';
    protected $_sFolder         = '';
    protected $_aParam          = [];
    protected $_aCleanedUrl     = [];

   


    protected function pathAdmin()
   {

        $this->_aCleanedUrl = (new Filter())->__setParameters();
   
        $this->_sPage = (!isset($this->_aCleanedUrl['p'])) ? 'index' : $this->_aCleanedUrl['p'];
        $this->_sFolder = $this->_sPage;

        // if (isset($this->_aCleanedUrl['p'])){
        //    unset($this->_aCleanedUrl[array_search($this->_aCleanedUrl['p'], $this->_aCleanedUrl)]);
   
        // }


        // $this->_aParam = $this->_aCleanedUrl;
   }

}