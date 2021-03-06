<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
interface LibroDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Libro 
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
 	 * @param libro primary key
 	 */
	public function delete($id_libro);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Libro libro
 	 */
	public function insert($libro);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Libro libro
 	 */
	public function update($libro);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAutor($value);

	public function queryByColaboradores($value);

	public function queryByPropietario($value);

	public function queryByTitulo($value);

	public function queryBySubtitulo($value);

	public function queryByEdicion($value);

	public function queryByEditorial($value);

	public function queryByLugar($value);

	public function queryByFechaPublicacion($value);

	public function queryByAnioPublicacion($value);

	public function queryByPaginas($value);

	public function queryBySerie($value);

	public function queryByNumeroSerie($value);

	public function queryByVolumen($value);

	public function queryByDescripcion($value);

	public function queryByIsbn10($value);

	public function queryByIsbn13($value);

	public function queryByEan13($value);

	public function queryByIssn($value);

	public function queryByIdioma($value);

	public function queryByTituloTraducido($value);

	public function queryByUrl($value);

	public function queryByCalificacion($value);

	public function queryByTemas($value);

	public function queryByTags($value);

	public function queryByThumbnail($value);

	public function queryByIdInstitucion($value);

	public function queryByFechaCreacion($value);

	public function queryByFechaModificacion($value);

	public function queryByVisible($value);


	public function deleteByAutor($value);

	public function deleteByColaboradores($value);

	public function deleteByPropietario($value);

	public function deleteByTitulo($value);

	public function deleteBySubtitulo($value);

	public function deleteByEdicion($value);

	public function deleteByEditorial($value);

	public function deleteByLugar($value);

	public function deleteByFechaPublicacion($value);

	public function deleteByAnioPublicacion($value);

	public function deleteByPaginas($value);

	public function deleteBySerie($value);

	public function deleteByNumeroSerie($value);

	public function deleteByVolumen($value);

	public function deleteByDescripcion($value);

	public function deleteByIsbn10($value);

	public function deleteByIsbn13($value);

	public function deleteByEan13($value);

	public function deleteByIssn($value);

	public function deleteByIdioma($value);

	public function deleteByTituloTraducido($value);

	public function deleteByUrl($value);

	public function deleteByCalificacion($value);

	public function deleteByTemas($value);

	public function deleteByTags($value);

	public function deleteByThumbnail($value);

	public function deleteByIdInstitucion($value);

	public function deleteByFechaCreacion($value);

	public function deleteByFechaModificacion($value);

	public function deleteByVisible($value);


}
?>