<?php
/**
 * Class that operate on table 'usuario'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-17 19:47
 */
class UsuarioMySqlDAO implements UsuarioDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UsuarioMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM usuario WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM usuario';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM usuario ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param usuario primary key
 	 */
	public function delete($id_usuario){
		$sql = 'DELETE FROM usuario WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_usuario);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UsuarioMySql usuario
 	 */
	public function insert($usuario){
		$sql = 'INSERT INTO usuario (nombre, sexo, nacimiento, nacionalidad, pais, region, ciudad, correo, facebook, google, live, twitter, avatar, background, fecha_creacion, fecha_modificacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($usuario->nombre);
		$sqlQuery->set($usuario->sexo);
		$sqlQuery->set($usuario->nacimiento);
		$sqlQuery->set($usuario->nacionalidad);
		$sqlQuery->set($usuario->pais);
		$sqlQuery->set($usuario->region);
		$sqlQuery->set($usuario->ciudad);
		$sqlQuery->set($usuario->correo);
		$sqlQuery->set($usuario->facebook);
		$sqlQuery->set($usuario->google);
		$sqlQuery->set($usuario->live);
		$sqlQuery->set($usuario->twitter);
		$sqlQuery->set($usuario->avatar);
		$sqlQuery->set($usuario->background);
		$sqlQuery->set($usuario->fechaCreacion);
		$sqlQuery->set($usuario->fechaModificacion);

		$id = $this->executeInsert($sqlQuery);	
		$usuario->idUsuario = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UsuarioMySql usuario
 	 */
	public function update($usuario){
		$sql = 'UPDATE usuario SET nombre = ?, sexo = ?, nacimiento = ?, nacionalidad = ?, pais = ?, region = ?, ciudad = ?, correo = ?, facebook = ?, google = ?, live = ?, twitter = ?, avatar = ?, background = ?, fecha_creacion = ?, fecha_modificacion = ? WHERE id_usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($usuario->nombre);
		$sqlQuery->set($usuario->sexo);
		$sqlQuery->set($usuario->nacimiento);
		$sqlQuery->set($usuario->nacionalidad);
		$sqlQuery->set($usuario->pais);
		$sqlQuery->set($usuario->region);
		$sqlQuery->set($usuario->ciudad);
		$sqlQuery->set($usuario->correo);
		$sqlQuery->set($usuario->facebook);
		$sqlQuery->set($usuario->google);
		$sqlQuery->set($usuario->live);
		$sqlQuery->set($usuario->twitter);
		$sqlQuery->set($usuario->avatar);
		$sqlQuery->set($usuario->background);
		$sqlQuery->set($usuario->fechaCreacion);
		$sqlQuery->set($usuario->fechaModificacion);

		$sqlQuery->setNumber($usuario->idUsuario);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM usuario';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM usuario WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySexo($value){
		$sql = 'SELECT * FROM usuario WHERE sexo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNacimiento($value){
		$sql = 'SELECT * FROM usuario WHERE nacimiento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNacionalidad($value){
		$sql = 'SELECT * FROM usuario WHERE nacionalidad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPais($value){
		$sql = 'SELECT * FROM usuario WHERE pais = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRegion($value){
		$sql = 'SELECT * FROM usuario WHERE region = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCiudad($value){
		$sql = 'SELECT * FROM usuario WHERE ciudad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCorreo($value){
		$sql = 'SELECT * FROM usuario WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFacebook($value){
		$sql = 'SELECT * FROM usuario WHERE facebook = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGoogle($value){
		$sql = 'SELECT * FROM usuario WHERE google = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLive($value){
		$sql = 'SELECT * FROM usuario WHERE live = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTwitter($value){
		$sql = 'SELECT * FROM usuario WHERE twitter = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAvatar($value){
		$sql = 'SELECT * FROM usuario WHERE avatar = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBackground($value){
		$sql = 'SELECT * FROM usuario WHERE background = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM usuario WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaModificacion($value){
		$sql = 'SELECT * FROM usuario WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM usuario WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySexo($value){
		$sql = 'DELETE FROM usuario WHERE sexo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNacimiento($value){
		$sql = 'DELETE FROM usuario WHERE nacimiento = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNacionalidad($value){
		$sql = 'DELETE FROM usuario WHERE nacionalidad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPais($value){
		$sql = 'DELETE FROM usuario WHERE pais = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRegion($value){
		$sql = 'DELETE FROM usuario WHERE region = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCiudad($value){
		$sql = 'DELETE FROM usuario WHERE ciudad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCorreo($value){
		$sql = 'DELETE FROM usuario WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFacebook($value){
		$sql = 'DELETE FROM usuario WHERE facebook = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGoogle($value){
		$sql = 'DELETE FROM usuario WHERE google = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLive($value){
		$sql = 'DELETE FROM usuario WHERE live = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTwitter($value){
		$sql = 'DELETE FROM usuario WHERE twitter = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAvatar($value){
		$sql = 'DELETE FROM usuario WHERE avatar = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBackground($value){
		$sql = 'DELETE FROM usuario WHERE background = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM usuario WHERE fecha_creacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaModificacion($value){
		$sql = 'DELETE FROM usuario WHERE fecha_modificacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UsuarioMySql 
	 */
	protected function readRow($row){
		$usuario = new Usuario();
		
		$usuario->idUsuario = $row['id_usuario'];
		$usuario->nombre = $row['nombre'];
		$usuario->sexo = $row['sexo'];
		$usuario->nacimiento = $row['nacimiento'];
		$usuario->nacionalidad = $row['nacionalidad'];
		$usuario->pais = $row['pais'];
		$usuario->region = $row['region'];
		$usuario->ciudad = $row['ciudad'];
		$usuario->correo = $row['correo'];
		$usuario->facebook = $row['facebook'];
		$usuario->google = $row['google'];
		$usuario->live = $row['live'];
		$usuario->twitter = $row['twitter'];
		$usuario->avatar = $row['avatar'];
		$usuario->background = $row['background'];
		$usuario->fechaCreacion = $row['fecha_creacion'];
		$usuario->fechaModificacion = $row['fecha_modificacion'];

		return $usuario;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return UsuarioMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>