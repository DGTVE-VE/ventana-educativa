<?php

spl_autoload_register('autoload');

//echo $protocol . $_SERVER['SERVER_NAME'] .":". $_SERVER['SERVER_PORT']. $_SERVER['REQUEST_URI'] . '<br>';
function autoload($class) {
//    $base_dir = $protocol . $_SERVER['SERVER_NAME'] .":". $_SERVER['SERVER_PORT'] . "/";
    $root = $_SERVER['DOCUMENT_ROOT'];
    $paths = array(
        'dao/core/',
        'dao/dao/',
        'dao/dto/',
        'dao/mysql/',
        'dao/mysql/ext/',
        'dao/sql/'
    );
    foreach ($paths as $path) {
        $file = $root ."/". $path . $class . '.class.php';        
        if (file_exists($file)){            
            include $file;
            return;
        }
    }
}
