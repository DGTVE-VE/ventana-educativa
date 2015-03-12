<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface LibroConsumidoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return LibroConsumido 
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
 	 * @param libroConsumido primary key
 	 */
	public function delete($id_libro_consumido);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LibroConsumido libroConsumido
 	 */
	public function insert($libroConsumido);
	
	/**
 	 * Update record in table
 	 *
 	 * @param LibroConsumido libroConsumido
 	 */
	public function update($libroConsumido);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdLibro($value);

	public function queryByIdUsuario($value);

	public function queryByTiempo($value);

	public function queryByIp($value);

	public function queryByPaginaInicio($value);

	public function queryByPaginaFin($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);


	public function deleteByIdLibro($value);

	public function deleteByIdUsuario($value);

	public function deleteByTiempo($value);

	public function deleteByIp($value);

	public function deleteByPaginaInicio($value);

	public function deleteByPaginaFin($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);


}
?>