<?php

/** Inicia la sesión */
session_start();

define('SERVER_URL', 'localhost/ventana-educativa/');


/** 
 * Carga el autoload este archivo permite la autocarga de clases
 * a la hora de que se crean objetos de cualquier clase del sistema.
 */
require_once 'autoload.php';

/**
 * Se ejecuta el Controlador Frontal
 * http://www.sitepoint.com/front-controller-pattern-1/
 */
$frontController = new SimpleFrontController();
$frontController->run();

