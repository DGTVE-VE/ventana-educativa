<?php
/**
 * Class that operate on table 'opinion_libro'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class OpinionLibroMySqlDAO implements OpinionLibroDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return OpinionLibroMySql 
	 */
	public function load($idLibro, $idUsuario){
		$sql = 'SELECT * FROM opinion_libro WHERE id_libro = ?  AND id_usuario = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idLibro);
		$sqlQuery->setNumber($idUsuario);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM opinion_libro';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM opinion_libro ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param opinionLibro primary key
 	 */
	public function delete($idLibro, $idUsuario){
		$sql = 'DELETE FROM opinion_libro WHERE id_libro = ?  AND id_usuario = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idLibro);
		$sqlQuery->setNumber($idUsuario);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param OpinionLibroMySql opinionLibro
 	 */
	public function insert($opinionLibro){
		$sql = 'INSERT INTO opinion_libro (opinion, calificacion, fecha_creacion, fecha_modificacion, id_libro, id_usuario) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($opinionLibro->opinion);
		$sqlQuery->setNumber($opinionLibro->calificacion);
		$sqlQuery->set($opinionLibro->fechaCreacion);
		$sqlQuery->set($opinionLibro->fechaModificacion);

		
		$sqlQuery->setNumber($opinionLibro->idLibro);

		$sqlQuery->setNumber($opinionLibro->idUsuario);

		$this->executeInsert($sqlQuery);	
		//$opinionLibro->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param OpinionLibroMySql opinionLibro
 	 */
	public function update($opinionLibro){
		$sql = 'UPDATE opinion_libro SET opinion = ?, calificacion = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_libro = ?  AND id_usuario = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($opinionLibro->opinion);
		$sqlQuery->setNumber($opinionLibro->calificacion);
		$sqlQuery->set($opinionLibro->fechaCreacion);
		$sqlQuery->set($opinionLibro->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		
		$sqlQuery->setNumber($opinionLibro->idLibro);

		$sqlQuery->setNumber($opinionLibro->idUsuario);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM opinion_libro';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByOpinion($value){
		$sql = 'SELECT * FROM opinion_libro WHERE opinion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCalificacion($value){
		$sql = 'SELECT * FROM opinion_libro WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM opinion_libro WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM opinion_libro WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByOpinion($value){
		$sql = 'DELETE FROM opinion_libro WHERE opinion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCalificacion($value){
		$sql = 'DELETE FROM opinion_libro WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM opinion_libro WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM opinion_libro WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return OpinionLibroMySql 
	 */
	protected function readRow($row){
		$opinionLibro = new OpinionLibro();
		
		$opinionLibro->idLibro = $row['id_libro'];
		$opinionLibro->idUsuario = $row['id_usuario'];
		$opinionLibro->opinion = $row['opinion'];
		$opinionLibro->calificacion = $row['calificacion'];
		$opinionLibro->fechaCreacion = $row['fecha_creacion'];
		$opinionLibro->fechaModificacion = $row['fecha_modificacion'];

		return $opinionLibro;
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
	 * @return OpinionLibroMySql 
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