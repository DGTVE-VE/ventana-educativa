<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Serie_api {
    
    public function calificarSerie () {
        var_dump($_POST);
        $idSerie = $_POST['idVideo'];
        $dao = DAOFactory::getSerieDAO();            
        $califica = new Serie();
        $califica = $dao->load($idSerie);
        $califica->calificacion = $_POST['calificacion'];
        $califica->idSerie = $idSerie;
        print $dao->update($califica);              
    }

    
}

