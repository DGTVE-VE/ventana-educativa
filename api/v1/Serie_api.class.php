<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Serie_api {

    /*Valida si las variables de usuario, serie y calificaión no vengan vacias para poder calificar la serie*/
    private function validaVariables() {
        if (!isset($_SESSION['usuario']) || !isset($_POST['idVideo']) || !isset($_POST['calificacion']) ) {
            print 'Error en las variables';
            var_dump($_POST['idVideo']);
            var_dump($_SESSION['usuario']);
            var_dump($_SESSION['calificacion']);
            return false;
        }
        return true;
    }

    /*Función para calificar la Serie en base a las estrellas del rating */
    public function calificarSerie() {

        if (!$this->validaVariables()) {
            return;
        }
        $dao = DAOFactory::getOpinionSerieDAO();
        $idSerie = $_POST['idVideo'];
        $calificacion = $_POST['calificacion'];
        $usuario = unserialize($_SESSION['usuario']);
        $califica = $dao->load($idSerie, $usuario->idUsuario);        
        $daop = DAOFactory::getSerieDAO();
        if ($califica == null) {            
            /*Crea el registro en la tabla OpinionSerie y asigna la calificación por usuario y serie*/
            $califica = new OpinionSerie();
            $califica->fechaModificacion = date('Y-m-d H:i:s');
            $califica->idUsuario = $usuario->idUsuario;
            $califica->idSerie = $idSerie;
            $califica->calificacion = $calificacion;
            print $dao->insert($califica);
        } else {
            /*Actualiza la tabla de OpinionSerie con respeto al usuario y número de serie*/
            $califica->calificacion = $calificacion;
            print $dao->update($califica);            
        }
        /*Actualiza la calificación (Tabla Serie) de la serie en base al promedio de calificalificacion de usuario (Tabla OpinionSerie)*/
        $promedio = $daop->queryCalificaSerie($idSerie);                  
    }

}
