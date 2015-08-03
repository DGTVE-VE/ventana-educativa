<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ventana Educativa</title>
        <base href="http://<?php print SERVER_URL; ?>" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Ventana Educativa México Aprende">
        <meta name="author" content="DGTVE">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" type='text/css'>        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" type='text/css'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:600' type='text/css'> 
        <!-- Script for the login with Facebook -->
        <script src="js/facebook.js"></script>
    </head>
    <body class="back full-page">
        <header class="page-header">
            <div class="row">
                <div id="wrapper">
<!--                                 Sidebar 
                    <nav class="navbar navbar-inverse navbar-fixed-top" 
                         id="sidebar-wrapper" role="navigation">
                        <ul class="nav sidebar-nav">
                            <li class="sidebar-brand">
                            <li> <a href="#">Lo Más Visto</a> </li>
                            <li> <a href="#">Nuevos Lanzamientos</a> </li>
                            <li> <a href="#">Acción</a> </li>
                            <li> <a href="#">Aventura</a> </li>
                            <li> <a href="#">Animación</a> </li>
                            <li> <a href="#">Comedia</a> </li>
                            <li> <a href="#">Cultura</a> </li>
                            <li> <a href="#">Documentales</a> </li> 
                            <li> <a href="#">Familia</a> </li> 
                            <li> <a href="#">Ficción</a> </li> 
                            <li> <a href="#">Niños</a> </li>
                            <li> <a href="#">Películas</a> </li>
                            <li> <a href="#">Terror</a> </li>
                        </ul>
                    </nav>-->
                    <div class="row navbar-fixed-top navbar-inverse">                       
                        <div class="col-md-4 col-xs-2">
                            <a href="#"><img class="hamburger" 
                                             data-toggle="offcanvas" 
                                             src="imagenes/logove.png" 
                                             alt=""
                                             height="48px"></a>
                        </div>
                        <div class="col-md-2 col-xs-5 text-right">
                            <a href="#"><img src="imagenes/logoDGTVEsolo.png" alt=""></a>
                        </div>
                        <div class="col-md-2 visible-md visible-lg text-left" id="texto">
                            Televisión <br> Educativa
                        </div>
                        <div class="col-md-2"> 
                            <a id="logout" href="index/cerrarSesion" > Cerrar sesión </a>
                            <button id="logout">Cerrar</button>
                        </div>
                        <div class="col-md-2 pull-right col-xs-4">
                            
                                <div class="input-group">
                                    <input id="searchText" type="text" class="form-control"  placeholder="Buscar" onkeydown="if(event.keyCode==13) goSearch()">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" onclick="goSearch()">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            
                        </div>

                    </div>
                </div>
                <!--/#page-content-wrapper--> 

            </div>

        </header> 
        
        <div class="container" data-bind="foreach:capitulos ">
            <div class="row">
                <div class="col-md-4">
                    <a data-bind="attr:{href:'/ventana-educativa/vod/youtube/'+idVod()}"><img data-bind="attr:{src: thumbnail}"></a>
                </div>
                <div class="col-md-2" >
                    <a data-bind="attr:{href:'/ventana-educativa/vod/youtube/'+idVod()}, text:titulo"></a>
                </div>
                <div class="col-md-4" data-bind="text:sinopsis"></div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js'></script>
        <script src='js/knockout.mapping-latest.js'></script>
        <script>
            function goSearch (){
//                alert (document.getElementById("searchText").value);
                window.location.assign("/ventana-educativa/vod/search/"+document.getElementById("searchText").value);
            }
            
        </script>
        <script src="js/vod/search.js"></script>
    </body>
</html>