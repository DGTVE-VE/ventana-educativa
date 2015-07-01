<?php
/**
 * Class that operate on table 'opinion_vod'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class OpinionVodMySqlDAO implements OpinionVodDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return OpinionVodMySql 
	 */
	public function load($usuarioIdUsuario, $vodIdVod){
		$sql = 'SELECT * FROM opinion_vod WHERE usuario_id_usuario = ?  AND vod_id_vod = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($usuarioIdUsuario);
		$sqlQuery->setNumber($vodIdVod);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM opinion_vod';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM opinion_vod ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param opinionVod primary key
 	 */
	public function delete($usuarioIdUsuario, $vodIdVod){
		$sql = 'DELETE FROM opinion_vod WHERE usuario_id_usuario = ?  AND vod_id_vod = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($usuarioIdUsuario);
		$sqlQuery->setNumber($vodIdVod);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param OpinionVodMySql opinionVod
 	 */
	public function insert($opinionVod){
		$sql = 'INSERT INTO opinion_vod (opinion, calificacion, fecha_creacion, fecha_modificacion, usuario_id_usuario, vod_id_vod) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($opinionVod->opinion);
		$sqlQuery->setNumber($opinionVod->calificacion);
		$sqlQuery->set($opinionVod->fechaCreacion);
		$sqlQuery->set($opinionVod->fechaModificacion);

		
		$sqlQuery->setNumber($opinionVod->usuarioIdUsuario);

		$sqlQuery->setNumber($opinionVod->vodIdVod);

		$this->executeInsert($sqlQuery);	
		//$opinionVod->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param OpinionVodMySql opinionVod
 	 */
	public function update($opinionVod){
		$sql = 'UPDATE opinion_vod SET opinion = ?, calificacion = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE usuario_id_usuario = ?  AND vod_id_vod = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($opinionVod->opinion);
		$sqlQuery->setNumber($opinionVod->calificacion);
		$sqlQuery->set($opinionVod->fechaCreacion);
//		$sqlQuery->set($opinionVod->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		
		$sqlQuery->setNumber($opinionVod->usuarioIdUsuario);

		$sqlQuery->setNumber($opinionVod->vodIdVod);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM opinion_vod';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOpinion($value){
		$sql = 'SELECT * FROM opinion_vod WHERE opinion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCalificacion($value){
		$sql = 'SELECT * FROM opinion_vod WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM opinion_vod WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM opinion_vod WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOpinion($value){
		$sql = 'DELETE FROM opinion_vod WHERE opinion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCalificacion($value){
		$sql = 'DELETE FROM opinion_vod WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM opinion_vod WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM opinion_vod WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return OpinionVodMySql 
	 */
	protected function readRow($row){
		$opinionVod = new OpinionVod();
		
		$opinionVod->usuarioIdUsuario = $row['usuario_id_usuario'];
		$opinionVod->vodIdVod = $row['vod_id_vod'];
		$opinionVod->opinion = $row['opinion'];
		$opinionVod->calificacion = $row['calificacion'];
		$opinionVod->fechaCreacion = $row['fecha_creacion'];
		$opinionVod->fechaModificacion = $row['fecha_modificacion'];

		return $opinionVod;
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
	 * @return OpinionVodMySql 
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