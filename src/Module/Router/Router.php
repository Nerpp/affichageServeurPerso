<?php
namespace App\Module\Router;


class Router extends AbstractRouter{

    protected function router()
    {
        $this->buildParam();

        switch ($this->_sPage){
            case 'index':
                $this->_sFolder = 'index';
                var_dump('test');
                break;

            case'gestion':
                $this->_sFolder = 'gestion';
                
                break;

            case 'registration':
                $this->_sFolder = 'registration';
                break;

            default:
                $this->_sPage = '404';
                $this->_sFolder = '404';
                break;
        }
    }
}