<?php
/**
 * Class that operate on table 'opinion_serie'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class OpinionSerieMySqlDAO implements OpinionSerieDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return OpinionSerieMySql 
	 */
	public function load($idContenido, $idUsuario){
		$sql = 'SELECT * FROM opinion_serie WHERE id_serie = ?  AND id_usuario = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idContenido);
		$sqlQuery->setNumber($idUsuario);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM opinion_serie';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM opinion_serie ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param opinionSerie primary key
 	 */
	public function delete($idContenido, $idUsuario){
		$sql = 'DELETE FROM opinion_serie WHERE id_serie = ?  AND id_usuario = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idContenido);
		$sqlQuery->setNumber($idUsuario);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param OpinionSerieMySql opinionSerie
 	 */
	public function insert($opinionSerie){
		$sql = 'INSERT INTO opinion_serie (opinion, calificacion, fecha_creacion, fecha_modificacion, id_serie, id_usuario) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($opinionSerie->opinion);
		$sqlQuery->setNumber($opinionSerie->calificacion);
		$sqlQuery->set($opinionSerie->fechaCreacion);
		$sqlQuery->set($opinionSerie->fechaModificacion);

		
		$sqlQuery->setNumber($opinionSerie->idContenido);

		$sqlQuery->setNumber($opinionSerie->idUsuario);

		$this->executeInsert($sqlQuery);	
		//$opinionSerie->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param OpinionSerieMySql opinionSerie
 	 */
	public function update($opinionSerie){
		$sql = 'UPDATE opinion_serie SET opinion = ?, calificacion = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_serie = ?  AND id_usuario = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($opinionSerie->opinion);
		$sqlQuery->setNumber($opinionSerie->calificacion);
		$sqlQuery->set($opinionSerie->fechaCreacion);
		$sqlQuery->set($opinionSerie->fechaModificacion);

		
		$sqlQuery->setNumber($opinionSerie->idContenido);

		$sqlQuery->setNumber($opinionSerie->idUsuario);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM opinion_serie';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOpinion($value){
		$sql = 'SELECT * FROM opinion_serie WHERE opinion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCalificacion($value){
		$sql = 'SELECT * FROM opinion_serie WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM opinion_serie WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM opinion_serie WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOpinion($value){
		$sql = 'DELETE FROM opinion_serie WHERE opinion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCalificacion($value){
		$sql = 'DELETE FROM opinion_serie WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM opinion_serie WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM opinion_serie WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return OpinionSerieMySql 
	 */
	protected function readRow($row){
		$opinionSerie = new OpinionSerie();
		
		$opinionSerie->idContenido = $row['id_serie'];
		$opinionSerie->idUsuario = $row['id_usuario'];
		$opinionSerie->opinion = $row['opinion'];
		$opinionSerie->calificacion = $row['calificacion'];
		$opinionSerie->fechaCreacion = $row['fecha_creacion'];
		$opinionSerie->fechaModificacion = $row['fecha_modificacion'];

		return $opinionSerie;
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
	 * @return OpinionSerieMySql 
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