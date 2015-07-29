<?php

/** Inicia la sesión */
session_start();

/** 
 * Carga el autoload este archivo permite la autocarga de clases
 * a la hora de que se crean objetos de cualquier clase del sistema.
 */
require_once 'autoload.php';

/**
 * Carga el archivo de constantes. Las constantes de sesión deben estar definidas
 * en este archivo.
 */
require_once 'constantes.php';

/** USUARIO DE PRUEBA, ELIMINAR EN PRODUCCIÓN*/
/*$usuario = new Usuario ();
/*$usuario->idUsuario = 1;
/*$_SESSION[USUARIO] = serialize ($usuario);

         

/**
 * Se ejecuta el Controlador Frontal
 * http://www.sitepoint.com/front-controller-pattern-1/
 */
$frontController = new SimpleFrontController();
$frontController->run();
