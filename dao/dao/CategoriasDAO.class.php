<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface CategoriasDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Categorias 
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
 	 * @param categoria primary key
 	 */
	public function delete($categoria);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Categorias categoria
 	 */
	public function insert($categoria);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Categorias categoria
 	 */
	public function update($categoria);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDescripcion($value);

	public function queryByCategoriaPadre($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByDescripcion($value);

	public function deleteByCategoriaPadre($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>