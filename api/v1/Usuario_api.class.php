<?php

class Usuario_api {
  
  public function update (){
    print 'hola';
    
  }
  
  public function loginFacebook() {
        $dao = DAOFactory::getUsuarioDAO();
        $facebookId = $_POST['idUser'];
        $facebookUser = $_POST['nameUser'];
        $facebokUserImage = $_POST['imageUser'];
        $facebookUserEmail = $_POST['emailUser'];
        $usuario = unserialize ($_SESSION['usuario']);        
        $usuario = $dao->queryByFacebook($facebookId);
        if ($usuario == null) {
            $usuario = new Usuario();
            $usuario->facebook = $facebookId;
            $usuario->nombre = $facebookUser;
            $usuario->avatar = $facebokUserImage;
            $usuario->correo = $facebookUserEmail;
            print $dao->insert($usuario);
            $_SESSION[USUARIO] = serialize($usuario);
//            print "usuario nuevo logeado";
        } else {
            $_SESSION[USUARIO] = serialize($usuario);
//            print "usuario logeado";
//            include 'views/vod/indexView.php';
        }
    }

}