<?php
/**
 * Class that operate on table 'categorias'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class CategoriasMySqlDAO implements CategoriasDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CategoriasMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM categorias WHERE categoria = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM categorias';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM categorias ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param categoria primary key
 	 */
	public function delete($categoria){
		$sql = 'DELETE FROM categorias WHERE categoria = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($categoria);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CategoriasMySql categoria
 	 */
	public function insert($categoria){
		$sql = 'INSERT INTO categorias (descripcion, categoria_padre, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($categoria->descripcion);
		$sqlQuery->set($categoria->categoriaPadre);
		$sqlQuery->set($categoria->fechaCreacion);
		$sqlQuery->set($categoria->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$categoria->categoria = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CategoriasMySql categoria
 	 */
	public function update($categoria){
		$sql = 'UPDATE categorias SET descripcion = ?, categoria_padre = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE categoria = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($categoria->descripcion);
		$sqlQuery->set($categoria->categoriaPadre);
		$sqlQuery->set($categoria->fechaCreacion);
		$sqlQuery->set($categoria->fechaModificacion);

		$sqlQuery->set($categoria->categoria);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM categorias';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM categorias WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCategoriaPadre($value){
		$sql = 'SELECT * FROM categorias WHERE categoria_padre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM categorias WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM categorias WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM categorias WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCategoriaPadre($value){
		$sql = 'DELETE FROM categorias WHERE categoria_padre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM categorias WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM categorias WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CategoriasMySql 
	 */
	protected function readRow($row){
		$categoria = new Categoria();
		
		$categoria->categoria = $row['categoria'];
		$categoria->descripcion = $row['descripcion'];
		$categoria->categoriaPadre = $row['categoria_padre'];
		$categoria->fechaCreacion = $row['fecha_creacion'];
		$categoria->fechaModificacion = $row['fecha_modificacion'];

		return $categoria;
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
	 * @return CategoriasMySql 
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