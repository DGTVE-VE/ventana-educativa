<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface OpinionLibroDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return OpinionLibro 
	 */
	public function load($idLibro, $idUsuario);

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
 	 * @param opinionLibro primary key
 	 */
	public function delete($idLibro, $idUsuario);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param OpinionLibro opinionLibro
 	 */
	public function insert($opinionLibro);
	
	/**
 	 * Update record in table
 	 *
 	 * @param OpinionLibro opinionLibro
 	 */
	public function update($opinionLibro);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByOpinion($value);

	public function queryByCalificacion($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByOpinion($value);

	public function deleteByCalificacion($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>