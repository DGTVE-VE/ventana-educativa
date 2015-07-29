<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Serie_api {

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

    public function calificarSerie() {

        if (!$this->validaVariables()) {
            return;
        }
        $dao = DAOFactory::getOpinionSerieDAO();
        $idSerie = $_POST['idVideo'];
        $calificacion = $_POST['calificacion'];
        $usuario = unserialize($_SESSION['usuario']);
        $califica = $dao->load($idSerie, $usuario->idUsuario);        
        
        if ($califica == null) {            
            $califica = new OpinionSerie();
            $califica->fechaModificacion = date('Y-m-d H:i:s');
            $califica->idUsuario = $usuario->idUsuario;
            $califica->idSerie = $idSerie;
            $califica->calificacion = $calificacion;
            print $dao->insert($califica);
        } else {
            $califica->calificacion = $calificacion;
            print $dao->update($califica);
        }
    }

}
