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
    if (count($usuarioBD) == 0){
        // No existe el usuario
        $usuario->google = $user->getUserId();
        $usuario->correo = $user->getEmail ();
        $usuario->nombre = $user->getNickname ();
        $daoUsuario->insert($usuario);
    }    
    $_SESSION['logoutUrl'] = UserService::createLogoutUrl('/');
    $_SESSION['usuario'] = $usuario;
    header('Location: vod/index');
} else {
    $_SESSION['loginUrl'] = UserService::createLoginUrl('/');
    header('Location: login.php');
}

