<?php
namespace App\Controller;

use App\Config\ConfigController\AbstractController;
use App\Model\RegistrationModel;
use App\Config\Security\FormRegistration;

final class UserRegistration extends AbstractController
{
    public function __construct(){
        $this->dbbCon = new RegistrationModel;
        $this->formRegistration = new FormRegistration;
       }

       public function _getParam(string $page, array $var)
    {
        $this->_sPage = $page;
        $this->_aParams['User']  = $var;
        $this->userRegistration();
    }

    private function userRegistration()
    {
        $this->formRegistration->__getParam($this->_aParams['User']);

        if(!empty($this->formRegistration->__setErr())){
            $this->_aParams['Err'] = $this->formRegistration->__setErr();
        }
       
        

        // if (isset($this->_aParams['pseudonyme'])) {
           
        //     $checkPseudo = $this->dbbCon->findBy('pseudonyme','user','pseudonyme');

        //     if ($checkPseudo !== null) {
        //         $this->_aErr['pseudonyme'] = "Le pseudonyme est déjà utilisè";
        //     }

          var_dump(empty($this->formRegistration->__setErr()));
          if (empty($this->_aErr) !== true && empty($this->_aParams['User'])) {
            $this->_aParams['Err'] = $this->_aErr;
            return;
          }

          $this->userRegistrationDbb();
    }

    private function userRegistrationDbb()
    {
        var_dump('test');
    }
}


    // private $_sPepper = "à completer plus tard";
    //     $pwd_peppered = hash_hmac("sha256", $value['passwordConfirm'], $this->_sPepper);
    //     $pwd_hashed = password_hash($pwd_peppered, PASSWORD_ARGON2ID);
    //    var_dump($pwd_hashed);