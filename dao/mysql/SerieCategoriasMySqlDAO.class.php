<?php
/**
 * Class that operate on table 'serie_categorias'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class SerieCategoriasMySqlDAO implements SerieCategoriasDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SerieCategoriasMySql 
	 */
	public function load($idSerie, $categoria){
		$sql = 'SELECT * FROM serie_categorias WHERE id_serie = ?  AND categoria = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idSerie);
		$sqlQuery->setNumber($categoria);

		return $this->getRow($sqlQuery);
	}
        
        /**
	 * Get Domain object by primry key
	 *
	 * @param String $categoria Categoria
	 * @return SerieCategoriasMySql 
	 */
	public function queryByCategoria ($categoria){
		$sql = 'SELECT * FROM serie_categorias WHERE categoria = ? ';
		$sqlQuery = new SqlQuery($sql);		
		$sqlQuery->setString($categoria);

		return $this->getList($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM serie_categorias';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM serie_categorias ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param serieCategoria primary key
 	 */
	public function delete($idSerie, $categoria){
		$sql = 'DELETE FROM serie_categorias WHERE id_serie = ?  AND categoria = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idSerie);
		$sqlQuery->setNumber($categoria);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SerieCategoriasMySql serieCategoria
 	 */
	public function insert($serieCategoria){
		$sql = 'INSERT INTO serie_categorias (fecha_creacion, fecha_modificacion, id_serie, categoria) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($serieCategoria->fechaCreacion);
		$sqlQuery->set($serieCategoria->fechaModificacion);

		
		$sqlQuery->setNumber($serieCategoria->idSerie);

		$sqlQuery->setNumber($serieCategoria->categoria);

		$this->executeInsert($sqlQuery);	
		//$serieCategoria->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SerieCategoriasMySql serieCategoria
 	 */
	public function update($serieCategoria){
		$sql = 'UPDATE serie_categorias SET fecha_creacion = ?, fecha_modificacion = ? WHERE id_serie = ?  AND categoria = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($serieCategoria->fechaCreacion);
		$sqlQuery->set($serieCategoria->fechaModificacion);

		
		$sqlQuery->setNumber($serieCategoria->idSerie);

		$sqlQuery->setNumber($serieCategoria->categoria);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM serie_categorias';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM serie_categorias WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM serie_categorias WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM serie_categorias WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM serie_categorias WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SerieCategoriasMySql 
	 */
	protected function readRow($row){
		$serieCategoria = new SerieCategoria();
		
		$serieCategoria->idSerie = $row['id_serie'];
		$serieCategoria->categoria = $row['categoria'];
		$serieCategoria->fechaCreacion = $row['fecha_creacion'];
		$serieCategoria->fechaModificacion = $row['fecha_modificacion'];

		return $serieCategoria;
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
	 * @return SerieCategoriasMySql 
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