<?php
/**
 * Class that operate on table 'categorias_vod'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class CategoriasVodMySqlDAO implements CategoriasVodDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CategoriasVodMySql 
	 */
	public function load($categoriasCategoria, $vodIdVod){
		$sql = 'SELECT * FROM categorias_vod WHERE categorias_categoria = ?  AND vod_id_vod = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($categoriasCategoria);
		$sqlQuery->setNumber($vodIdVod);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM categorias_vod';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM categorias_vod ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param categoriasVod primary key
 	 */
	public function delete($categoriasCategoria, $vodIdVod){
		$sql = 'DELETE FROM categorias_vod WHERE categorias_categoria = ?  AND vod_id_vod = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($categoriasCategoria);
		$sqlQuery->setNumber($vodIdVod);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CategoriasVodMySql categoriasVod
 	 */
	public function insert($categoriasVod){
		$sql = 'INSERT INTO categorias_vod (fecha_creacion, fecha_modificacion, categorias_categoria, vod_id_vod) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($categoriasVod->fechaCreacion);
		$sqlQuery->set($categoriasVod->fechaModificacion);

		
		$sqlQuery->setNumber($categoriasVod->categoriasCategoria);

		$sqlQuery->setNumber($categoriasVod->vodIdVod);

		$this->executeInsert($sqlQuery);	
		//$categoriasVod->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CategoriasVodMySql categoriasVod
 	 */
	public function update($categoriasVod){
		$sql = 'UPDATE categorias_vod SET fecha_creacion = ?, fecha_modificacion = ? WHERE categorias_categoria = ?  AND vod_id_vod = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($categoriasVod->fechaCreacion);
		$sqlQuery->set($categoriasVod->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		
		$sqlQuery->setNumber($categoriasVod->categoriasCategoria);

		$sqlQuery->setNumber($categoriasVod->vodIdVod);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM categorias_vod';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM categorias_vod WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM categorias_vod WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM categorias_vod WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM categorias_vod WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CategoriasVodMySql 
	 */
	protected function readRow($row){
		$categoriasVod = new CategoriasVod();
		
		$categoriasVod->categoriasCategoria = $row['categorias_categoria'];
		$categoriasVod->vodIdVod = $row['vod_id_vod'];
		$categoriasVod->fechaCreacion = $row['fecha_creacion'];
		$categoriasVod->fechaModificacion = $row['fecha_modificacion'];

		return $categoriasVod;
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
	 * @return CategoriasVodMySql 
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