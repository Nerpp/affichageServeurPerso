<?php
session_start();
$directionFile = __DIR__ . "/vendor/autoload.php";
require_once $directionFile;


// TODO remettre en place les exceptions avant productions
// require_once 'src\Config\Exception\ExceptionCustom.php';
// require_once 'src\Config\Exception\Exception.php';

// pour ajouter de nouvelle classe à l\'autoload composer dump-autoload --optimize
use App\Config\AdministrationTemplates\TemplatesDisplay;
// use App\Config\Exception\ExceptionCustom;



$displayView = new TemplatesDisplay();

// try{
$displayView->showTemplate();
// }
// catch (\ErrorException $e)
// {
//     (new ExceptionCustom())->enregistrementErreur($e);
   
// }