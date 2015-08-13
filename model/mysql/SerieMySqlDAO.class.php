<?php
/**
 * Class that operate on table 'serie'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class SerieMySqlDAO implements SerieDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return SerieMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM serie WHERE id_serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
                
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM serie';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM serie ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param serie primary key
 	 */
	public function delete($id_serie){
		$sql = 'DELETE FROM serie WHERE id_serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_serie);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param SerieMySql serie
 	 */
	public function insert($serie){
		$sql = 'INSERT INTO serie (id_institucion, titulo, sinopsis, descripcion, '
                        . 'background, thumbnail, tags, temporadas, calificacion, visible, '
                        . 'fecha_creacion, fecha_modificacion) '
                        . 'VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($serie->idInstitucion);
		$sqlQuery->set($serie->titulo);
                $sqlQuery->set($serie->sinopsis);
		$sqlQuery->set($serie->descripcion);
                $sqlQuery->set($serie->background);
		$sqlQuery->set($serie->thumbnail);
		$sqlQuery->set($serie->tags);
		$sqlQuery->setNumber($serie->temporadas);
		$sqlQuery->setNumber($serie->calificacion);
		$sqlQuery->setNumber($serie->visible);
		$sqlQuery->set($serie->fechaCreacion);
		$sqlQuery->set($serie->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$serie->idSerie = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param SerieMySql serie
 	 */
	public function update($serie){
		$sql = 'UPDATE serie '
                        . 'SET id_institucion = ?, titulo = ?, sinopsis = ?, '
                        . 'descripcion = ?, background = ?, thumbnail = ?, '
                        . 'tags = ?, temporadas = ?, calificacion = ?, '
                        . 'visible = ?, fecha_creacion = ?, fecha_modificacion = ? '
                        . 'WHERE id_serie = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($serie->idInstitucion);
		$sqlQuery->set($serie->titulo);
                $sqlQuery->set($serie->sinopsis);
		$sqlQuery->set($serie->descripcion);
                $sqlQuery->set($serie->background);
		$sqlQuery->set($serie->thumbnail);
		$sqlQuery->set($serie->tags);
		$sqlQuery->setNumber($serie->temporadas);
		$sqlQuery->setNumber($serie->calificacion);
		$sqlQuery->setNumber($serie->visible);
		$sqlQuery->set($serie->fechaCreacion);
//		$sqlQuery->set($serie->fechaModificacion);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		$sqlQuery->setNumber($serie->idSerie);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM serie';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdInstitucion($value){
		$sql = 'SELECT * FROM serie WHERE id_institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTitulo($value){
		$sql = 'SELECT * FROM serie WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM serie WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByThumbnail($value){
		$sql = 'SELECT * FROM serie WHERE thumbnail = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTags($value){
		$sql = 'SELECT * FROM serie WHERE tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTemporadas($value){
		$sql = 'SELECT * FROM serie WHERE temporadas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCalificacion($value){
		$sql = 'SELECT * FROM serie WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVisible($value){
		$sql = 'SELECT * FROM serie WHERE visible = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM serie WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM serie WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdInstitucion($value){
		$sql = 'DELETE FROM serie WHERE id_institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTitulo($value){
		$sql = 'DELETE FROM serie WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM serie WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByThumbnail($value){
		$sql = 'DELETE FROM serie WHERE thumbnail = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTags($value){
		$sql = 'DELETE FROM serie WHERE tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTemporadas($value){
		$sql = 'DELETE FROM serie WHERE temporadas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCalificacion($value){
		$sql = 'DELETE FROM serie WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVisible($value){
		$sql = 'DELETE FROM serie WHERE visible = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM serie WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM serie WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return SerieMySql 
	 */
	protected function readRow($row){
		$serie = new Serie();
		
		$serie->idSerie = $row['id_serie'];
		$serie->idInstitucion = $row['id_institucion'];
		$serie->titulo = $row['titulo'];
		$serie->descripcion = $row['descripcion'];
		$serie->thumbnail = $row['thumbnail'];
		$serie->tags = $row['tags'];
		$serie->temporadas = $row['temporadas'];
		$serie->calificacion = $row['calificacion'];
		$serie->visible = $row['visible'];
		$serie->fechaCreacion = $row['fecha_creacion'];
		$serie->fechaModificacion = $row['fecha_modificacion'];

		return $serie;
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
	 * @return SerieMySql 
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