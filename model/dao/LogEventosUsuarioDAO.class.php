<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface LogEventosUsuarioDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return LogEventosUsuario 
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
 	 * @param logEventosUsuario primary key
 	 */
	public function delete($id_log_eventos_usuario);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LogEventosUsuario logEventosUsuario
 	 */
	public function insert($logEventosUsuario);
	
	/**
 	 * Update record in table
 	 *
 	 * @param LogEventosUsuario logEventosUsuario
 	 */
	public function update($logEventosUsuario);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdUsuario($value);

	public function queryByLog($value);

	public function queryByTipoEvento($value);

	public function queryByDireccionIp($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByIdUsuario($value);

	public function deleteByLog($value);

	public function deleteByTipoEvento($value);

	public function deleteByDireccionIp($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>