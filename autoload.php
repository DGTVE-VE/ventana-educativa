<?php

$paths = array(
    'class/',
    'model/core/',
    'model/dao/',
    'model/dto/',
    'model/mysql/',
    'model/mysql/ext/',
    'model/sql/',
    'controllers/',
);

spl_autoload_register('autoload');

function autoload($class) {
  global $paths;
  $root = $_SERVER['DOCUMENT_ROOT'];
  $file = $root . "/" . $_SESSION['autoload_dir'] . $class . '.class.php';
  if (file_exists($file)) {
    include $file;
    return;
  }
  foreach ($paths as $path) {
    $file = $root . "/" . $path . $class . '.class.php';
    if (file_exists($file)) {
      include $file;
      return;
    }
  }
}
