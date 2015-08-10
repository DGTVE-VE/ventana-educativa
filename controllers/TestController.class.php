<?php

/*
 * Controlador para realizar pruebas
 */

class TestController {

    public function testFormGenerator() {
        $fg = new FormGenerator(new Administrador, 'action');
        $fg->get('dependencia')->options = array('dep1', 'dep2', 'dep3');
        print $fg->build();

//        $f = new FormGenerator(new Vod, 'vod/guardar');
//        print $f->generate();
    }

    public function testConfig() {
        $array_ini = parse_ini_file("config.ini", true);
        print_r($array_ini);
        print $array_ini['database']['host'];
    }

    public function testBlur() {
        include 'views/test/testView.php';
    }
    

    
    /*Ejemplo para crear un controlador para ver la vista de Login*/
    public function testLogin (){
        include 'views/loginView.php';
    }
    
    public function testIndex (){
        $_SESSION[CONTENIDO_INCLUIDO] = file_get_contents('views/vod/serieView.php');
        include 'tpl/index.tpl.php';
    }
    
    
}
