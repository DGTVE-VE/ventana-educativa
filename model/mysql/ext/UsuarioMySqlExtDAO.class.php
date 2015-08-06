<?php
/**
 * Class that operate on table 'usuario'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class UsuarioMySqlExtDAO extends UsuarioMySqlDAO{
    
    public function updateGoogle($idUsuario, $GoogleID) {
        
        $sql = 'UPDATE usuario SET google =? WHERE id_usuario = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idUsuario);
        $sqlQuery->setNumber($GoogleID);
        return $this->executeUpdate($sqlQuery);
    }

	
}
?>