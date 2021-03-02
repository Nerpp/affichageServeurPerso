<?php
namespace App\Config\Security;

class Filter
{
    private $_aParameters = [];

    public function __setParameters()
    {
        return $this->_aParameters;
    }

    

    public function __construct()
    {
        $this->listen($_SERVER['REQUEST_METHOD']);
    }


    public function listen( string $requestType){

        $args = array(
            'p'    => FILTER_SANITIZE_STRING,
        );

        switch ($requestType) {
            case 'GET':
                $this->_aParameters =  filter_input_array(INPUT_GET, $args);
                break;
            case 'POST':
                $this->_aParameters =  filter_input_array(INPUT_POST, $args);
                break;
            default:
                $this->_aInput = [];
                break;
        }
    }
  
}