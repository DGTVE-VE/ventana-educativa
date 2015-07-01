<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface LogErroresDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return LogErrores 
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
 	 * @param logErrore primary key
 	 */
	public function delete($id_log_error);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LogErrores logErrore
 	 */
	public function insert($logErrore);
	
	/**
 	 * Update record in table
 	 *
 	 * @param LogErrores logErrore
 	 */
	public function update($logErrore);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByLog($value);

	public function queryByTipoError($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByLog($value);

	public function deleteByTipoError($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>