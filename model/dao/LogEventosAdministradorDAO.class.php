<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface LogEventosAdministradorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return LogEventosAdministrador 
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
 	 * @param logEventosAdministrador primary key
 	 */
	public function delete($id_log_eventos_administrador);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LogEventosAdministrador logEventosAdministrador
 	 */
	public function insert($logEventosAdministrador);
	
	/**
 	 * Update record in table
 	 *
 	 * @param LogEventosAdministrador logEventosAdministrador
 	 */
	public function update($logEventosAdministrador);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdAdministrador($value);

	public function queryByLog($value);

	public function queryByTipoEvento($value);

	public function queryByDireccionIp($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByIdAdministrador($value);

	public function deleteByLog($value);

	public function deleteByTipoEvento($value);

	public function deleteByDireccionIp($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>