<?php

class SessionController extends _BaseController{
  
  public function get ($name){
    print json_encode(unserialize($_SESSION[$name]));
  }
}