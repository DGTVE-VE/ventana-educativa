<?php
/**
 * Class that operate on table 'vod_consumido'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class VodConsumidoMySqlDAO implements VodConsumidoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return VodConsumidoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM vod_consumido WHERE id_vod_consumido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM vod_consumido';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM vod_consumido ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param vodConsumido primary key
 	 */
	public function delete($id_vod_consumido){
		$sql = 'DELETE FROM vod_consumido WHERE id_vod_consumido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_vod_consumido);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param VodConsumidoMySql vodConsumido
 	 */
	public function insert($vodConsumido){
		$sql = 'INSERT INTO vod_consumido (id_vod, id_usuario, tiempo, ip, fecha_modificacion) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($vodConsumido->idVod);
		$sqlQuery->setNumber($vodConsumido->idUsuario);
		$sqlQuery->set($vodConsumido->tiempo);
		$sqlQuery->set($vodConsumido->ip);
//		$sqlQuery->set($vodConsumido->fechaCreacion);
		$sqlQuery->set($vodConsumido->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$vodConsumido->idVodConsumido = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param VodConsumidoMySql vodConsumido
 	 */
	public function update($vodConsumido){
		$sql = 'UPDATE vod_consumido SET id_vod = ?, id_usuario = ?, tiempo = ?, ip = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_vod_consumido = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($vodConsumido->idVod);
		$sqlQuery->setNumber($vodConsumido->idUsuario);
		$sqlQuery->set($vodConsumido->tiempo);
		$sqlQuery->set($vodConsumido->ip);
		$sqlQuery->set($vodConsumido->fechaCreacion);
		$sqlQuery->set($vodConsumido->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s")); 

		$sqlQuery->setNumber($vodConsumido->idVodConsumido);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM vod_consumido';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdVod($value){
		$sql = 'SELECT * FROM vod_consumido WHERE id_vod = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdUsuario($value){
		$sql = 'SELECT * FROM vod_consumido WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTiempo($value){
		$sql = 'SELECT * FROM vod_consumido WHERE tiempo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIp($value){
		$sql = 'SELECT * FROM vod_consumido WHERE ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM vod_consumido WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM vod_consumido WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdVod($value){
		$sql = 'DELETE FROM vod_consumido WHERE id_vod = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdUsuario($value){
		$sql = 'DELETE FROM vod_consumido WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTiempo($value){
		$sql = 'DELETE FROM vod_consumido WHERE tiempo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIp($value){
		$sql = 'DELETE FROM vod_consumido WHERE ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM vod_consumido WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM vod_consumido WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return VodConsumidoMySql 
	 */
	protected function readRow($row){
		$vodConsumido = new VodConsumido();
		
		$vodConsumido->idVodConsumido = $row['id_vod_consumido'];
		$vodConsumido->idVod = $row['id_vod'];
		$vodConsumido->idUsuario = $row['id_usuario'];
		$vodConsumido->tiempo = $row['tiempo'];
		$vodConsumido->ip = $row['ip'];
		$vodConsumido->fechaCreacion = $row['fecha_creacion'];
		$vodConsumido->fechaModificacion = $row['fecha_modificacion'];

		return $vodConsumido;
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
	 * @return VodConsumidoMySql 
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