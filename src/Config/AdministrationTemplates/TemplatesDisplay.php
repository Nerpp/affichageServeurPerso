<?php
namespace App\Config\AdministrationTemplates;

use App\Config\Router\Router;


class TemplatesDisplay extends Router
{
    public function __construct()
    {
        $this->router();
    }

    public function showTemplate()
    {
        $loader = new \Twig\Loader\FilesystemLoader('templates');

        //Todo Supprimer debbug et mettre cache en TRUE pour mettre en production
        $twig = new \Twig\Environment($loader, [
            'cache' => FALSE, //'tmp',
            'debug' => true,
        ]);

        $twig->addExtension(new \Twig\Extension\DebugExtension());
        $twig->addExtension(new MesExtensions());

//        $twig->addGlobal('session', $_SESSION);
        $twig->addGlobal('current_page', $this->_sPage);

        echo $twig->render($this->_sFolder."\\".$this->_sPage.'.view.twig', $this->_aParam);
    }

}
