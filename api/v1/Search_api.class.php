<?php

/**
 * Api para realizar búsquedas en la base de datos del estilo FULL TEXT
 * 
 * @author Israel Toledo <j.israel.toledo@gmail.com>
 * @copyright (c) 2015, DGTVE
 * 
 */
class Search_api{
    
    /**
     * Realiza una búsqueda FULL TEXT en la tabla VOD. En los campos: 
     * título, sinopsis, subtitulo, tags, serie, y título traducido.
     * 
     * El texto de búsqueda lo toma primero de la URL de consulta del API. Si no 
     * existe ese parámetro, lo busca en la sesión, dónde lo pone el controlador
     * de búsqueda cuando recibe la petición. 
     * 
     * @param String $search_text
     * @return JSON Array 
     */
    public function vod ($search_text){        
        $search = "";        
        
        if (!empty($search_text)){
            $search = urldecode($search_text);
        } else if (isset ($_SESSION[SEARCH_TEXT])){
            $search = $_SESSION[SEARCH_TEXT];
        } else {
            print json_encode("");
            return;
        }
        
        $dao = DAOFactory::getVodDAO();        
        print json_encode($dao->fullTextSearch($search));
    }
}
