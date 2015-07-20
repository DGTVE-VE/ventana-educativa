<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//use api\v1\Vod;
/**
 * Description of ApiController
 *
 * @author Israel
 */
class ApiController extends _BaseController{
  
  public function defaultAction() {
    $path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");    
    list($api, $version, $class, $method, $params) = explode("/", $path, 5);     
    $_SESSION['autoload_dir'] = "api/$version/";
    $class = $class . '_api';
    $api = new $class;
    call_user_func_array(array($api, $method), explode ("/",$params));    
  }
}