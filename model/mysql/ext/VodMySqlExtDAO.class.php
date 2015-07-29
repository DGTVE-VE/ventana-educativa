<?php
/**
 * Class that operate on table 'vod'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class VodMySqlExtDAO extends VodMySqlDAO{

    public function getLastTemporadaOfSerie ($idSerie){
        $sql = 'SELECT MAX(temporada) temporada FROM vod WHERE id_serie = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($idSerie);
        
        $tab = QueryExecutor::execute($sqlQuery);
        if(count($tab)==0){
            return null;
	}
        return $tab[0]['temporada'];
    }
    
    public function fullTextSearch ($searchText){
        $sql =    "SELECT * FROM vod "
                . "WHERE MATCH (titulo, subtitulo, tags, serie, titulo_traducido) "
                . "AGAINST (?)";
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($searchText);
        return $this->getList($sqlQuery);
    }
	
}
?>