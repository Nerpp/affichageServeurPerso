<?php
namespace App\Config\Router;


class Router extends AbstractRouter{

    protected function router()
    {
        $this->pathAdmin();

        switch ($this->_sPage){

            case 'index':
               
                
                break;

            case'gestion':
               
                
                break;

            case 'userRegistration':
               
                break;

            case 'connection':
               
                break;

            default:
                $this->_sPage = '404';
                $this->_sFolder = '404';
                break;
        }
    }
}