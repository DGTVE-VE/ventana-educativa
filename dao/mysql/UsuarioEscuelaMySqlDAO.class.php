<?php
/**
 * Class that operate on table 'usuario_escuela'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class UsuarioEscuelaMySqlDAO implements UsuarioEscuelaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UsuarioEscuelaMySql 
	 */
	public function load($idUsuario, $idEscuela){
		$sql = 'SELECT * FROM usuario_escuela WHERE id_usuario = ?  AND id_escuela = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idUsuario);
		$sqlQuery->setNumber($idEscuela);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM usuario_escuela';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM usuario_escuela ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param usuarioEscuela primary key
 	 */
	public function delete($idUsuario, $idEscuela){
		$sql = 'DELETE FROM usuario_escuela WHERE id_usuario = ?  AND id_escuela = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idUsuario);
		$sqlQuery->setNumber($idEscuela);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UsuarioEscuelaMySql usuarioEscuela
 	 */
	public function insert($usuarioEscuela){
		$sql = 'INSERT INTO usuario_escuela (inicio, fin, cursa_actualmente, titulo, fecha_creacionl, fecha_modificacion, id_usuario, id_escuela) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($usuarioEscuela->inicio);
		$sqlQuery->set($usuarioEscuela->fin);
		$sqlQuery->setNumber($usuarioEscuela->cursaActualmente);
		$sqlQuery->set($usuarioEscuela->titulo);
		$sqlQuery->set($usuarioEscuela->fechaCreacionl);
		$sqlQuery->set($usuarioEscuela->fechaModificacion);

		
		$sqlQuery->setNumber($usuarioEscuela->idUsuario);

		$sqlQuery->setNumber($usuarioEscuela->idEscuela);

		$this->executeInsert($sqlQuery);	
		//$usuarioEscuela->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UsuarioEscuelaMySql usuarioEscuela
 	 */
	public function update($usuarioEscuela){
		$sql = 'UPDATE usuario_escuela SET inicio = ?, fin = ?, cursa_actualmente = ?, titulo = ?, fecha_creacionl = ?, fecha_modificacion = ? WHERE id_usuario = ?  AND id_escuela = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($usuarioEscuela->inicio);
		$sqlQuery->set($usuarioEscuela->fin);
		$sqlQuery->setNumber($usuarioEscuela->cursaActualmente);
		$sqlQuery->set($usuarioEscuela->titulo);
		$sqlQuery->set($usuarioEscuela->fechaCreacionl);
		$sqlQuery->set($usuarioEscuela->fechaModificacion);

		
		$sqlQuery->setNumber($usuarioEscuela->idUsuario);

		$sqlQuery->setNumber($usuarioEscuela->idEscuela);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM usuario_escuela';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByInicio($value){
		$sql = 'SELECT * FROM usuario_escuela WHERE inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFin($value){
		$sql = 'SELECT * FROM usuario_escuela WHERE fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCursaActualmente($value){
		$sql = 'SELECT * FROM usuario_escuela WHERE cursa_actualmente = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTitulo($value){
		$sql = 'SELECT * FROM usuario_escuela WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacionl($value){
		$sql = 'SELECT * FROM usuario_escuela WHERE fecha_creacionl = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM usuario_escuela WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByInicio($value){
		$sql = 'DELETE FROM usuario_escuela WHERE inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFin($value){
		$sql = 'DELETE FROM usuario_escuela WHERE fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCursaActualmente($value){
		$sql = 'DELETE FROM usuario_escuela WHERE cursa_actualmente = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTitulo($value){
		$sql = 'DELETE FROM usuario_escuela WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacionl($value){
		$sql = 'DELETE FROM usuario_escuela WHERE fecha_creacionl = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM usuario_escuela WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UsuarioEscuelaMySql 
	 */
	protected function readRow($row){
		$usuarioEscuela = new UsuarioEscuela();
		
		$usuarioEscuela->idUsuario = $row['id_usuario'];
		$usuarioEscuela->idEscuela = $row['id_escuela'];
		$usuarioEscuela->inicio = $row['inicio'];
		$usuarioEscuela->fin = $row['fin'];
		$usuarioEscuela->cursaActualmente = $row['cursa_actualmente'];
		$usuarioEscuela->titulo = $row['titulo'];
		$usuarioEscuela->fechaCreacionl = $row['fecha_creacionl'];
		$usuarioEscuela->fechaModificacion = $row['fecha_modificacion'];

		return $usuarioEscuela;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return UsuarioEscuelaMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>