
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
        <meta name="google-signin-client_id" content="429845958607-837g2j6dfn5lm42krcalg6jcrsqanrlc.apps.googleusercontent.com">

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
        
         <!--Incluyendo la libreria para integrar el "logeo" con Google-->
        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
        
        
        
        <!--<link href="css/estilo.css" rel="stylesheet">-->
        <!--<link href="css/docs.css" rel="stylesheet" type="text/css">-->
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <script> var api = <?php print json_encode($_SESSION[CONFIG]['api']['url']); ?>; </script>
        <!--Script para "renderizar" el boton (de Google), obtener los datos del usuario (en Google),
        "postearlos" al servidor y redireccionar al index del VOD-->
        <script src="js/googleLogin.js"></script>
    </head>
    <body class="full-page" id="bodyLog">
        
         <!--This script load de SDK for the login in facebook--> 
        <div id="fb-root"></div>
        <script>
            
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_LA/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <header class="page-header">
            <div class="row">
                <div id="wrapper" class="col-md-12">
                    <div class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper"> 
                        <div class="col-md-6 col-xs-8 text-right">
                            <a href="#"><img class="text-right" src="imagenes/logoDGTVEsolo.png" alt=""></a>
                        </div>
                        <div class="col-md-6 col-xs-4  text-left" id="textoBlanco">
                            Televisión <br> Educativa 
                        </div>
                    </div>
                </div>  
            </div>
        </header>  
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="center-block bubble">
                    <div class="col-md-12"><img class="center-block" id="VLlogove" src="imagenes/logove.png"></div>
                    <div class="col-md-12 text-center"><h1>Bienvenido</h1></div>
                    <div class="col-md-12 text-center"><h1>¡Conéctate!</h1><br></div>
                    <div>
                        <!--                        <div class="col-md-2 text-center">
                                                    <a href="#" class="btn btn-social-icon btn-lg btn-twitter"><i class="fa fa-twitter"></i></a>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <a href="#" class="btn btn-social-icon btn-lg btn-dropbox"><i class="glyphicon glyphicon-envelope"></i></a>
                                                </div>-->
                        <div class="col-md-6 text-center">
                            <a id="login" href="#" class="btn btn-social-icon btn-group-justified btn-facebook"><i class="fa fa-facebook"></i></a>
                        </div>
                        <!--Boton para "logeo" con Google-->
                        <div class="col-md-6 text-center">
                            <a id="my-signin2" class="btn btn-social-icon btn-group-justified btn-google"><i id="btngoogle-plus" class="fa fa-google-plus"></i></a>
                        </div> 
                        <button class="logout">Cerrar Sesión</button>
                    </div>
                </div>
            </div>
        </div>

       
    </body>
</html>
