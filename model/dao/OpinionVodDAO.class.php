<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface OpinionVodDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return OpinionVod 
	 */
	public function load($usuarioIdUsuario, $vodIdVod);

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
 	 * @param opinionVod primary key
 	 */
	public function delete($usuarioIdUsuario, $vodIdVod);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param OpinionVod opinionVod
 	 */
	public function insert($opinionVod);
	
	/**
 	 * Update record in table
 	 *
 	 * @param OpinionVod opinionVod
 	 */
	public function update($opinionVod);	

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