<?php

class VodConsumidoApi {
  
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