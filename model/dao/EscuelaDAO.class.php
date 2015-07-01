<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface EscuelaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Escuela 
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
 	 * @param escuela primary key
 	 */
	public function delete($id_escuela);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Escuela escuela
 	 */
	public function insert($escuela);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Escuela escuela
 	 */
	public function update($escuela);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByDireccion($value);

	public function queryByColonia($value);

	public function queryByMunicipio($value);

	public function queryByEstado($value);

	public function queryByCodigoPostal($value);

	public function queryByClave($value);

	public function queryByPrivada($value);

	public function queryByNivel($value);

	public function queryByInstitucion($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByNombre($value);

	public function deleteByDireccion($value);

	public function deleteByColonia($value);

	public function deleteByMunicipio($value);

	public function deleteByEstado($value);

	public function deleteByCodigoPostal($value);

	public function deleteByClave($value);

	public function deleteByPrivada($value);

	public function deleteByNivel($value);

	public function deleteByInstitucion($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>