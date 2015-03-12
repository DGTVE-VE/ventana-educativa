<?php

spl_autoload_register('autoload');

function autoload($class) {
    $paths = array(
        'class/core/',
        'class/dao/',
        'class/dto/',
        'class/mysql/',
        'class/mysql/ext/',
        'class/sql/'
    );
    foreach ($paths as $path) {
        $file = $path . $class . '.class.php';
        if (file_exists($file)){
            include $file;
            return;
        }
    }
}
