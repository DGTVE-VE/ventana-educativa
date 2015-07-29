<?php


/**
 * Controlador VOD del API de ventana educativa.
 * La llamada a los métodos de este controlador se realizan de la siguiente
 * manera:
 *         api/v1/vod/{metodo}/{parametros}
 * 
 * El controlador ApiController busca la clase dentro del directorio api/{version}
 * 
 * El nombre de la clase debe tener el sufijo _api para que se distinga de las 
 * demás clases del sistema. Además el controlador ApiController busca las clases
 * con este sufijo.
 * 
 * El nombre del archivo, también debe tener el mismo sufijo: _api.class.php
 * 
 * @author Israel Toledo <j.israel.toledo@gmail.com>
 * 
 */

class Vod_api {
  /**
   * Carga una serie en base a su ID.
   * @param Integer $id ID de la serie
   */
  public function serie($id){
    $daoSerie= DAOFactory::getSerieDAO();
    $serie = $daoSerie->load($id);
    print json_encode($serie);    
  }
  /**
   * Se consulta la BD por los capítulos de una serie.   
   * 
   * @param Integer $id El id de la serie de la cual se quieren los capítulos
   */
  public function capitulosXserie ($id){
    /* @var $daoVod SerieDAO */
    $daoVod = DAOFactory::getVodDAO();    
    $capitulos = $daoVod->queryByIdSerie($id);    
    print json_encode($capitulos);
  }
  
  /**
   * Obtiene las series de una categoría
   * 
   * @param Integer $categoria id de la categoria de la cual se obtendrán las 
   *        series.
   */
  public function seriesXcategoria ($categoria){    
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
  
  /**
   * Obtiene las categorías de un padre, y posteriormente las series de cada 
   * categoría. Antes de regresar el objeto JSON le pega las series a su 
   * respectiva categoría, para que en el cliente las tengan relacionadas en el 
   * mismo objeto json.
   * 
   * @param Integer $idPadre
   */
  
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
  
  /**
   * Obtiene un capítulo del VOD, en base a su ID.
   * 
   * @param Integer $id
   */
  public function capitulo ($id){
    $dao = DAOFactory::getVodDAO();
    print json_encode($dao->load($id));
  }
  

}
