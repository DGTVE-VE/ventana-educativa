<?php

use google\appengine\api\users\User;
use google\appengine\api\users\UserService;

class IndexController extends _BaseController{
  
  public function login (){
    $_SESSION['loginUrl'] = UserService::createLoginUrl('/');
    include 'views/loginView.php';
  }

  public function defaultAction() {
    $memcache = new Memcache;
    $memcache->flush();
    $usuario = new Usuario;
    $daoUsuario = DAOFactory::getUsuarioDAO();
    /** @var $user User */
    $user = UserService::getCurrentUser();

    if (isset($user)) {
      $usuarioBD = $daoUsuario->queryByGoogle($user->getUserId());
      if (!$usuarioBD) {
        // No existe el usuario
        $usuario->google = $user->getUserId();
        $usuario->correo = $user->getEmail();
        $usuario->nombre = $user->getNickname();
        $daoUsuario->insert($usuario);
      } else {
        $usuario = $usuarioBD;
      }
      $_SESSION['logoutUrl'] = UserService::createLogoutUrl('/index/closeSession');
      $_SESSION['usuario'] = $usuario;
      include 'vod/index.php';      
    } else {
      $this->login ();      
    }
  }

}
