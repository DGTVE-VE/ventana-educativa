<?php

class SessionController extends _BaseController{
  
  public function get ($name){
    print json_encode(unserialize($_SESSION[$name]));
  }
  
  public function close() {    
    session_destroy();
    unset($_SESSION);
    session_regenerate_id(true);
    header('Location: /ventana-educativa/');
//    print 'Sesion destruida';
  }
}