<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface PaginaContenidoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return PaginaContenido 
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
 	 * @param paginaContenido primary key
 	 */
	public function delete($id_contenido);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PaginaContenido paginaContenido
 	 */
	public function insert($paginaContenido);
	
	/**
 	 * Update record in table
 	 *
 	 * @param PaginaContenido paginaContenido
 	 */
	public function update($paginaContenido);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdPag($value);

	public function queryByIdLibro($value);

	public function queryByX($value);

	public function queryByY($value);

	public function queryByUrl($value);

	public function queryByTipoContenido($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByIdPag($value);

	public function deleteByIdLibro($value);

	public function deleteByX($value);

	public function deleteByY($value);

	public function deleteByUrl($value);

	public function deleteByTipoContenido($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>