<?php
session_start();

require_once 'autoload.php';

$frontController = new SimpleFrontController();
$frontController->run();

