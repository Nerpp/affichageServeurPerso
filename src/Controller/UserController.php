<?php
namespace App\Controller;

use App\Config\AbstractController\AbstractController;

class UserController extends AbstractController
{
    public function __construct($page,$params){
        $this->_sPage = $page;
        $this->userRegistration();
        $this->loadEntity();
        
       }
       
    protected function userRegistration(){
        
    }
}
