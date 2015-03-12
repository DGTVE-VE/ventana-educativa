<?php
/**
 * Class that operate on table 'vod'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class VodMySqlDAO implements VodDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return VodMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM vod WHERE id_vod = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM vod';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM vod ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param vod primary key
 	 */
	public function delete($id_vod){
		$sql = 'DELETE FROM vod WHERE id_vod = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_vod);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param VodMySql vod
 	 */
	public function insert($vod){
		$sql = 'INSERT INTO vod (id_institucion, autor, productor, derecho_autor, serie, titulo, subserie, subtitulo, titulo_traducido, clave_identificacion, numero_obra, numero_serie, formato, nnnov, creditos, lugar_produccion, temas, sinopsis, duracion, anio_produccion, idioma, versiones, sistema_grabacion, color, sonido, disponibilidad, observaciones, disponible_hasta, episodio, temporada, calificacion, tags, id_serie, url, thumbnail, visible, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($vod->idInstitucion);
		$sqlQuery->set($vod->autor);
		$sqlQuery->set($vod->productor);
		$sqlQuery->set($vod->derechoAutor);
		$sqlQuery->set($vod->serie);
		$sqlQuery->set($vod->titulo);
		$sqlQuery->set($vod->subserie);
		$sqlQuery->set($vod->subtitulo);
		$sqlQuery->set($vod->tituloTraducido);
		$sqlQuery->set($vod->claveIdentificacion);
		$sqlQuery->setNumber($vod->numeroObra);
		$sqlQuery->setNumber($vod->numeroSerie);
		$sqlQuery->set($vod->formato);
		$sqlQuery->set($vod->nnnov);
		$sqlQuery->set($vod->creditos);
		$sqlQuery->set($vod->lugarProduccion);
		$sqlQuery->set($vod->temas);
		$sqlQuery->set($vod->sinopsis);
		$sqlQuery->set($vod->duracion);
		$sqlQuery->set($vod->anioProduccion);
		$sqlQuery->set($vod->idioma);
		$sqlQuery->set($vod->versiones);
		$sqlQuery->set($vod->sistemaGrabacion);
		$sqlQuery->set($vod->color);
		$sqlQuery->set($vod->sonido);
		$sqlQuery->set($vod->disponibilidad);
		$sqlQuery->set($vod->observaciones);
		$sqlQuery->set($vod->disponibleHasta);
		$sqlQuery->setNumber($vod->episodio);
		$sqlQuery->setNumber($vod->temporada);
		$sqlQuery->setNumber($vod->calificacion);
		$sqlQuery->set($vod->tags);
		$sqlQuery->setNumber($vod->idSerie);
		$sqlQuery->set($vod->url);
		$sqlQuery->set($vod->thumbnail);
		$sqlQuery->setNumber($vod->visible);
		$sqlQuery->set($vod->fechaCreacion);
		$sqlQuery->set($vod->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$vod->idVod = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param VodMySql vod
 	 */
	public function update($vod){
		$sql = 'UPDATE vod SET id_institucion = ?, autor = ?, productor = ?, derecho_autor = ?, serie = ?, titulo = ?, subserie = ?, subtitulo = ?, titulo_traducido = ?, clave_identificacion = ?, numero_obra = ?, numero_serie = ?, formato = ?, nnnov = ?, creditos = ?, lugar_produccion = ?, temas = ?, sinopsis = ?, duracion = ?, anio_produccion = ?, idioma = ?, versiones = ?, sistema_grabacion = ?, color = ?, sonido = ?, disponibilidad = ?, observaciones = ?, disponible_hasta = ?, episodio = ?, temporada = ?, calificacion = ?, tags = ?, id_serie = ?, url = ?, thumbnail = ?, visible = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_vod = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($vod->idInstitucion);
		$sqlQuery->set($vod->autor);
		$sqlQuery->set($vod->productor);
		$sqlQuery->set($vod->derechoAutor);
		$sqlQuery->set($vod->serie);
		$sqlQuery->set($vod->titulo);
		$sqlQuery->set($vod->subserie);
		$sqlQuery->set($vod->subtitulo);
		$sqlQuery->set($vod->tituloTraducido);
		$sqlQuery->set($vod->claveIdentificacion);
		$sqlQuery->setNumber($vod->numeroObra);
		$sqlQuery->setNumber($vod->numeroSerie);
		$sqlQuery->set($vod->formato);
		$sqlQuery->set($vod->nnnov);
		$sqlQuery->set($vod->creditos);
		$sqlQuery->set($vod->lugarProduccion);
		$sqlQuery->set($vod->temas);
		$sqlQuery->set($vod->sinopsis);
		$sqlQuery->set($vod->duracion);
		$sqlQuery->set($vod->anioProduccion);
		$sqlQuery->set($vod->idioma);
		$sqlQuery->set($vod->versiones);
		$sqlQuery->set($vod->sistemaGrabacion);
		$sqlQuery->set($vod->color);
		$sqlQuery->set($vod->sonido);
		$sqlQuery->set($vod->disponibilidad);
		$sqlQuery->set($vod->observaciones);
		$sqlQuery->set($vod->disponibleHasta);
		$sqlQuery->setNumber($vod->episodio);
		$sqlQuery->setNumber($vod->temporada);
		$sqlQuery->setNumber($vod->calificacion);
		$sqlQuery->set($vod->tags);
		$sqlQuery->setNumber($vod->idSerie);
		$sqlQuery->set($vod->url);
		$sqlQuery->set($vod->thumbnail);
		$sqlQuery->setNumber($vod->visible);
		$sqlQuery->set($vod->fechaCreacion);
		$sqlQuery->set($vod->fechaModificacion);

		$sqlQuery->setNumber($vod->idVod);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM vod';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdInstitucion($value){
		$sql = 'SELECT * FROM vod WHERE id_institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAutor($value){
		$sql = 'SELECT * FROM vod WHERE autor = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByProductor($value){
		$sql = 'SELECT * FROM vod WHERE productor = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDerechoAutor($value){
		$sql = 'SELECT * FROM vod WHERE derecho_autor = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySerie($value){
		$sql = 'SELECT * FROM vod WHERE serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTitulo($value){
		$sql = 'SELECT * FROM vod WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubserie($value){
		$sql = 'SELECT * FROM vod WHERE subserie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySubtitulo($value){
		$sql = 'SELECT * FROM vod WHERE subtitulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTituloTraducido($value){
		$sql = 'SELECT * FROM vod WHERE titulo_traducido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClaveIdentificacion($value){
		$sql = 'SELECT * FROM vod WHERE clave_identificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNumeroObra($value){
		$sql = 'SELECT * FROM vod WHERE numero_obra = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNumeroSerie($value){
		$sql = 'SELECT * FROM vod WHERE numero_serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFormato($value){
		$sql = 'SELECT * FROM vod WHERE formato = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNnnov($value){
		$sql = 'SELECT * FROM vod WHERE nnnov = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCreditos($value){
		$sql = 'SELECT * FROM vod WHERE creditos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLugarProduccion($value){
		$sql = 'SELECT * FROM vod WHERE lugar_produccion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTemas($value){
		$sql = 'SELECT * FROM vod WHERE temas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySinopsis($value){
		$sql = 'SELECT * FROM vod WHERE sinopsis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDuracion($value){
		$sql = 'SELECT * FROM vod WHERE duracion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAnioProduccion($value){
		$sql = 'SELECT * FROM vod WHERE anio_produccion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdioma($value){
		$sql = 'SELECT * FROM vod WHERE idioma = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVersiones($value){
		$sql = 'SELECT * FROM vod WHERE versiones = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySistemaGrabacion($value){
		$sql = 'SELECT * FROM vod WHERE sistema_grabacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByColor($value){
		$sql = 'SELECT * FROM vod WHERE color = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySonido($value){
		$sql = 'SELECT * FROM vod WHERE sonido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDisponibilidad($value){
		$sql = 'SELECT * FROM vod WHERE disponibilidad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByObservaciones($value){
		$sql = 'SELECT * FROM vod WHERE observaciones = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDisponibleHasta($value){
		$sql = 'SELECT * FROM vod WHERE disponible_hasta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEpisodio($value){
		$sql = 'SELECT * FROM vod WHERE episodio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTemporada($value){
		$sql = 'SELECT * FROM vod WHERE temporada = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCalificacion($value){
		$sql = 'SELECT * FROM vod WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTags($value){
		$sql = 'SELECT * FROM vod WHERE tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdSerie($value){
		$sql = 'SELECT * FROM vod WHERE id_serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrl($value){
		$sql = 'SELECT * FROM vod WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByThumbnail($value){
		$sql = 'SELECT * FROM vod WHERE thumbnail = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVisible($value){
		$sql = 'SELECT * FROM vod WHERE visible = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM vod WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM vod WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdInstitucion($value){
		$sql = 'DELETE FROM vod WHERE id_institucion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAutor($value){
		$sql = 'DELETE FROM vod WHERE autor = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByProductor($value){
		$sql = 'DELETE FROM vod WHERE productor = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDerechoAutor($value){
		$sql = 'DELETE FROM vod WHERE derecho_autor = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySerie($value){
		$sql = 'DELETE FROM vod WHERE serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTitulo($value){
		$sql = 'DELETE FROM vod WHERE titulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubserie($value){
		$sql = 'DELETE FROM vod WHERE subserie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySubtitulo($value){
		$sql = 'DELETE FROM vod WHERE subtitulo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTituloTraducido($value){
		$sql = 'DELETE FROM vod WHERE titulo_traducido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClaveIdentificacion($value){
		$sql = 'DELETE FROM vod WHERE clave_identificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNumeroObra($value){
		$sql = 'DELETE FROM vod WHERE numero_obra = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNumeroSerie($value){
		$sql = 'DELETE FROM vod WHERE numero_serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFormato($value){
		$sql = 'DELETE FROM vod WHERE formato = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNnnov($value){
		$sql = 'DELETE FROM vod WHERE nnnov = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCreditos($value){
		$sql = 'DELETE FROM vod WHERE creditos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLugarProduccion($value){
		$sql = 'DELETE FROM vod WHERE lugar_produccion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTemas($value){
		$sql = 'DELETE FROM vod WHERE temas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySinopsis($value){
		$sql = 'DELETE FROM vod WHERE sinopsis = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDuracion($value){
		$sql = 'DELETE FROM vod WHERE duracion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAnioProduccion($value){
		$sql = 'DELETE FROM vod WHERE anio_produccion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdioma($value){
		$sql = 'DELETE FROM vod WHERE idioma = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVersiones($value){
		$sql = 'DELETE FROM vod WHERE versiones = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySistemaGrabacion($value){
		$sql = 'DELETE FROM vod WHERE sistema_grabacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByColor($value){
		$sql = 'DELETE FROM vod WHERE color = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySonido($value){
		$sql = 'DELETE FROM vod WHERE sonido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDisponibilidad($value){
		$sql = 'DELETE FROM vod WHERE disponibilidad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByObservaciones($value){
		$sql = 'DELETE FROM vod WHERE observaciones = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDisponibleHasta($value){
		$sql = 'DELETE FROM vod WHERE disponible_hasta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEpisodio($value){
		$sql = 'DELETE FROM vod WHERE episodio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTemporada($value){
		$sql = 'DELETE FROM vod WHERE temporada = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCalificacion($value){
		$sql = 'DELETE FROM vod WHERE calificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTags($value){
		$sql = 'DELETE FROM vod WHERE tags = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdSerie($value){
		$sql = 'DELETE FROM vod WHERE id_serie = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrl($value){
		$sql = 'DELETE FROM vod WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByThumbnail($value){
		$sql = 'DELETE FROM vod WHERE thumbnail = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVisible($value){
		$sql = 'DELETE FROM vod WHERE visible = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM vod WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM vod WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return VodMySql 
	 */
	protected function readRow($row){
		$vod = new Vod();
		
		$vod->idVod = $row['id_vod'];
		$vod->idInstitucion = $row['id_institucion'];
		$vod->autor = $row['autor'];
		$vod->productor = $row['productor'];
		$vod->derechoAutor = $row['derecho_autor'];
		$vod->serie = $row['serie'];
		$vod->titulo = $row['titulo'];
		$vod->subserie = $row['subserie'];
		$vod->subtitulo = $row['subtitulo'];
		$vod->tituloTraducido = $row['titulo_traducido'];
		$vod->claveIdentificacion = $row['clave_identificacion'];
		$vod->numeroObra = $row['numero_obra'];
		$vod->numeroSerie = $row['numero_serie'];
		$vod->formato = $row['formato'];
		$vod->nnnov = $row['nnnov'];
		$vod->creditos = $row['creditos'];
		$vod->lugarProduccion = $row['lugar_produccion'];
		$vod->temas = $row['temas'];
		$vod->sinopsis = $row['sinopsis'];
		$vod->duracion = $row['duracion'];
		$vod->anioProduccion = $row['anio_produccion'];
		$vod->idioma = $row['idioma'];
		$vod->versiones = $row['versiones'];
		$vod->sistemaGrabacion = $row['sistema_grabacion'];
		$vod->color = $row['color'];
		$vod->sonido = $row['sonido'];
		$vod->disponibilidad = $row['disponibilidad'];
		$vod->observaciones = $row['observaciones'];
		$vod->disponibleHasta = $row['disponible_hasta'];
		$vod->episodio = $row['episodio'];
		$vod->temporada = $row['temporada'];
		$vod->calificacion = $row['calificacion'];
		$vod->tags = $row['tags'];
		$vod->idSerie = $row['id_serie'];
		$vod->url = $row['url'];
		$vod->thumbnail = $row['thumbnail'];
		$vod->visible = $row['visible'];
		$vod->fechaCreacion = $row['fecha_creacion'];
		$vod->fechaModificacion = $row['fecha_modificacion'];

		return $vod;
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
	 * @return VodMySql 
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