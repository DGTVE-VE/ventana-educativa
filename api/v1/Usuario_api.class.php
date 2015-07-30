<?php

class Usuario_api {

  //Funcion que verifica si el usuario ya esta registrado en la BD, de no ser asi, inserta sus datos. 
  //Se crea la sesion del usuario.
  public function loginGoogle() {

        $dao = DAOFactory::getUsuarioDAO();
        $GoogleID = $_POST['GoogleID'];
        $GoogleName = $_POST['GoogleName'];
        $GoogleImageURL = $_POST['GoogleImageURL'];
        $GoogleEmail = $_POST['GoogleEmail'];
        $usuario = $dao->queryByGoogle($GoogleID);
        
        if ($usuario == null) {
            $usuario = $dao->queryByCorreo($GoogleEmail);
            if ($usuario != null) {
                $usuario->google = $GoogleID;
                print $dao->update($usuario); 
            } else {
                $usuario = new Usuario();
                $usuario->google = $GoogleID;
                $usuario->nombre = $GoogleName;
                $usuario->avatar = $GoogleImageURL;
                $usuario->correo = $GoogleEmail;
                print $dao->insert($usuario);
            } 
        }
        $_SESSION[USUARIO] = serialize($usuario);
    }

    //Método para iniciar sesión con facebook
    public function loginFacebook() {
        print 'entro';
        $dao = DAOFactory::getUsuarioDAO();
        $facebookId = $_POST['idUser'];
        //print 'fb→'.$facebookId.'<br>';
        $facebookUser = $_POST['nameUser'];
        //print 'fb user→'.$facebookUser.'<br>';
        $facebokUserImage = $_POST['imageUser'];
        $facebookUserEmail = $_POST['emailUser'];
        //print 'fb user email→'.$facebookUserEmail.'<br>';
        $usuario = unserialize($_SESSION['usuario']);
        $usuario = $dao->queryByFacebook($facebookId);

        if ($usuario == null) {
            $usuario = $dao->queryByCorreo($facebookUserEmail);
            if ($usuario != null) {
                $usuario->facebook = $facebookId;
//                print 'aqui: ';
//                var_dump ($usuario);
                print $dao->update($usuario);
            } else {
                $usuario = new Usuario();
                $usuario->facebook = $facebookId;
                $usuario->nombre = $facebookUser;
                $usuario->avatar = $facebokUserImage;
                $usuario->correo = $facebookUserEmail;
                print $dao->insert($usuario);
            }
        }
        $_SESSION[USUARIO] = serialize($usuario);
    }

}