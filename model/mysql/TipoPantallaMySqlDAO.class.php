<?php
/**
 * Class that operate on table 'tipo_pantalla'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class TipoPantallaMySqlDAO implements TipoPantallaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TipoPantallaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tipo_pantalla WHERE tipo_pantalla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tipo_pantalla';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tipo_pantalla ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param tipoPantalla primary key
 	 */
	public function delete($tipo_pantalla){
		$sql = 'DELETE FROM tipo_pantalla WHERE tipo_pantalla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($tipo_pantalla);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TipoPantallaMySql tipoPantalla
 	 */
	public function insert($tipoPantalla){
		$sql = 'INSERT INTO tipo_pantalla (descripcion, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tipoPantalla->descripcion);
		$sqlQuery->set($tipoPantalla->fechaCreacion);
		$sqlQuery->set($tipoPantalla->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$tipoPantalla->tipoPantalla = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TipoPantallaMySql tipoPantalla
 	 */
	public function update($tipoPantalla){
		$sql = 'UPDATE tipo_pantalla SET descripcion = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE tipo_pantalla = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($tipoPantalla->descripcion);
		$sqlQuery->set($tipoPantalla->fechaCreacion);
		$sqlQuery->set($tipoPantalla->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		$sqlQuery->set($tipoPantalla->tipoPantalla);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tipo_pantalla';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM tipo_pantalla WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM tipo_pantalla WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM tipo_pantalla WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM tipo_pantalla WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM tipo_pantalla WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM tipo_pantalla WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TipoPantallaMySql 
	 */
	protected function readRow($row){
		$tipoPantalla = new TipoPantalla();
		
		$tipoPantalla->tipoPantalla = $row['tipo_pantalla'];
		$tipoPantalla->descripcion = $row['descripcion'];
		$tipoPantalla->fechaCreacion = $row['fecha_creacion'];
		$tipoPantalla->fechaModificacion = $row['fecha_modificacion'];

		return $tipoPantalla;
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
	 * @return TipoPantallaMySql 
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