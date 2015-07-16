<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface VodDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Vod 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param vod primary key
 	 */
	public function delete($id_vod);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Vod vod
 	 */
	public function insert($vod);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Vod vod
 	 */
	public function update($vod);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdInstitucion($value);

	public function queryByAutor($value);

	public function queryByProductor($value);

	public function queryByDerechoAutor($value);

	public function queryBySerie($value);

	public function queryByTitulo($value);

	public function queryBySubserie($value);

	public function queryBySubtitulo($value);

	public function queryByTituloTraducido($value);

	public function queryByClaveIdentificacion($value);

	public function queryByNumeroObra($value);

	public function queryByNumeroSerie($value);

	public function queryByFormato($value);

	public function queryByNnnov($value);

	public function queryByCreditos($value);

	public function queryByLugarProduccion($value);

	public function queryByTemas($value);

	public function queryBySinopsis($value);

	public function queryByDuracion($value);

	public function queryByAnioProduccion($value);

	public function queryByIdioma($value);

	public function queryByVersiones($value);

	public function queryBySistemaGrabacion($value);

	public function queryByColor($value);

	public function queryBySonido($value);

	public function queryByDisponibilidad($value);

	public function queryByObservaciones($value);

	public function queryByDisponibleHasta($value);

	public function queryByEpisodio($value);

	public function queryByTemporada($value);

	public function queryByCalificacion($value);

	public function queryByTags($value);

	public function queryByIdSerie($value);

	public function queryByUrl($value);

	public function queryByThumbnail($value);

	public function queryByVisible($value);
    
    public function queryByYoutubeListId($value);
    
    public function queryByYoutubeId($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByIdInstitucion($value);

	public function deleteByAutor($value);

	public function deleteByProductor($value);

	public function deleteByDerechoAutor($value);

	public function deleteBySerie($value);

	public function deleteByTitulo($value);

	public function deleteBySubserie($value);

	public function deleteBySubtitulo($value);

	public function deleteByTituloTraducido($value);

	public function deleteByClaveIdentificacion($value);

	public function deleteByNumeroObra($value);

	public function deleteByNumeroSerie($value);

	public function deleteByFormato($value);

	public function deleteByNnnov($value);

	public function deleteByCreditos($value);

	public function deleteByLugarProduccion($value);

	public function deleteByTemas($value);

	public function deleteBySinopsis($value);

	public function deleteByDuracion($value);

	public function deleteByAnioProduccion($value);

	public function deleteByIdioma($value);

	public function deleteByVersiones($value);

	public function deleteBySistemaGrabacion($value);

	public function deleteByColor($value);

	public function deleteBySonido($value);

	public function deleteByDisponibilidad($value);

	public function deleteByObservaciones($value);

	public function deleteByDisponibleHasta($value);

	public function deleteByEpisodio($value);

	public function deleteByTemporada($value);

	public function deleteByCalificacion($value);

	public function deleteByTags($value);

	public function deleteByIdSerie($value);

	public function deleteByUrl($value);

	public function deleteByThumbnail($value);

	public function deleteByVisible($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>