<?php


class IndexController extends _BaseController{
  
  //public function login (){
    //$_SESSION['loginUrl'] = UserService::createLoginUrl('/');
    //include 'views/loginView.php';
  //}

  public function defaultAction() {
      //var_dump($_SESSION['usuario']);
      if (isset($_SESSION['usuario'])){
          include 'views/vod/indexView.php'; 
      } else {
          include 'views/loginView.php';
      }
  }

}