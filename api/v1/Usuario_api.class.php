<?php

class Usuario_api {

  //Funcion que verifica si el usuario ya esta registrado en la BD y actualiza o inserta sus datos.
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
            if ($usuario == null) {
                $usuario = new Usuario();
                $usuario->google = $GoogleID;
                $usuario->nombre = $GoogleName;
                $usuario->avatar = $GoogleImageURL;
                $usuario->correo = $GoogleEmail;
                print $dao->insert($usuario);
                $_SESSION[USUARIO] = serialize($usuario);
            }
            else {
                $usuario->google = $GoogleID;
                print $dao->update($usuario);
                $_SESSION[USUARIO] = serialize($usuario);
            }
        } else {
            $_SESSION[USUARIO] = serialize($usuario);
        }

  }
  

    //Método para iniciar sesión con facebook
    public function loginFacebook() {

        $dao = DAOFactory::getUsuarioDAO();
        $facebookId = $_POST['idUser'];
        $facebookUser = $_POST['nameUser'];
        $facebookUserImage = $_POST['imageUser'];
        $facebookUserEmail = $_POST['emailUser'];
        
        $usuario = $dao->queryByFacebook($facebookId);
        if ($usuario == null) {
            $usuario = $dao->queryByCorreo($facebookUserEmail);
            if ($usuario == null) {
                $usuario = new Usuario();
                $usuario->facebook = $facebookId;
                $usuario->nombre = $facebookUser;
                $usuario->avatar = $facebookUserImage;
                $usuario->correo = $facebookUserEmail;
                print $dao->insert($usuario);
                $_SESSION[USUARIO] = serialize($usuario);
            } else {
                $usuario->facebook = $facebookId;
                print $dao->update($usuario);
                $_SESSION[USUARIO] = serialize($usuario);
            }
        } else {
            $_SESSION[USUARIO] = serialize($usuario);
        }
    }
}