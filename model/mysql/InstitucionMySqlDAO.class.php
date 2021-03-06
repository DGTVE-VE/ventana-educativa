<?php
/**
 * Class that operate on table 'institucion'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class InstitucionMySqlDAO implements InstitucionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return InstitucionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM institucion WHERE id_institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM institucion';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM institucion ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param institucion primary key
 	 */
	public function delete($id_institucion){
		$sql = 'DELETE FROM institucion WHERE id_institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_institucion);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param InstitucionMySql institucion
 	 */
	public function insert($institucion){
		$sql = 'INSERT INTO institucion (nombre, contacto, telefono, correo, abreviatura, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($institucion->nombre);
		$sqlQuery->set($institucion->contacto);
		$sqlQuery->set($institucion->telefono);
		$sqlQuery->set($institucion->correo);
		$sqlQuery->set($institucion->abreviatura);
		$sqlQuery->set($institucion->fechaCreacion);
		$sqlQuery->set($institucion->fechaModificacion);
               

		$id = $this->executeInsert($sqlQuery);	
		$institucion->idInstitucion = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param InstitucionMySql institucion
 	 */
	public function update($institucion){
		$sql = 'UPDATE institucion SET nombre = ?, contacto = ?, telefono = ?, correo = ?, abreviatura = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($institucion->nombre);
		$sqlQuery->set($institucion->contacto);
		$sqlQuery->set($institucion->telefono);
		$sqlQuery->set($institucion->correo);
		$sqlQuery->set($institucion->abreviatura);
		$sqlQuery->set($institucion->fechaCreacion);
		$sqlQuery->set($institucion->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		$sqlQuery->setNumber($institucion->idInstitucion);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM institucion';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM institucion WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByContacto($value){
		$sql = 'SELECT * FROM institucion WHERE contacto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelefono($value){
		$sql = 'SELECT * FROM institucion WHERE telefono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCorreo($value){
		$sql = 'SELECT * FROM institucion WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAbreviatura($value){
		$sql = 'SELECT * FROM institucion WHERE abreviatura = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM institucion WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM institucion WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM institucion WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByContacto($value){
		$sql = 'DELETE FROM institucion WHERE contacto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelefono($value){
		$sql = 'DELETE FROM institucion WHERE telefono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCorreo($value){
		$sql = 'DELETE FROM institucion WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAbreviatura($value){
		$sql = 'DELETE FROM institucion WHERE abreviatura = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM institucion WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM institucion WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return InstitucionMySql 
	 */
	protected function readRow($row){
		$institucion = new Institucion();
		
		$institucion->idInstitucion = $row['id_institucion'];
		$institucion->nombre = $row['nombre'];
		$institucion->contacto = $row['contacto'];
		$institucion->telefono = $row['telefono'];
		$institucion->correo = $row['correo'];
		$institucion->abreviatura = $row['abreviatura'];
		$institucion->fechaCreacion = $row['fecha_creacion'];
		$institucion->fechaModificacion = $row['fecha_modificacion'];

		return $institucion;
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
	 * @return InstitucionMySql 
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