<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <base href="http://<?php print SERVER_URL; ?>" />
        <title>Ventana Educativa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/finish_view.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

        <!--        link para rating-->
        <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css" />

        <!--        link para reconocimiento de imagenes en iconos-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

        <script src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js'></script>
        <script src='js/knockout.mapping-latest.js'></script>


    </head>
    <body class="fondo-video">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 ">
                        <br><br>
                        <div class="embed-responsive embed-responsive-16by9" data-bind="with: capitulo" >     
                            <iframe id="video-finish" class="embed-responsive-item" 
                                    data-bind="attr: {src: 'https://www.youtube.com/embed/' + youtubeId}"></iframe>
                        </div>
                        
                        <div class="pull-right">
                         <input id="input-2" class="rating" data-show-clear="false" data-show-caption="false" data-size="xs" data-min="0" data-max="5" data-step="1">
                        </div>
                        
                         <div data-bind="with: capitulo">
                             
                            <input type="hidden" data-bind="attr:{'id':'idVod'}, value: idVod">
                            <input type="hidden" data-bind="attr:{'id':'idSerie'}, value: idSerie">
                        </div>

                    </div>
                </div>
                
                <br>

                <div class="row">
                    <div class="col-md-4">
                        <h1> ¿Busca algo más para ver?</h1>
                        <br>
                        <p>Tenemos estos titulos disponibles</p>
                        <a href="vod/"><button type="button" class="btn btn-success btn-lg">Regresar a la Navegación</button></a>
                    </div>
                    <br><br><br>
                    <div class="col-md-8" data-bind="foreach: { data: sugeridos}">
                        <div class="col-md-4" >
                            <a data-bind="attr:{'href':'vod/youtube/'+idVod()}"> 
                                <img class="img-responsive" data-toggle="tooltip" data-placement="right" 
                                     width="200" height="600"
                                     data-bind="attr: { src: thumbnail, title: titulo }"/>
                            </a>
                        </div>
                        <div data-bind="if: $root.Tooltip($index(), $parent.sugeridos().length)"></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


        <script src="js/efectos.js"></script>
        <script src="js/star-rating.js" type="text/javascript"></script>
        <script src="js/vod/finish.js"></script>
    </body>
</html>
