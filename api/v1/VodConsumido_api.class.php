<?php

/**
 * API de la tabla VOD_CONSUMIDO, es la tabla que almacena el tiempo de 
 * reproducción del video por usuario.
 */

class VodConsumido_api {
  
  /**
   * Revisa que las variables que necesita para guardar un progreso se encuentren 
   * en memoria.
   * - El usuario en sesión
   * - El id del video en POST 
   * - El tiempo transcurrido en POST
   * 
   * @return  boolean true si las 3 variables se encuentran disponibles, false
   *          en caso contrario.
   */
  private function validaVariables (){
    if (!isset ($_SESSION['usuario']) 
            || !isset($_POST['idVideo']) 
            || !isset($_POST['timeElapsed']) ) {
      print 'Error en las variables';
      var_dump($_POST['idVideo']);
      var_dump($_POST['timeElapsed']);
      var_dump($_SESSION['usuario']);
      return false;
    }
    return true;
  }
  
  /**
   * Actualiza la tabla VOD_CONSUMIDO con el progreso de un video por parte de un 
   * usuario.
   * Revisa si una entrada con el ID del usuario y el ID del video ya se encuentra
   * en la base de datos, si es así, actualiza ese registro, si no inserta uno nuevo, 
   * con el tiempo actualizado.
   * 
   * @return type
   */
  public function update (){
    if (!$this->validaVariables()) {
      return;
    }
    $dao = DAOFactory::getVodConsumidoDAO();    
    $idVideo = $_POST['idVideo'];    
    $tiempo = $_POST['timeElapsed'];    
    $usuario = unserialize ($_SESSION['usuario']);        
    $vodConsumido = $dao->queryByIdVodAndIdUsuario($idVideo, $usuario->idUsuario);    
    if ($vodConsumido == null){
      $vodConsumido = new VodConsumido();
      $vodConsumido->fechaModificacion = date('Y-m-d H:i:s');
      $vodConsumido->idUsuario = $usuario->idUsuario;
      $vodConsumido->idVod = $idVideo;
      $vodConsumido->tiempo = $tiempo;
      print $dao->insert($vodConsumido);      
    } else {
      $vodConsumido->tiempo = $tiempo;
      print $dao->update($vodConsumido);
    }    
  }
}