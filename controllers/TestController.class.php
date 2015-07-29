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
}
