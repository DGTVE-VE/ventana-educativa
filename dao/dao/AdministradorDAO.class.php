<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface AdministradorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Administrador 
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
 	 * @param administrador primary key
 	 */
	public function delete($id_administrador);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Administrador administrador
 	 */
	public function insert($administrador);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Administrador administrador
 	 */
	public function update($administrador);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByCorreo($value);

	public function queryByTelefono($value);

	public function queryByCargo($value);

	public function queryByDependencia($value);

	public function queryByPassword($value);

	public function queryByIdInstitucion($value);

	public function queryBySuperadministrador($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByNombre($value);

	public function deleteByCorreo($value);

	public function deleteByTelefono($value);

	public function deleteByCargo($value);

	public function deleteByDependencia($value);

	public function deleteByPassword($value);

	public function deleteByIdInstitucion($value);

	public function deleteBySuperadministrador($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>