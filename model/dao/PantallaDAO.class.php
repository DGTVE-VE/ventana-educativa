<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface PantallaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Pantalla 
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
 	 * @param pantalla primary key
 	 */
	public function delete($id_pantalla);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Pantalla pantalla
 	 */
	public function insert($pantalla);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Pantalla pantalla
 	 */
	public function update($pantalla);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdPantallaPadre($value);

	public function queryByNombre($value);

	public function queryByDescripcion($value);

	public function queryByAlto($value);

	public function queryByAncho($value);

	public function queryByThumbnail($value);

	public function queryByPosicion($value);

	public function queryByColspan($value);

	public function queryByRowspan($value);

	public function queryByFilas($value);

	public function queryByColumnas($value);

	public function queryByTipoVentana($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByIdPantallaPadre($value);

	public function deleteByNombre($value);

	public function deleteByDescripcion($value);

	public function deleteByAlto($value);

	public function deleteByAncho($value);

	public function deleteByThumbnail($value);

	public function deleteByPosicion($value);

	public function deleteByColspan($value);

	public function deleteByRowspan($value);

	public function deleteByFilas($value);

	public function deleteByColumnas($value);

	public function deleteByTipoVentana($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>