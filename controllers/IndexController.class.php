<?php


class IndexController extends _BaseController{
  
  //public function login (){
    //$_SESSION['loginUrl'] = UserService::createLoginUrl('/');
    //include 'views/loginView.php';
  //}

  public function defaultAction() {
      if (isset($_SESSION['usuario'])){          
          //header('Location: /ventana-educativa/vod');
          header('Location: http://ventana.televisioneducativa.gob.mx/ventana-educativa/');
      } else {          
          include 'views/loginView.php';
      }
  }
  
  public function closeSession() {
    session_destroy();
   // header('Location: /ventana-educativa/');
    header('Location: http://ventana.televisioneducativa.gob.mx/ventana-educativa/');
  }

}
