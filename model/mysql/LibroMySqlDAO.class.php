<?php
/**
 * Class that operate on table 'libro'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class LibroMySqlDAO implements LibroDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LibroMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM libro WHERE id_libro = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM libro';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM libro ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param libro primary key
 	 */
	public function delete($id_libro){
		$sql = 'DELETE FROM libro WHERE id_libro = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_libro);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LibroMySql libro
 	 */
	public function insert($libro){
		$sql = 'INSERT INTO libro (autor, colaboradores, propietario, titulo, subtitulo, edicion, editorial, lugar, fecha_publicacion, anio_publicacion, paginas, serie, numero_serie, volumen, descripcion, isbn_10, isbn_13, ean_13, issn, idioma, titulo_traducido, url, calificacion, temas, tags, thumbnail, id_institucion, fecha_creacion, fecha_modificacion, visible) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($libro->autor);
		$sqlQuery->set($libro->colaboradores);
		$sqlQuery->set($libro->propietario);
		$sqlQuery->set($libro->titulo);
		$sqlQuery->set($libro->subtitulo);
		$sqlQuery->setNumber($libro->edicion);
		$sqlQuery->set($libro->editorial);
		$sqlQuery->set($libro->lugar);
		$sqlQuery->set($libro->fechaPublicacion);
		$sqlQuery->set($libro->anioPublicacion);
		$sqlQuery->setNumber($libro->paginas);
		$sqlQuery->set($libro->serie);
		$sqlQuery->setNumber($libro->numeroSerie);
		$sqlQuery->setNumber($libro->volumen);
		$sqlQuery->set($libro->descripcion);
		$sqlQuery->set($libro->isbn10);
		$sqlQuery->set($libro->isbn13);
		$sqlQuery->set($libro->ean13);
		$sqlQuery->set($libro->issn);
		$sqlQuery->set($libro->idioma);
		$sqlQuery->set($libro->tituloTraducido);
		$sqlQuery->set($libro->url);
		$sqlQuery->setNumber($libro->calificacion);
		$sqlQuery->set($libro->temas);
		$sqlQuery->set($libro->tags);
		$sqlQuery->set($libro->thumbnail);
		$sqlQuery->setNumber($libro->idInstitucion);
		$sqlQuery->set($libro->fechaCreacion);
		$sqlQuery->set($libro->fechaModificacion);
		$sqlQuery->setNumber($libro->visible);

		$id = $this->executeInsert($sqlQuery);	
		$libro->idLibro = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LibroMySql libro
 	 */
	public function update($libro){
		$sql = 'UPDATE libro SET autor = ?, colaboradores = ?, propietario = ?, titulo = ?, subtitulo = ?, edicion = ?, editorial = ?, lugar = ?, fecha_publicacion = ?, anio_publicacion = ?, paginas = ?, serie = ?, numero_serie = ?, volumen = ?, descripcion = ?, isbn_10 = ?, isbn_13 = ?, ean_13 = ?, issn = ?, idioma = ?, titulo_traducido = ?, url = ?, calificacion = ?, temas = ?, tags = ?, thumbnail = ?, id_institucion = ?, fecha_creacion = ?, fecha_modificacion = ?, visible = ? WHERE id_libro = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($libro->autor);
		$sqlQuery->set($libro->colaboradores);
		$sqlQuery->set($libro->propietario);
		$sqlQuery->set($libro->titulo);
		$sqlQuery->set($libro->subtitulo);
		$sqlQuery->setNumber($libro->edicion);
		$sqlQuery->set($libro->editorial);
		$sqlQuery->set($libro->lugar);
		$sqlQuery->set($libro->fechaPublicacion);
		$sqlQuery->set($libro->anioPublicacion);
		$sqlQuery->setNumber($libro->paginas);
		$sqlQuery->set($libro->serie);
		$sqlQuery->setNumber($libro->numeroSerie);
		$sqlQuery->setNumber($libro->volumen);
		$sqlQuery->set($libro->descripcion);
		$sqlQuery->set($libro->isbn10);
		$sqlQuery->set($libro->isbn13);
		$sqlQuery->set($libro->ean13);
		$sqlQuery->set($libro->issn);
		$sqlQuery->set($libro->idioma);
		$sqlQuery->set($libro->tituloTraducido);
		$sqlQuery->set($libro->url);
		$sqlQuery->setNumber($libro->calificacion);
		$sqlQuery->set($libro->temas);
		$sqlQuery->set($libro->tags);
		$sqlQuery->set($libro->thumbnail);
		$sqlQuery->setNumber($libro->idInstitucion);
		$sqlQuery->set($libro->fechaCreacion);
		$sqlQuery->set($libro->fechaModificacion);
		$sqlQuery->setNumber($libro->visible);
                $sqlQuery->set(date("Y-m-d H:i:s"));

		$sqlQuery->setNumber($libro->idLibro);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM libro';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByAutor($value){
		$sql = 'SELECT * FROM libro WHERE autor = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByColaboradores($value){
		$sql = 'SELECT * FROM libro WHERE colaboradores = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPropietario($value){
		$sql = 'SELECT * FROM libro WHERE propietario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTitulo($value){
		$sql = 'SELECT * FROM libro WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubtitulo($value){
		$sql = 'SELECT * FROM libro WHERE subtitulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEdicion($value){
		$sql = 'SELECT * FROM libro WHERE edicion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEditorial($value){
		$sql = 'SELECT * FROM libro WHERE editorial = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLugar($value){
		$sql = 'SELECT * FROM libro WHERE lugar = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaPublicacion($value){
		$sql = 'SELECT * FROM libro WHERE fecha_publicacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAnioPublicacion($value){
		$sql = 'SELECT * FROM libro WHERE anio_publicacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPaginas($value){
		$sql = 'SELECT * FROM libro WHERE paginas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySerie($value){
		$sql = 'SELECT * FROM libro WHERE serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNumeroSerie($value){
		$sql = 'SELECT * FROM libro WHERE numero_serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVolumen($value){
		$sql = 'SELECT * FROM libro WHERE volumen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM libro WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsbn10($value){
		$sql = 'SELECT * FROM libro WHERE isbn_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIsbn13($value){
		$sql = 'SELECT * FROM libro WHERE isbn_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEan13($value){
		$sql = 'SELECT * FROM libro WHERE ean_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIssn($value){
		$sql = 'SELECT * FROM libro WHERE issn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdioma($value){
		$sql = 'SELECT * FROM libro WHERE idioma = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTituloTraducido($value){
		$sql = 'SELECT * FROM libro WHERE titulo_traducido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrl($value){
		$sql = 'SELECT * FROM libro WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCalificacion($value){
		$sql = 'SELECT * FROM libro WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTemas($value){
		$sql = 'SELECT * FROM libro WHERE temas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTags($value){
		$sql = 'SELECT * FROM libro WHERE tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByThumbnail($value){
		$sql = 'SELECT * FROM libro WHERE thumbnail = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdInstitucion($value){
		$sql = 'SELECT * FROM libro WHERE id_institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM libro WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM libro WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVisible($value){
		$sql = 'SELECT * FROM libro WHERE visible = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByAutor($value){
		$sql = 'DELETE FROM libro WHERE autor = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByColaboradores($value){
		$sql = 'DELETE FROM libro WHERE colaboradores = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPropietario($value){
		$sql = 'DELETE FROM libro WHERE propietario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTitulo($value){
		$sql = 'DELETE FROM libro WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubtitulo($value){
		$sql = 'DELETE FROM libro WHERE subtitulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEdicion($value){
		$sql = 'DELETE FROM libro WHERE edicion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEditorial($value){
		$sql = 'DELETE FROM libro WHERE editorial = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLugar($value){
		$sql = 'DELETE FROM libro WHERE lugar = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaPublicacion($value){
		$sql = 'DELETE FROM libro WHERE fecha_publicacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAnioPublicacion($value){
		$sql = 'DELETE FROM libro WHERE anio_publicacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPaginas($value){
		$sql = 'DELETE FROM libro WHERE paginas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySerie($value){
		$sql = 'DELETE FROM libro WHERE serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNumeroSerie($value){
		$sql = 'DELETE FROM libro WHERE numero_serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVolumen($value){
		$sql = 'DELETE FROM libro WHERE volumen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM libro WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsbn10($value){
		$sql = 'DELETE FROM libro WHERE isbn_10 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIsbn13($value){
		$sql = 'DELETE FROM libro WHERE isbn_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEan13($value){
		$sql = 'DELETE FROM libro WHERE ean_13 = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIssn($value){
		$sql = 'DELETE FROM libro WHERE issn = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdioma($value){
		$sql = 'DELETE FROM libro WHERE idioma = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTituloTraducido($value){
		$sql = 'DELETE FROM libro WHERE titulo_traducido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrl($value){
		$sql = 'DELETE FROM libro WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCalificacion($value){
		$sql = 'DELETE FROM libro WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTemas($value){
		$sql = 'DELETE FROM libro WHERE temas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTags($value){
		$sql = 'DELETE FROM libro WHERE tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByThumbnail($value){
		$sql = 'DELETE FROM libro WHERE thumbnail = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdInstitucion($value){
		$sql = 'DELETE FROM libro WHERE id_institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM libro WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM libro WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVisible($value){
		$sql = 'DELETE FROM libro WHERE visible = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LibroMySql 
	 */
	protected function readRow($row){
		$libro = new Libro();
		
		$libro->idLibro = $row['id_libro'];
		$libro->autor = $row['autor'];
		$libro->colaboradores = $row['colaboradores'];
		$libro->propietario = $row['propietario'];
		$libro->titulo = $row['titulo'];
		$libro->subtitulo = $row['subtitulo'];
		$libro->edicion = $row['edicion'];
		$libro->editorial = $row['editorial'];
		$libro->lugar = $row['lugar'];
		$libro->fechaPublicacion = $row['fecha_publicacion'];
		$libro->anioPublicacion = $row['anio_publicacion'];
		$libro->paginas = $row['paginas'];
		$libro->serie = $row['serie'];
		$libro->numeroSerie = $row['numero_serie'];
		$libro->volumen = $row['volumen'];
		$libro->descripcion = $row['descripcion'];
		$libro->isbn10 = $row['isbn_10'];
		$libro->isbn13 = $row['isbn_13'];
		$libro->ean13 = $row['ean_13'];
		$libro->issn = $row['issn'];
		$libro->idioma = $row['idioma'];
		$libro->tituloTraducido = $row['titulo_traducido'];
		$libro->url = $row['url'];
		$libro->calificacion = $row['calificacion'];
		$libro->temas = $row['temas'];
		$libro->tags = $row['tags'];
		$libro->thumbnail = $row['thumbnail'];
		$libro->idInstitucion = $row['id_institucion'];
		$libro->fechaCreacion = $row['fecha_creacion'];
		$libro->fechaModificacion = $row['fecha_modificacion'];
		$libro->visible = $row['visible'];

		return $libro;
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
	 * @return LibroMySql 
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