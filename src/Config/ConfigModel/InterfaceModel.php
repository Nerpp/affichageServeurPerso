<?php
namespace App\Config\ConfigModel;


interface InterfaceModel
{
    public function _setParam();
    public function _getparams(array $var);
    public function _getBy($selection,$from,$where);
}