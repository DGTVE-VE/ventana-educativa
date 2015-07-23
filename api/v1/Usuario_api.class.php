<?php

class Usuario_api {
  
  public function updateVodConsumido (){
    print 'hola';
    
  }
  
  public function login (){
      print 'llegaron a login';
      print $_POST['GoogleID'];
      print $_POST['GoogleName'];
      print $_POST['GoogleImageURL'];
      print $_POST['GoogleEmail'];                               
  }
  
  public function insert (){
      
  }
}