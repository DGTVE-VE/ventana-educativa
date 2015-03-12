<?php
/**
 * Class that operate on table 'escuela'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class EscuelaMySqlDAO implements EscuelaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return EscuelaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM escuela WHERE id_escuela = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM escuela';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM escuela ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param escuela primary key
 	 */
	public function delete($id_escuela){
		$sql = 'DELETE FROM escuela WHERE id_escuela = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_escuela);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param EscuelaMySql escuela
 	 */
	public function insert($escuela){
		$sql = 'INSERT INTO escuela (nombre, direccion, colonia, municipio, estado, codigo_postal, clave, privada, nivel, institucion, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($escuela->nombre);
		$sqlQuery->set($escuela->direccion);
		$sqlQuery->set($escuela->colonia);
		$sqlQuery->set($escuela->municipio);
		$sqlQuery->set($escuela->estado);
		$sqlQuery->set($escuela->codigoPostal);
		$sqlQuery->set($escuela->clave);
		$sqlQuery->setNumber($escuela->privada);
		$sqlQuery->set($escuela->nivel);
		$sqlQuery->set($escuela->institucion);
		$sqlQuery->set($escuela->fechaCreacion);
		$sqlQuery->set($escuela->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$escuela->idEscuela = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param EscuelaMySql escuela
 	 */
	public function update($escuela){
		$sql = 'UPDATE escuela SET nombre = ?, direccion = ?, colonia = ?, municipio = ?, estado = ?, codigo_postal = ?, clave = ?, privada = ?, nivel = ?, institucion = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_escuela = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($escuela->nombre);
		$sqlQuery->set($escuela->direccion);
		$sqlQuery->set($escuela->colonia);
		$sqlQuery->set($escuela->municipio);
		$sqlQuery->set($escuela->estado);
		$sqlQuery->set($escuela->codigoPostal);
		$sqlQuery->set($escuela->clave);
		$sqlQuery->setNumber($escuela->privada);
		$sqlQuery->set($escuela->nivel);
		$sqlQuery->set($escuela->institucion);
		$sqlQuery->set($escuela->fechaCreacion);
		$sqlQuery->set($escuela->fechaModificacion);

		$sqlQuery->setNumber($escuela->idEscuela);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM escuela';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM escuela WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDireccion($value){
		$sql = 'SELECT * FROM escuela WHERE direccion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByColonia($value){
		$sql = 'SELECT * FROM escuela WHERE colonia = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMunicipio($value){
		$sql = 'SELECT * FROM escuela WHERE municipio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEstado($value){
		$sql = 'SELECT * FROM escuela WHERE estado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCodigoPostal($value){
		$sql = 'SELECT * FROM escuela WHERE codigo_postal = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClave($value){
		$sql = 'SELECT * FROM escuela WHERE clave = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPrivada($value){
		$sql = 'SELECT * FROM escuela WHERE privada = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNivel($value){
		$sql = 'SELECT * FROM escuela WHERE nivel = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInstitucion($value){
		$sql = 'SELECT * FROM escuela WHERE institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM escuela WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM escuela WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM escuela WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDireccion($value){
		$sql = 'DELETE FROM escuela WHERE direccion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByColonia($value){
		$sql = 'DELETE FROM escuela WHERE colonia = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMunicipio($value){
		$sql = 'DELETE FROM escuela WHERE municipio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEstado($value){
		$sql = 'DELETE FROM escuela WHERE estado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCodigoPostal($value){
		$sql = 'DELETE FROM escuela WHERE codigo_postal = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClave($value){
		$sql = 'DELETE FROM escuela WHERE clave = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPrivada($value){
		$sql = 'DELETE FROM escuela WHERE privada = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNivel($value){
		$sql = 'DELETE FROM escuela WHERE nivel = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInstitucion($value){
		$sql = 'DELETE FROM escuela WHERE institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM escuela WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM escuela WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return EscuelaMySql 
	 */
	protected function readRow($row){
		$escuela = new Escuela();
		
		$escuela->idEscuela = $row['id_escuela'];
		$escuela->nombre = $row['nombre'];
		$escuela->direccion = $row['direccion'];
		$escuela->colonia = $row['colonia'];
		$escuela->municipio = $row['municipio'];
		$escuela->estado = $row['estado'];
		$escuela->codigoPostal = $row['codigo_postal'];
		$escuela->clave = $row['clave'];
		$escuela->privada = $row['privada'];
		$escuela->nivel = $row['nivel'];
		$escuela->institucion = $row['institucion'];
		$escuela->fechaCreacion = $row['fecha_creacion'];
		$escuela->fechaModificacion = $row['fecha_modificacion'];

		return $escuela;
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
	 * @return EscuelaMySql 
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