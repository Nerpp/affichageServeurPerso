<?php
namespace App\Controller;

use App\Config\ConfigController\AbstractController;
use App\Model\UserModel;

class UserRegistration extends AbstractController
{
    public function __construct($page,$params){

        $this->_getPage($page);
        $this->_getParam($params);
        $this->dbbCon = new UserModel;
        $this->userRegistration();
       }

    private function userRegistration(){
        
        if (!isset($this->_setParam()['mail'])) {
            
            $this->_getErr('mail',"Veuillez renseigner une adresse mail correcte");
           
        }

        if (!isset($this->_setParam()['pseudonyme'])) {
           
            $this->_getErr('pseudonyme',"Vous devez choisir un pseudonyme");
         }

         if (isset($this->_setParam()['pseudonyme'])) {
           
            $this->_getErr('pseudonyme',"Vous devez choisir un pseudonyme");
         }



         if (!isset($this->_setParam()['password'])) {
           
            $this->_getErr('password',"Veuillez renseigner votre mot de passe");
        }

        if (isset($this->_setParam()['password']) && strlen($this->_setParam()['password']) < 5  ) {
            
            $this->_getErr('password',"Votre mot de passe doit être superieur à 5 caractères");
        }

        if(isset($this->_setParam()['password']) && isset($this->_setParam()['passwordConfirm']) && $this->_setParam()['password'] !== $this->_setParam()['passwordConfirm'] ){
            
            $this->_getErr('passwordConfirm',"Votre mot de passe doit être confirmer");
          }


          var_dump($this->_setErr());
    }
}


    // private $_sPepper = "à completer plus tard";
    //     $pwd_peppered = hash_hmac("sha256", $value['passwordConfirm'], $this->_sPepper);
    //     $pwd_hashed = password_hash($pwd_peppered, PASSWORD_ARGON2ID);
    //    var_dump($pwd_hashed);