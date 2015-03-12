<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface CategoriasVodDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CategoriasVod 
	 */
	public function load($categoriasCategoria, $vodIdVod);

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
 	 * @param categoriasVod primary key
 	 */
	public function delete($categoriasCategoria, $vodIdVod);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CategoriasVod categoriasVod
 	 */
	public function insert($categoriasVod);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CategoriasVod categoriasVod
 	 */
	public function update($categoriasVod);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>