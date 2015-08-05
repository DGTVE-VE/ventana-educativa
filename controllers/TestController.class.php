<?php

/* 
 * Controlador para realizar pruebas
 */

class TestController {
    
    public function testFormGenerator (){
        $fg = new FormGenerator (new Administrador, 'action');
        $fg->get('dependencia')->options = array ('dep1', 'dep2', 'dep3');
        print $fg->build();
        
//        $f = new FormGenerator(new Vod, 'vod/guardar');
//        print $f->generate();
    }
}
