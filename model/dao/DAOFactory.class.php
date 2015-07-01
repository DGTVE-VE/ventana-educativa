<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AdministradorDAO
	 */
	public static function getAdministradorDAO(){
		return new AdministradorMySqlExtDAO();
	}

	/**
	 * @return CategoriasDAO
	 */
	public static function getCategoriasDAO(){
		return new CategoriasMySqlExtDAO();
	}

	/**
	 * @return CategoriasVodDAO
	 */
	public static function getCategoriasVodDAO(){
		return new CategoriasVodMySqlExtDAO();
	}

	/**
	 * @return EscuelaDAO
	 */
	public static function getEscuelaDAO(){
		return new EscuelaMySqlExtDAO();
	}

	/**
	 * @return InstitucionDAO
	 */
	public static function getInstitucionDAO(){
		return new InstitucionMySqlExtDAO();
	}

	/**
	 * @return LibroDAO
	 */
	public static function getLibroDAO(){
		return new LibroMySqlExtDAO();
	}

	/**
	 * @return LibroConsumidoDAO
	 */
	public static function getLibroConsumidoDAO(){
		return new LibroConsumidoMySqlExtDAO();
	}

	/**
	 * @return LogErroresDAO
	 */
	public static function getLogErroresDAO(){
		return new LogErroresMySqlExtDAO();
	}

	/**
	 * @return LogEventosAdministradorDAO
	 */
	public static function getLogEventosAdministradorDAO(){
		return new LogEventosAdministradorMySqlExtDAO();
	}

	/**
	 * @return LogEventosUsuarioDAO
	 */
	public static function getLogEventosUsuarioDAO(){
		return new LogEventosUsuarioMySqlExtDAO();
	}

	/**
	 * @return OpinionLibroDAO
	 */
	public static function getOpinionLibroDAO(){
		return new OpinionLibroMySqlExtDAO();
	}

	/**
	 * @return OpinionSerieDAO
	 */
	public static function getOpinionSerieDAO(){
		return new OpinionSerieMySqlExtDAO();
	}

	/**
	 * @return OpinionVodDAO
	 */
	public static function getOpinionVodDAO(){
		return new OpinionVodMySqlExtDAO();
	}

	/**
	 * @return PaginaDAO
	 */
	public static function getPaginaDAO(){
		return new PaginaMySqlExtDAO();
	}

	/**
	 * @return PaginaContenidoDAO
	 */
	public static function getPaginaContenidoDAO(){
		return new PaginaContenidoMySqlExtDAO();
	}

	/**
	 * @return PantallaDAO
	 */
	public static function getPantallaDAO(){
		return new PantallaMySqlExtDAO();
	}

	/**
	 * @return SerieDAO
	 */
	public static function getSerieDAO(){
		return new SerieMySqlExtDAO();
	}

	/**
	 * @return SerieCategoriasDAO
	 */
	public static function getSerieCategoriasDAO(){
		return new SerieCategoriasMySqlExtDAO();
	}

	/**
	 * @return TipoPantallaDAO
	 */
	public static function getTipoPantallaDAO(){
		return new TipoPantallaMySqlExtDAO();
	}

	/**
	 * @return UsuarioDAO
	 */
	public static function getUsuarioDAO(){
		return new UsuarioMySqlExtDAO();
	}

	/**
	 * @return UsuarioEscuelaDAO
	 */
	public static function getUsuarioEscuelaDAO(){
		return new UsuarioEscuelaMySqlExtDAO();
	}

	/**
	 * @return VodDAO
	 */
	public static function getVodDAO(){
		return new VodMySqlExtDAO();
	}

	/**
	 * @return VodConsumidoDAO
	 */
	public static function getVodConsumidoDAO(){
		return new VodConsumidoMySqlExtDAO();
	}


}
?>