<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface OpinionSerieDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return OpinionSerie 
	 */
	public function load($idSerie, $idUsuario);

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
 	 * @param opinionSerie primary key
 	 */
	public function delete($idSerie, $idUsuario);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param OpinionSerie opinionSerie
 	 */
	public function insert($opinionSerie);
	
	/**
 	 * Update record in table
 	 *
 	 * @param OpinionSerie opinionSerie
 	 */
	public function update($opinionSerie);	

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