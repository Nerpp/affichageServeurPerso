<?php
$directionFile = __DIR__ . "/vendor/autoload.php";
require_once $directionFile;

require_once 'src\Config\Exception\ExceptionConfig.php';
require_once 'src\Config\Exception\Exception.php';

// pour ajouter de nouvelle classe à l\'autoload composer dump-autoload --optimize
use App\Config\AdministrationTemplates\TemplatesDisplay;
use App\Config\Exception\ExceptionConfig;



$displayView = new TemplatesDisplay();

try{
$displayView->showTemplate();
}
catch (Exception $e)
{
    (new ExceptionConfig())->enregistrementErreur($e);
   
}