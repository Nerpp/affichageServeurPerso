<?php
namespace App\Config\Router;

// use App\Config\AbstractController\AbstractController;

use App\Config\AbstractController\AbstractController;
use App\Config\Security\Filter;
use App\Controller\UserController;



class Router {

    protected $_aParam = [];
    protected $_sFolder = '';
    

    
    protected function urlAdmin()
    {
        $this->_aCleanedUrl = (new Filter())->__setParameters();
        $this->_sFolder = (!isset($this->_aCleanedUrl['p'])) ? 'index' : $this->_aCleanedUrl['p'];  
        
        if(!empty($this->_aCleanedUrl)){
            unset($this->_aCleanedUrl[array_search($this->_aCleanedUrl['p'], $this->_aCleanedUrl)]);
            $this->_aParam = $this->_aCleanedUrl;
        }
    }

    protected function router(){

        $this->urlAdmin();

        var_dump($this->_sFolder);

        switch ($this->_sFolder) {

            case 'index':
            
                break;

            case 'userRegistration':
                $this->_aUserRegistration = (new UserController($this->_sFolder,$this->_aParam));
                break;
            
            default:
            $this->_sFolder = '404';
                break;
        }
    }

}