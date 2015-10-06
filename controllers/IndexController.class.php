<?php


class IndexController extends _BaseController{
  
  public function defaultAction() {
      if (isset($_SESSION['usuario'])){          
          header('Location: /ventana-educativa/vod');
      } else {          
          include 'views/loginView.php';
      }
  }
  
  public function closeSession() {
    session_destroy();
    header('Location: /ventana-educativa/');
  }

}
