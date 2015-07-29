<?php
require_once 'autoload.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _BaseController
 *
 * @author Israel
 */
class _BaseController {

  protected $needValidation;

  public function __construct($needValidation = false) {
    $this->needValidation = $needValidation;
  }

  public function defaultAction() {
    header('HTTP/1.0 404 Not Found');
    die;
  }

  public function closeSession() {
    session_start();
    session_destroy();
    unset($_SESSION);
    session_regenerate_id(true);
    header('Location: /ventana-educativa/');
//    print 'Sesion destruida';
  }

  public function validateUser() {
    if (!isset($_SESSION['usuario'])) {
      print 'No tienes permisos para estar aqui';
      $button = new html_element('a');
      $button ->set('href', '/index/login');      
      $button ->set('text', 'Click here!');
      $button ->output();
      die;
    }
  }

}
