<?php
/**
 * Class that operate on table 'pantalla'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class PantallaMySqlDAO implements PantallaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PantallaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM pantalla WHERE id_pantalla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM pantalla';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM pantalla ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param pantalla primary key
 	 */
	public function delete($id_pantalla){
		$sql = 'DELETE FROM pantalla WHERE id_pantalla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_pantalla);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PantallaMySql pantalla
 	 */
	public function insert($pantalla){
		$sql = 'INSERT INTO pantalla (id_pantalla_padre, nombre, descripcion, alto, ancho, thumbnail, posicion, colspan, rowspan, filas, columnas, tipo_ventana, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($pantalla->idPantallaPadre);
		$sqlQuery->set($pantalla->nombre);
		$sqlQuery->set($pantalla->descripcion);
		$sqlQuery->setNumber($pantalla->alto);
		$sqlQuery->setNumber($pantalla->ancho);
		$sqlQuery->set($pantalla->thumbnail);
		$sqlQuery->setNumber($pantalla->posicion);
		$sqlQuery->setNumber($pantalla->colspan);
		$sqlQuery->setNumber($pantalla->rowspan);
		$sqlQuery->setNumber($pantalla->filas);
		$sqlQuery->setNumber($pantalla->columnas);
		$sqlQuery->set($pantalla->tipoVentana);
		$sqlQuery->set($pantalla->fechaCreacion);
		$sqlQuery->set($pantalla->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$pantalla->idPantalla = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PantallaMySql pantalla
 	 */
	public function update($pantalla){
		$sql = 'UPDATE pantalla SET id_pantalla_padre = ?, nombre = ?, descripcion = ?, alto = ?, ancho = ?, thumbnail = ?, posicion = ?, colspan = ?, rowspan = ?, filas = ?, columnas = ?, tipo_ventana = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_pantalla = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($pantalla->idPantallaPadre);
		$sqlQuery->set($pantalla->nombre);
		$sqlQuery->set($pantalla->descripcion);
		$sqlQuery->setNumber($pantalla->alto);
		$sqlQuery->setNumber($pantalla->ancho);
		$sqlQuery->set($pantalla->thumbnail);
		$sqlQuery->setNumber($pantalla->posicion);
		$sqlQuery->setNumber($pantalla->colspan);
		$sqlQuery->setNumber($pantalla->rowspan);
		$sqlQuery->setNumber($pantalla->filas);
		$sqlQuery->setNumber($pantalla->columnas);
		$sqlQuery->set($pantalla->tipoVentana);
		$sqlQuery->set($pantalla->fechaCreacion);
		$sqlQuery->set($pantalla->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		$sqlQuery->setNumber($pantalla->idPantalla);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM pantalla';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdPantallaPadre($value){
		$sql = 'SELECT * FROM pantalla WHERE id_pantalla_padre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM pantalla WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM pantalla WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAlto($value){
		$sql = 'SELECT * FROM pantalla WHERE alto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAncho($value){
		$sql = 'SELECT * FROM pantalla WHERE ancho = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByThumbnail($value){
		$sql = 'SELECT * FROM pantalla WHERE thumbnail = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPosicion($value){
		$sql = 'SELECT * FROM pantalla WHERE posicion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByColspan($value){
		$sql = 'SELECT * FROM pantalla WHERE colspan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRowspan($value){
		$sql = 'SELECT * FROM pantalla WHERE rowspan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFilas($value){
		$sql = 'SELECT * FROM pantalla WHERE filas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByColumnas($value){
		$sql = 'SELECT * FROM pantalla WHERE columnas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTipoVentana($value){
		$sql = 'SELECT * FROM pantalla WHERE tipo_ventana = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM pantalla WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM pantalla WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdPantallaPadre($value){
		$sql = 'DELETE FROM pantalla WHERE id_pantalla_padre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombre($value){
		$sql = 'DELETE FROM pantalla WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM pantalla WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAlto($value){
		$sql = 'DELETE FROM pantalla WHERE alto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAncho($value){
		$sql = 'DELETE FROM pantalla WHERE ancho = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByThumbnail($value){
		$sql = 'DELETE FROM pantalla WHERE thumbnail = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPosicion($value){
		$sql = 'DELETE FROM pantalla WHERE posicion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByColspan($value){
		$sql = 'DELETE FROM pantalla WHERE colspan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRowspan($value){
		$sql = 'DELETE FROM pantalla WHERE rowspan = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFilas($value){
		$sql = 'DELETE FROM pantalla WHERE filas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByColumnas($value){
		$sql = 'DELETE FROM pantalla WHERE columnas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTipoVentana($value){
		$sql = 'DELETE FROM pantalla WHERE tipo_ventana = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM pantalla WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM pantalla WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PantallaMySql 
	 */
	protected function readRow($row){
		$pantalla = new Pantalla();
		
		$pantalla->idPantalla = $row['id_pantalla'];
		$pantalla->idPantallaPadre = $row['id_pantalla_padre'];
		$pantalla->nombre = $row['nombre'];
		$pantalla->descripcion = $row['descripcion'];
		$pantalla->alto = $row['alto'];
		$pantalla->ancho = $row['ancho'];
		$pantalla->thumbnail = $row['thumbnail'];
		$pantalla->posicion = $row['posicion'];
		$pantalla->colspan = $row['colspan'];
		$pantalla->rowspan = $row['rowspan'];
		$pantalla->filas = $row['filas'];
		$pantalla->columnas = $row['columnas'];
		$pantalla->tipoVentana = $row['tipo_ventana'];
		$pantalla->fechaCreacion = $row['fecha_creacion'];
		$pantalla->fechaModificacion = $row['fecha_modificacion'];

		return $pantalla;
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
	 * @return PantallaMySql 
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