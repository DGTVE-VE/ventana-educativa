<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es-MX">
    <head>
        <title></title>
        <base href="http://<?php print $_SESSION[CONFIG]['host']['url']; ?>">
              <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<meta name="google-signin-client_id" content="429845958607-837g2j6dfn5lm42krcalg6jcrsqanrlc.apps.googleusercontent.com">-->
        <meta name="google-signin-client_id" content="101496435288510222468">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>        
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">        
                
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js'></script>
        <script type="text/javascript" src='js/knockout.mapping-latest.js'></script>    
        <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/facebook.js"></script>
        <script src="js/googleLogin.js"></script>
         <!--Incluyendo la libreria para integrar el "deslogueo" con Google-->
        <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>

        <script> var api = <?php print json_encode($_SESSION[CONFIG]['api']['url']); ?>; </script>
        <script src="js/vod/search.js"></script>
    </head>
    <body class="back"> 

        <!-- This script load de SDK for the login in facebook -->
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
                
            }(document, 'script', 'facebook-jssdk'));
    </script>
        
        <header id="menu" class="page-header fixed-top">
            <!--Menú para resolución grande-->
            <div id="wrapper" class="hidden-xs">
                <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper"> 
                    <ol class="nav sidebar-nav"  data-bind="foreach:categorias">                                     
                        <li data-bind="css: $index() == 0 ? ' sidebar-brand' : ''">                    
                        <!--<li><a href="#" data-bind="text:categoria"></a></li>-->                    
                        <li><a data-bind="text:categoria, attr:{'href':'vod/#'+categoria}"></a></li>
                    </ol>
                </nav>
                <div class="row">            
                    <div class="col-md-12 col-xs-12 col-lg-12 navbar-fixed-top navbar-inverse">                       
                        <div class="col-md-3 col-xs-2 col-lg-3">
                            <img class="hamburger" 
                                 data-toggle="offcanvas" 
                                 src="imagenes/logovem.png" 
                                 alt="">
                        </div>
                        <div class="col-md-3 col-xs-5 col-lg-3 text-right">
                            <a href="#"><img src="imagenes/logoDGTVEsolo.png" alt=""></a>
                        </div>
                        <div class="col-md-2 visible-lg text-left" id="VHtexto">
                            Televisión <br> Educativa
                        </div>
                        <div class="col-md-1 col-xs-2">
                            <a id="logout" class="logout">
                                <p class="glyphicon glyphicon-off VHcerrarSesion logout"></p>
                            </a>
                            
                            
                        </div>
                        <div class="col-md-3 col-xs-3 col-lg-3 pull-right">
                            <!-- add search form -->
                            <form class="navbar-form navbar-right" role="search" onsubmit="return false">
                                <div class="input-group">
                                    <input id="searchText" type="text" class="form-control" placeholder="Buscar" onkeydown="goSearchEnter(event)">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn glyphicon glyphicon-search" onclick="goSearch()">
                                            <!--<span class=""></span>-->
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!--/#page-content-wrapper--> 
            </div>
            <!--Menú para resolución pequeña-->
            <nav class="navbar navbar-default navbar-fixed-top visible-xs hidden-lg" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle col-md-3" data-toggle="collapse" data-target="#navbar1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#"><img class="col-md-3" src="imagenes/logovem.png"></a>
                        <a href="#"><img class="col-md-3" src="imagenes/logoDGTVEsolo.png" alt=""></a>
                        
                        <a id="logout" class="logout">
                            <label class="glyphicon col-md-3 glyphicon-off VHcerrarSesion"></label>
                        </a>
                        
                    </div>
                    <!-- add menu -->
                    <div class="collapse navbar-collapse" id="navbar1">
                        <ul class="nav navbar-nav" data-bind="foreach:categorias">
                            <li data-bind="css: $index() == 0 ? ' sidebar-brand' : ''">                    
<!--                            <li><a href="#" data-bind="text:categoria"></a></li> -->
                                <li><a data-bind="text:categoria, attr:{'href':'vod/#'+categoria}"></a></li>
                        </ul>
                        <!-- add search form -->
                        <form class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn glyphicon glyphicon-search">
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>

                </div>
            </nav>    
        </header> 

        <?php print $_SESSION[CONTENIDO_INCLUIDO]; ?>


    </body>
<!--</html>-->
<script type="text/javascript" src="js/vod/jsheader.js"></script>
