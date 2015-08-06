<?php

/**
 * Controlador de administración. Altas en la Base de datos.
 * 
 */
class AdminController {
    
    /**
     * Acción para agregar un VOD. 
     * TODO Terminar el formulario.
     */
    public function newVod (){
        
        $dao = DAOFactory::getInstitucionDAO();
        $instituciones = $dao->queryAll();
        
        $opciones = array ();
        
        foreach ($instituciones as $institucion){
            $opciones[$institucion->idInstitucion] = $institucion->nombre;            
        }
//        var_dump($opciones);
        
        $fg = new FormGenerator (new Vod, 'action');
        $fg->get('idInstitucion')->options = $opciones;
        $fg->get('idInstitucion')->type = 'select';
        $fg->get('idVod')->visible = false;
        $fg->get('anioProduccion')->label = 'Año Producción';
        $fg->get('anioProduccion')->placeholder = 'Año Producción';
        $fg->get('duracion')->placeholder = 'Duración';
        
        $_SESSION[CONTENIDO] =  $fg->build();
        include 'tpl/adminTemplate.php';
    }
    
    /**
     * Acción para agregar una institución
     * TODO terminar el formulario.
     */
    public function newInstitucion (){
        $fg = new FormGenerator (new Institucion, 'action');
        $fg->get('idInstitucion')->visible = false;
        $fg->get('telefono')->label = 'Teléfono';
        $_SESSION[CONTENIDO] =  $fg->build();
        include 'tpl/adminTemplate.php';
    }
}