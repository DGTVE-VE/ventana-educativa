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
//        $path = preg_replace('/[^a-zA-Z0-9]/', "", $path);
   
    if (strpos($path, SimpleFrontController::$basePath) === 0) {
      $path = substr($path, strlen(SimpleFrontController::$basePath));
    }
    $params = "";
    
//    list($api, $version, $class, $method, $params) = explode("/", $path, 5);     
    $arr = explode("/", $path);
//    print_r ($arr);
    if (count($arr) > 0) {
      $api = $arr[0];
    }
    if (count($arr) > 1) {
      $version = $arr[1];
    }
    if (count($arr) > 2) {
      $class = $arr[2];
    }
    if (count($arr) > 3) {
      $method = $arr[3];
    }
    if (count($arr) > 4) {
      $params = $arr[4];
    }
//    print $api.'<br>';
//    print $version.'<br>';
//    print $class.'<br>';
//    print $method.'<br>';
//    print $params.'<br>';
    $_SESSION['autoload_dir'] = "api/$version/";
    $class = $class . '_api';
    $api = new $class;
    call_user_func_array(array($api, $method), explode ("/",$params));    
  }
}
