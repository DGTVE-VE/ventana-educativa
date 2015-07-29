<?php


class IndexController extends _BaseController{
  
  //public function login (){
    //$_SESSION['loginUrl'] = UserService::createLoginUrl('/');
    //include 'views/loginView.php';
  //}

  public function defaultAction() {
      if (isset($_SESSION['usuario'])){
          include 'views/vod/indexView.php'; 
      } else {
          include 'views/loginView.php';
      }
  }
  
  public function closeSession() {
    session_destroy();
    header('Location: /');
  }

}
