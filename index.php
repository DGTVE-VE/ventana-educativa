<?php

require_once 'autoload.php';
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
session_start();

$usuario = new Usuario;
$daoUsuario = DAOFactory::getUsuarioDAO();

/** @var $user User */
$user = UserService::getCurrentUser();

if (isset($user)) {
    $usuarioBD = $daoUsuario->queryByGoogle($user->getUserId());
    if ( ! $usuarioBD){
        // No existe el usuario
        $usuario->google = $user->getUserId();
        $usuario->correo = $user->getEmail ();
        $usuario->nombre = $user->getNickname ();
        $daoUsuario->insert($usuario);
    }    
    else{        
        $usuario = $usuarioBD;
    }
    $_SESSION['logoutUrl'] = UserService::createLogoutUrl('/close');
    $_SESSION['usuario'] = $usuario;
    header('Location: vod/index');
} else {    
    $_SESSION['loginUrl'] = UserService::createLoginUrl('/');
    header('Location: login');
}

