<!DOCTYPE html>
<html>
    <head>
        <base href="http://<?php print $_SERVER['HTTP_HOST']; ?>" />
        <meta charset="utf8" />        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <!--        link para slider pantalla completa-->
        <link href="css/full-slider.css" rel="stylesheet">
        <script src="js/jscript.js" type="text/javascript"></script>
        <!--        lin para rating-->
        <script src="js/star-rating.js" type="text/javascript"></script>
        <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
        <!--        link para reconocimiento de imagenes en iconos-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <!--        link para efectos reproducción de video-->
        <link rel="stylesheet"  href="css/lightGallery.css"/>        
        <script src="js/lightGallery.js"></script>
        <script src="js/lightGallery.min.js"></script>
        <!--        link para efectos de thumbnails-->
        <link href="css/adipoli.css" rel="stylesheet" type="text/css"/>        
        <script src="js/jquery.adipoli.min.js" type="text/javascript"></script>

        <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <link rel="stylesheet" href="css/vod.css">
        <script src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js'></script>
        <script src='js/knockout.mapping-latest.js'></script>
    </head>
    <body>      
        <header>
            <div class="row">
                <div id="wrapper">
                    <!--             Sidebar -->
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
                    </nav>

                    <!--             /#sidebar-wrapper 
                    
                                 Page Content -->

                    <div class="row navbar-fixed-top navbar-inverse">                       
                        <div class="col-md-4 col-xs-2">
                            <a href="#"><img class="hamburger" data-toggle="offcanvas" 
                                             src="/imagenes/logove.png" alt=""></a>
                        </div>
                        <div class="col-md-2 col-xs-5 text-right">
                            <a href="#"><img src="/imagenes/logoDGTVEsolo.png" alt=""></a>
                        </div>
                        <div class="col-md-2 visible-md visible-lg text-left" id="texto">
                            Televisión <br> Educativa
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2 pull-right col-xs-4">
                            <form role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control"  placeholder="Buscar">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!--/#page-content-wrapper--> 

            </div>

        </header>  
        <div class="container-fluid">           
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div id="divtitulo" data-bind="with: serie" >
                        <p data-bind="text: titulo"></p>
                    </div>
                </div>
                <div class="temporadas-text col-md-6">
                    <div id="texto" > 
                        Temporadas...........................
                        <div data-bind="foreach: temporadas">
                            <span class="num-temporada" data-bind="text: $data">  
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4" data-bind="with: serie">
                    <img width="100%" data-bind="attr:{src: thumbnail}"/>
                </div>
                <div class="col-md-5 series table-responsive content mCustomScrollbar">                    
                    <table class="table borderless " data-bind="foreach: capitulos">
                        <tr><td class="video" >
                                <a data-bind="attr:{'href':'/vod/youtube/'+idVod()}"> 
                                    <img width="200" data-bind="attr:{src: thumbnail}"/>
                                </a> 
                            </td>
                            <td class="opaco"data-bind="text: sinopsis">
                              
                            </td>
                        </tr>
                    </table>
                </div>         
            </div>
        </div>
        <script type="text/javascript" src="js/vod/serie.js"></script>        
    </body>
</html>