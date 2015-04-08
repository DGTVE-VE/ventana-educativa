<?php
/**
 * Class that operate on table 'log_eventos_usuario'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class LogEventosUsuarioMySqlDAO implements LogEventosUsuarioDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LogEventosUsuarioMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM log_eventos_usuario WHERE id_log_eventos_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM log_eventos_usuario';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM log_eventos_usuario ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param logEventosUsuario primary key
 	 */
	public function delete($id_log_eventos_usuario){
		$sql = 'DELETE FROM log_eventos_usuario WHERE id_log_eventos_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_log_eventos_usuario);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LogEventosUsuarioMySql logEventosUsuario
 	 */
	public function insert($logEventosUsuario){
		$sql = 'INSERT INTO log_eventos_usuario (id_usuario, log, tipo_evento, direccion_ip, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($logEventosUsuario->idUsuario);
		$sqlQuery->set($logEventosUsuario->log);
		$sqlQuery->set($logEventosUsuario->tipoEvento);
		$sqlQuery->set($logEventosUsuario->direccionIp);
		$sqlQuery->set($logEventosUsuario->fechaCreacion);
		$sqlQuery->set($logEventosUsuario->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$logEventosUsuario->idLogEventosUsuario = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LogEventosUsuarioMySql logEventosUsuario
 	 */
	public function update($logEventosUsuario){
		$sql = 'UPDATE log_eventos_usuario SET id_usuario = ?, log = ?, tipo_evento = ?, direccion_ip = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_log_eventos_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($logEventosUsuario->idUsuario);
		$sqlQuery->set($logEventosUsuario->log);
		$sqlQuery->set($logEventosUsuario->tipoEvento);
		$sqlQuery->set($logEventosUsuario->direccionIp);
		$sqlQuery->set($logEventosUsuario->fechaCreacion);
//		$sqlQuery->set($logEventosUsuario->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		$sqlQuery->setNumber($logEventosUsuario->idLogEventosUsuario);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM log_eventos_usuario';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdUsuario($value){
		$sql = 'SELECT * FROM log_eventos_usuario WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLog($value){
		$sql = 'SELECT * FROM log_eventos_usuario WHERE log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTipoEvento($value){
		$sql = 'SELECT * FROM log_eventos_usuario WHERE tipo_evento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDireccionIp($value){
		$sql = 'SELECT * FROM log_eventos_usuario WHERE direccion_ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM log_eventos_usuario WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM log_eventos_usuario WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdUsuario($value){
		$sql = 'DELETE FROM log_eventos_usuario WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLog($value){
		$sql = 'DELETE FROM log_eventos_usuario WHERE log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTipoEvento($value){
		$sql = 'DELETE FROM log_eventos_usuario WHERE tipo_evento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDireccionIp($value){
		$sql = 'DELETE FROM log_eventos_usuario WHERE direccion_ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM log_eventos_usuario WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM log_eventos_usuario WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LogEventosUsuarioMySql 
	 */
	protected function readRow($row){
		$logEventosUsuario = new LogEventosUsuario();
		
		$logEventosUsuario->idLogEventosUsuario = $row['id_log_eventos_usuario'];
		$logEventosUsuario->idUsuario = $row['id_usuario'];
		$logEventosUsuario->log = $row['log'];
		$logEventosUsuario->tipoEvento = $row['tipo_evento'];
		$logEventosUsuario->direccionIp = $row['direccion_ip'];
		$logEventosUsuario->fechaCreacion = $row['fecha_creacion'];
		$logEventosUsuario->fechaModificacion = $row['fecha_modificacion'];

		return $logEventosUsuario;
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
	 * @return LogEventosUsuarioMySql 
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