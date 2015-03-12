<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface SerieDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Serie 
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
 	 * @param serie primary key
 	 */
	public function delete($id_serie);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Serie serie
 	 */
	public function insert($serie);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Serie serie
 	 */
	public function update($serie);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdInstitucion($value);

	public function queryByTitulo($value);

	public function queryByDescripcion($value);

	public function queryByThumbnail($value);

	public function queryByTags($value);

	public function queryByTemporadas($value);

	public function queryByCalificacion($value);

	public function queryByVisible($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByIdInstitucion($value);

	public function deleteByTitulo($value);

	public function deleteByDescripcion($value);

	public function deleteByThumbnail($value);

	public function deleteByTags($value);

	public function deleteByTemporadas($value);

	public function deleteByCalificacion($value);

	public function deleteByVisible($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>