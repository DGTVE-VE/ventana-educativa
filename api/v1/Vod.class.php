<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of VodApi
 *
 * @author Israel
 */

//require 'autoload.php';
class Vod {
  public function serie($id){
    $daoSerie= DAOFactory::getSerieDAO();
    $serie = $daoSerie->load($id);
    print json_encode($serie);    
  }
  
  public function capitulosXserie ($id){
    /* @var $daoVod SerieDAO */
    $daoVod = DAOFactory::getVodDAO();
    /* @var $daoSerie SerieDAO */
    $daoSerie= DAOFactory::getSerieDAO();
    /* @var $recomendacion Serie[] */
    $serie = $daoSerie->load($id);
    $capitulos = $daoVod->queryByIdSerie($serie->idSerie);
    print json_encode($capitulos);
  }
  
  public function seriesXcategoria ($categoria){
    $dao = DAOFactory::getSerieCategoriasDAO();
    $daoSerie = DAOFactory::getSerieDAO();
    $series = $daoSerie->querySeriesInCategoria($categoria);
    
    print json_encode($series);
  }
  /**
   * Obtiene las categorías que pertenecen a una categoría padre.
   * 
   * @param Integer $idPadre Llave primaria de la categoría padre
   */
  public function categoriasXpadre ($idPadre){
    $dao = DAOFactory::getCategoriasDAO();
    $categorias = $dao->queryByCategoriaPadre($idPadre);
    print json_encode($categorias);
  }
  
  public function seriesXcategoriasXpadre ($idPadre){
    $dao = DAOFactory::getCategoriasDAO();
    $categorias = $dao->queryByCategoriaPadre($idPadre);
    
    foreach ($categorias as $categoria){
      $daoSerie = DAOFactory::getSerieDAO();
      $series = $daoSerie->querySeriesInCategoria($categoria->categoria);      
      $categoria->series = $series;
    }
    
    print json_encode($categorias);
  }
}
