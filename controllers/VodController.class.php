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
//    parent::validateUser ();    
    /* @var $daoSerieCategoria SerieDAO */
    $daoSerieCategoria = DAOFactory::getSerieDAO();

    /* @var $recomendacion Serie[] */
    $recomendaciones = $daoSerieCategoria->querySeriesInCategoria("Recomendaciones");

    /* @var $daoVod VodDAO */
    $daoVod = DAOFactory::getVodDAO();

    $vods = $daoVod->queryAll();
    include 'views/vod/indexView.php';
  }
}
