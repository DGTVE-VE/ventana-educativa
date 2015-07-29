<?php

/**
 * Description of Vod
 *
 * @author Israel
 */
class VodController extends _BaseController{
      
  public function test (){
    include ('views/vod/testView.php');
  }

  public function serie ($id){    
    include ('views/vod/serieView.php');
  }
  
  public function youtube ($id){     
    include ('views/vod/youtubeView.php');
  }
  
  public function defaultAction (){
    include 'views/vod/indexView.php';
  }
  
  public function search (){
      include 'views/searchView.php';
  }
}
