<?php
/**
 * Class that operate on table 'log_eventos_administrador'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class LogEventosAdministradorMySqlDAO implements LogEventosAdministradorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LogEventosAdministradorMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM log_eventos_administrador WHERE id_log_eventos_administrador = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM log_eventos_administrador';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM log_eventos_administrador ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param logEventosAdministrador primary key
 	 */
	public function delete($id_log_eventos_administrador){
		$sql = 'DELETE FROM log_eventos_administrador WHERE id_log_eventos_administrador = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_log_eventos_administrador);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LogEventosAdministradorMySql logEventosAdministrador
 	 */
	public function insert($logEventosAdministrador){
		$sql = 'INSERT INTO log_eventos_administrador (id_administrador, log, tipo_evento, direccion_ip, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($logEventosAdministrador->idAdministrador);
		$sqlQuery->set($logEventosAdministrador->log);
		$sqlQuery->set($logEventosAdministrador->tipoEvento);
		$sqlQuery->set($logEventosAdministrador->direccionIp);
		$sqlQuery->set($logEventosAdministrador->fechaCreacion);
		$sqlQuery->set($logEventosAdministrador->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$logEventosAdministrador->idLogEventosAdministrador = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LogEventosAdministradorMySql logEventosAdministrador
 	 */
	public function update($logEventosAdministrador){
		$sql = 'UPDATE log_eventos_administrador SET id_administrador = ?, log = ?, tipo_evento = ?, direccion_ip = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_log_eventos_administrador = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($logEventosAdministrador->idAdministrador);
		$sqlQuery->set($logEventosAdministrador->log);
		$sqlQuery->set($logEventosAdministrador->tipoEvento);
		$sqlQuery->set($logEventosAdministrador->direccionIp);
		$sqlQuery->set($logEventosAdministrador->fechaCreacion);
		$sqlQuery->set($logEventosAdministrador->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		$sqlQuery->setNumber($logEventosAdministrador->idLogEventosAdministrador);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM log_eventos_administrador';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdAdministrador($value){
		$sql = 'SELECT * FROM log_eventos_administrador WHERE id_administrador = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLog($value){
		$sql = 'SELECT * FROM log_eventos_administrador WHERE log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTipoEvento($value){
		$sql = 'SELECT * FROM log_eventos_administrador WHERE tipo_evento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDireccionIp($value){
		$sql = 'SELECT * FROM log_eventos_administrador WHERE direccion_ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM log_eventos_administrador WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM log_eventos_administrador WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdAdministrador($value){
		$sql = 'DELETE FROM log_eventos_administrador WHERE id_administrador = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLog($value){
		$sql = 'DELETE FROM log_eventos_administrador WHERE log = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTipoEvento($value){
		$sql = 'DELETE FROM log_eventos_administrador WHERE tipo_evento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDireccionIp($value){
		$sql = 'DELETE FROM log_eventos_administrador WHERE direccion_ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM log_eventos_administrador WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM log_eventos_administrador WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LogEventosAdministradorMySql 
	 */
	protected function readRow($row){
		$logEventosAdministrador = new LogEventosAdministrador();
		
		$logEventosAdministrador->idLogEventosAdministrador = $row['id_log_eventos_administrador'];
		$logEventosAdministrador->idAdministrador = $row['id_administrador'];
		$logEventosAdministrador->log = $row['log'];
		$logEventosAdministrador->tipoEvento = $row['tipo_evento'];
		$logEventosAdministrador->direccionIp = $row['direccion_ip'];
		$logEventosAdministrador->fechaCreacion = $row['fecha_creacion'];
		$logEventosAdministrador->fechaModificacion = $row['fecha_modificacion'];

		return $logEventosAdministrador;
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
	 * @return LogEventosAdministradorMySql 
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