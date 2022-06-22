<?php

use \Twig\Environment;
use \Twig\Loader\FilesystemLoader;

class twigStarter
{
    public function __construct()
    {
        $loader = new FilesystemLoader('content/templates/default');
        $twig = new Environment($loader, [
            'cache' => 'cache',
        ]);

        echo $twig->render('index.twig', ['name' => 'Carlos']);
    }

}