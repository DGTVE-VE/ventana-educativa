<?php

/* 
 * Controlador para realizar pruebas
 */

class TestController {
    
    public function testFormGenerator (){
        $fg = new FormGenerator (new Administrador, 'action');
        $fg->setTipo('dependencia', 'select');
        $fg->setOptions('dependencia', array ('dep1', 'dep2', 'dep3'));
//        print $fg->generate();
        
        $f = new FormGenerator(new Vod, 'vod/guardar');
        print $f->generate();
    }
    
    /*Ejemplo para crear un controlador para ver la vista de Login*/
    public function testLogin (){
        include 'views/loginView.php';
    }
    
    public function testIndex (){
        $_SESSION[CONTENIDO_INCLUIDO] = file_get_contents('views/vod/indexView.php');
        include 'tpl/index.tpl.php';
    }
}
