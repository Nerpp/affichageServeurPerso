<?php
$directionFile = __DIR__ . "/vendor/autoload.php";
require_once $directionFile;

// pour ajouter de nouvelle classe à l\'autoload composer dump-autoload --optimize
use App\Config\AdministrationTemplates\TemplatesDisplay;




$displayView = new TemplatesDisplay();
$displayView->showTemplate();
