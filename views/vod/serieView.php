<!DOCTYPE html>
<html>
    <head>
        <base href="http://<?php print SERVER_URL; ?>" />
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
        <?php include 'views/header.php'; ?>
        <div class="container-fluid">           
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div id="divtitulo" data-bind="with: serie" >
                        <input type="hidden" data-bind="attr:{'id':'idSerie'}, value:idSerie">
                        <p data-bind="text: titulo"></p>
                    </div>
                </div>
                <!--                <div class="temporadas-text col-md-6">
                                    <div id="texto" > 
                                        Temporadas...........................
                                        <div data-bind="foreach: temporadas">
                                            <span class="num-temporada" data-bind="text: $data">  
                                            </span>
                                        </div>
                                    </div>
                                </div>-->
            </div>
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-4" data-bind="with: serie">
                    <a href="">
                        <img width="100%" data-bind="attr:{src: thumbnail}"/>
                    </a>                    
                    <div id="divsinopsis" class="col-xs-6 col-md-10 opaco content mCustomScrollbar mCS-autoHide" data-bind="text: descripcion"></div>
                </div>

                <div class="col-md-5 series table-responsive content mCustomScrollbar">                    
                    <table class="table borderless " data-bind="foreach: capitulos">
                        <tr><td class="video text-center" >
                                <a data-bind="attr:{'href':'vod/youtube/'+idVod()}"> 
                                    <img width="200" data-bind="attr:{src: thumbnail}"/>
                                </a> 
                            </td>
                            <td class="opaco hidden-xs text-justify" data-bind="text: sinopsis">
                            </td>                            
                        </tr>
                    </table>
                </div>                
                <div class="col-md-12 ">
                    <div class="col-md-2 visible-lg"></div>
                    <div class="col-md-2 col-xs-12">
                        <a href="#"><span class="glyphicon glyphicon-play"></span></a><span id="textoBlanco">Agregar a mi lista</span>                                               
                        <input id="input-1" class="rating" data-show-clear="false" data-show-caption="false" data-size="xs" data-min="0" data-max="5" data-step="1">
                    </div>    
                    <div class="col-md-2 col-xs-12 social">
                        <span class="glyphicon glyphicon-share"></span><span id="textoBlanco">   Compartir</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-lg fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12"></div>
                </div>
                    <!--<div class="col-md-12"><input id="input-1" class="rating" data-show-clear="false" data-show-caption="false" data-size="xs" data-min="0" data-max="5" data-step="1"></div>-->
            </div>
        </div>

        <script type="text/javascript" src="js/vod/serie.js"></script>        
    </body>
</html>