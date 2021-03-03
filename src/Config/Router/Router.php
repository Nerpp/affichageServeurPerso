<?php
namespace App\Config\Router;

// use App\Config\AbstractController\AbstractController;

use App\Config\AbstractController\AbstractController;
use App\Config\Security\Filter;
use App\Controller\UserController;



class Router {

    
    protected function router()
    {
        $this->_aCleanedUrl = (new Filter())->__setParameters();
        $this->_sPage = (!isset($this->_aCleanedUrl['p'])) ? 'index' : $this->_aCleanedUrl['p'];  
        $this->_sFolder = $this->_sPage;

        if(!empty($this->_aCleanedUrl)){
            unset($this->_aCleanedUrl[array_search($this->_aCleanedUrl['p'], $this->_aCleanedUrl)]);
            $this->_aParam = $this->_aCleanedUrl;
        }

        

        $this->test();

    }

    protected function test(){

        switch ( $this->_sPage) {
            case 'userRegistration':
                $this->_aUserRegistration = (new UserController($this->_sPage,$this->_aParam));
                break;
            
            default:
                # code...
                break;
        }
    }
}