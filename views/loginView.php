
<!DOCTYPE html>
<html>
    <head>        
        <base href="http://<?php print $_SESSION[CONFIG]['host']['url']; ?>">
        <title> Log in </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--Google Client ID de la aplicacion-->
        <meta name="google-signin-client_id" content="328365712357-vrrv7hpojcb6mtfji2goubuqc4rooma8.apps.googleusercontent.com">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.9.0/bootstrap-social.css" rel="stylesheet" type="text/css"> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <!-- Script for the login with Facebook -->
        <script src="js/facebook.js"></script>
        <!--Script para "renderizar" el boton (de Google), obtener los datos del usuario (en Google),
        "postearlos" al servidor y redireccionar al index del VOD-->
        <script src="js/googleLogin.js"></script>
        <link href="css/estilo.css" rel="stylesheet">
        <!--<link href="css/docs.css" rel="stylesheet" type="text/css">-->
        <link href="css/login.css" rel="stylesheet" type="text/css">

    </head>
    <body class="full-page" id="bodyLog">
        <div id="fb-root"></div>
        
        <!-- This script load de SDK for the login in facebook -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4&appId=1408909052733113";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <header class="page-header">
            <div class="row">
                <div id="wrapper">
                    <div class="row navbar-fixed-top navbar-inverse">                       
                        <div class="col-md-4 col-xs-8 text-right ">
                            <a href="#"><img class="text-center" src="imagenes/logoDGTVEsolo.png" alt=""></a>
                        </div>
                        <div class="col-md-4 hidden-xs text-left" id="textoBlanco">
                            Televisión <br> Educativa 
                        </div>
                        <div class="col-md-4 col-xs-4"><img class="text-center" src="imagenes/logoVE1.png" width="55" height="60" alt=""></div>
                    </div>
                </div>  
            </div>
        </header>  
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="center-block bubble">
                    <div class="col-md-12"><img class="center-block img-responsive" src="imagenes/logoVentana.png"></div>
                    <div class="col-md-12 text-center"><h1>Bienvenido</h1></div>
                    <div class="col-md-12 text-center"><h1>¡Conéctate!</h1><br></div>
                    <div class="col-md-2"></div>    
                    <div class="col-md-2 text-center"><a href="#" class="btn btn-social-icon btn-lg btn-twitter"><i class="fa fa-twitter"></i></a></div>

                    <div class="col-md-2 text-center"><a id="login" href="#" class="btn btn-social-icon btn-lg btn-facebook"><i class="fa fa-facebook"></i></a></div>
                    <!--Boton para "logeo" con Google-->
                    <div id="my-signin2"></div>
                    <div class="col-md-2 text-center"><a href="#" class="btn btn-social-icon btn-lg btn-dropbox"><i class="glyphicon glyphicon-envelope"></i></a></div>
                    <div class="col-md-2"></div>
                    <div id="status"></div>
                </div>
            </div>
        </div>

        <!--Incluyendo la libreria para integrar el "logeo" con Google-->
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    </body>
</html>
