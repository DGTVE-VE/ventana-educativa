<?php
/**
 * Class that operate on table 'serie'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class SerieMySqlExtDAO extends SerieMySqlDAO{

    /**
     * Get Domain object by primry key
     *
     * @param String $categoria Categoria
     * @return SerieCategoriasMySql 
     */
    public function querySeriesInCategoria ($categoria){
            $sql = 'SELECT  s.id_serie, s.id_institucion, s.titulo, 
                            s.descripcion, s.thumbnail, s.tags, s.temporadas, 
                            s.calificacion, s.visible, s.fecha_creacion, 
                            s.fecha_modificacion
                    FROM 
                            serie s, serie_categorias sc
                    WHERE   s.id_serie = sc.id_serie 
                    AND     sc.categoria = ?';
            $sqlQuery = new SqlQuery($sql);		
            $sqlQuery->setString($categoria);

            return $this->getList($sqlQuery);
    }
}
?>