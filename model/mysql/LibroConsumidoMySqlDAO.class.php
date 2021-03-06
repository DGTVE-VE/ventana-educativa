<?php
/**
 * Class that operate on table 'libro_consumido'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class LibroConsumidoMySqlDAO implements LibroConsumidoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LibroConsumidoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM libro_consumido WHERE id_libro_consumido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM libro_consumido';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM libro_consumido ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param libroConsumido primary key
 	 */
	public function delete($id_libro_consumido){
		$sql = 'DELETE FROM libro_consumido WHERE id_libro_consumido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_libro_consumido);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LibroConsumidoMySql libroConsumido
 	 */
	public function insert($libroConsumido){
		$sql = 'INSERT INTO libro_consumido (id_libro, id_usuario, tiempo, ip, pagina_inicio, pagina_fin, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($libroConsumido->idLibro);
		$sqlQuery->setNumber($libroConsumido->idUsuario);
		$sqlQuery->set($libroConsumido->tiempo);
		$sqlQuery->set($libroConsumido->ip);
		$sqlQuery->setNumber($libroConsumido->paginaInicio);
		$sqlQuery->setNumber($libroConsumido->paginaFin);
		$sqlQuery->set($libroConsumido->fechaCreacion);
		$sqlQuery->set($libroConsumido->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$libroConsumido->idLibroConsumido = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LibroConsumidoMySql libroConsumido
 	 */
	public function update($libroConsumido){
		$sql = 'UPDATE libro_consumido SET id_libro = ?, id_usuario = ?, tiempo = ?, ip = ?, pagina_inicio = ?, pagina_fin = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_libro_consumido = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($libroConsumido->idLibro);
		$sqlQuery->setNumber($libroConsumido->idUsuario);
		$sqlQuery->set($libroConsumido->tiempo);
		$sqlQuery->set($libroConsumido->ip);
		$sqlQuery->setNumber($libroConsumido->paginaInicio);
		$sqlQuery->setNumber($libroConsumido->paginaFin);
		$sqlQuery->set($libroConsumido->fechaCreacion);
		$sqlQuery->set($libroConsumido->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		$sqlQuery->setNumber($libroConsumido->idLibroConsumido);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM libro_consumido';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdLibro($value){
		$sql = 'SELECT * FROM libro_consumido WHERE id_libro = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdUsuario($value){
		$sql = 'SELECT * FROM libro_consumido WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTiempo($value){
		$sql = 'SELECT * FROM libro_consumido WHERE tiempo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIp($value){
		$sql = 'SELECT * FROM libro_consumido WHERE ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPaginaInicio($value){
		$sql = 'SELECT * FROM libro_consumido WHERE pagina_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPaginaFin($value){
		$sql = 'SELECT * FROM libro_consumido WHERE pagina_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM libro_consumido WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM libro_consumido WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdLibro($value){
		$sql = 'DELETE FROM libro_consumido WHERE id_libro = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdUsuario($value){
		$sql = 'DELETE FROM libro_consumido WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTiempo($value){
		$sql = 'DELETE FROM libro_consumido WHERE tiempo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIp($value){
		$sql = 'DELETE FROM libro_consumido WHERE ip = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPaginaInicio($value){
		$sql = 'DELETE FROM libro_consumido WHERE pagina_inicio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPaginaFin($value){
		$sql = 'DELETE FROM libro_consumido WHERE pagina_fin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM libro_consumido WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM libro_consumido WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LibroConsumidoMySql 
	 */
	protected function readRow($row){
		$libroConsumido = new LibroConsumido();
		
		$libroConsumido->idLibroConsumido = $row['id_libro_consumido'];
		$libroConsumido->idLibro = $row['id_libro'];
		$libroConsumido->idUsuario = $row['id_usuario'];
		$libroConsumido->tiempo = $row['tiempo'];
		$libroConsumido->ip = $row['ip'];
		$libroConsumido->paginaInicio = $row['pagina_inicio'];
		$libroConsumido->paginaFin = $row['pagina_fin'];
		$libroConsumido->fechaCreacion = $row['fecha_creacion'];
		$libroConsumido->fechaModificacion = $row['fecha_modificacion'];

		return $libroConsumido;
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
	 * @return LibroConsumidoMySql 
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