<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface VodConsumidoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return VodConsumido 
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
 	 * @param vodConsumido primary key
 	 */
	public function delete($id_vod_consumido);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param VodConsumido vodConsumido
 	 */
	public function insert($vodConsumido);
	
	/**
 	 * Update record in table
 	 *
 	 * @param VodConsumido vodConsumido
 	 */
	public function update($vodConsumido);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdVod($value);

	public function queryByIdUsuario($value);

	public function queryByTiempo($value);

	public function queryByIp($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByIdVod($value);

	public function deleteByIdUsuario($value);

	public function deleteByTiempo($value);

	public function deleteByIp($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>