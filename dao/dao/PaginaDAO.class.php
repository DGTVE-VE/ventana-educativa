<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface PaginaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Pagina 
	 */
	public function load($idPag, $idLibro);

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
 	 * @param pagina primary key
 	 */
	public function delete($idPag, $idLibro);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Pagina pagina
 	 */
	public function insert($pagina);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Pagina pagina
 	 */
	public function update($pagina);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUrl($value);

	public function queryByNumeroInterno($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByUrl($value);

	public function deleteByNumeroInterno($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>