<?php

spl_autoload_register(function ($classname) {
    $dirs = array (
        'core/twig/',
        'core/classes/',
        'configs/'
    );

    foreach ($dirs as $dir) {
        $filename = $dir . str_replace('\\', '/', $classname) .'.php';
        if (file_exists($filename)) {
            require_once $filename;
            break;
        }
    }

});
