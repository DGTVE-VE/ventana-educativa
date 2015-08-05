<?php
/**
 * Class that operate on table 'pagina'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class PaginaMySqlDAO implements PaginaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PaginaMySql 
	 */
	public function load($idPag, $idLibro){
		$sql = 'SELECT * FROM pagina WHERE id_pag = ?  AND id_libro = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idPag);
		$sqlQuery->setNumber($idLibro);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM pagina';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM pagina ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param pagina primary key
 	 */
	public function delete($idPag, $idLibro){
		$sql = 'DELETE FROM pagina WHERE id_pag = ?  AND id_libro = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idPag);
		$sqlQuery->setNumber($idLibro);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PaginaMySql pagina
 	 */
	public function insert($pagina){
		$sql = 'INSERT INTO pagina (url, numero_interno, fecha_creacion, fecha_modificacion, id_pag, id_libro) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($pagina->url);
		$sqlQuery->set($pagina->numeroInterno);
		$sqlQuery->set($pagina->fechaCreacion);
		$sqlQuery->set($pagina->fechaModificacion);

		
		$sqlQuery->setNumber($pagina->idPag);

		$sqlQuery->setNumber($pagina->idLibro);

		$this->executeInsert($sqlQuery);	
		//$pagina->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PaginaMySql pagina
 	 */
	public function update($pagina){
		$sql = 'UPDATE pagina SET url = ?, numero_interno = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_pag = ?  AND id_libro = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($pagina->url);
		$sqlQuery->set($pagina->numeroInterno);
		$sqlQuery->set($pagina->fechaCreacion);
		$sqlQuery->set($pagina->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		
		$sqlQuery->setNumber($pagina->idPag);

		$sqlQuery->setNumber($pagina->idLibro);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM pagina';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUrl($value){
		$sql = 'SELECT * FROM pagina WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNumeroInterno($value){
		$sql = 'SELECT * FROM pagina WHERE numero_interno = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM pagina WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM pagina WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUrl($value){
		$sql = 'DELETE FROM pagina WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNumeroInterno($value){
		$sql = 'DELETE FROM pagina WHERE numero_interno = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM pagina WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM pagina WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PaginaMySql 
	 */
	protected function readRow($row){
		$pagina = new Pagina();
		
		$pagina->idPag = $row['id_pag'];
		$pagina->idLibro = $row['id_libro'];
		$pagina->url = $row['url'];
		$pagina->numeroInterno = $row['numero_interno'];
		$pagina->fechaCreacion = $row['fecha_creacion'];
		$pagina->fechaModificacion = $row['fecha_modificacion'];

		return $pagina;
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
	 * @return PaginaMySql 
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