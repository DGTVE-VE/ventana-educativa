
<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="http://<?php print SERVER_URL; ?>" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Ventana Educativa</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified JavaScript -->
        <link href="css/estilo.css" rel="stylesheet">
        <!--        link para slider pantalla completa-->
        <link href="css/full-slider.css" rel="stylesheet">
        <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
        <!--        link para reconocimiento de imagenes en iconos-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <!--        link para efectos reproducciÃ³n de video-->
        <link rel="stylesheet"  href="css/lightGallery.css"/>        
        <!--<script src="../js/lightGallery.js"></script>-->
        <!--        link para efectos de thumbnails-->
        <link href="css/adipoli.css" rel="stylesheet" type="text/css"/>        
        <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css"/>
        <!-- Script for the login with Facebook -->
        <script src="js/facebook.js"></script>

    </head>

    <body class="back full-page">
        <?php include 'views/header.php'; ?>

        <!--         Full Page Image Background Carousel Header -->
        <div id="myCarousel1" class="carousel slide">
            <!--             Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>

            <!--Wrapper for Slides--> 
            <div class="carousel-inner" data-bind="foreach: recomendaciones">     
                <!--El primer elemento debe tener la clase 'active'-->
                <div class="item" data-bind="css:{'active':$index() == 0}">
                    <div class="fill">;
                        <div class="container" id="contenidos">
                            <div class="col-xs-6 col-md-9" id="divtitulo" 
                                 data-bind="text: titulo">
                            </div>
                            <div id="divvideo" class="col-xs-9 col-md-6">
                                <a data-bind="attr:{href: 'vod/serie/'+idSerie()}" class="thumbnail thumb-sinopsis">
                                    <img data-bind="attr:{src: thumbnail}" alt="Imagen serie">
                                </a>
                            </div>
                            <div id="divsinopsis" class="col-xs-6 col-md-10 content mCustomScrollbar" data-bind="text: descripcion">  </div>
                            <div class="col-md-5 col-xs-12">
                                <div class="col-md-12">
                                    <a href="#" class="agregar"><span class="glyphicon glyphicon-thumbs-up"> </span> Agregar a mi lista</a>
                                </div>
                                <div class="col-md-12 col-xs-12" id="rating">
                                    <form>
                                        <input id="input-6a" data-show-clear="false" data-show-caption="false" class="rating" data-size="xs" data-stars="5" data-step="0.1"/>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-12 social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-lg fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--             Controls -->
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>
        <!--Page Content--> 


        <div class="container-fluid" data-bind="foreach: { data: categorias}">
            <div class="row">
                <div id="titserie" data-bind="text: categoria"></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-4"></div>
                <div class="serie-slider col-md-10 col-lg-10 col-sm-6 col-xs-4" data-bind="foreach: { data: series}">   
                    <div id="img-contenedor" data-bind="if: $root.initSlick($index(), $parent.series().length)">
                        <a data-bind="attr:{href:'vod/serie/'+idSerie()} ">
                            <img class="seriethum" data-bind="attr:{src:thumbnail}" alt="Thumbnail">
                        </a>
                    </div>                    
                </div> 
                <div class="col-lg-1 col-md-1  col-sm-3 col-xs-4"></div>
            </div>
        </div>
        <hr>
        <!--Footer--> 
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Ventana Educativa 2015.</p>
                    <p>DirecciÃ³n General de TelevisiÃ³n Educativa.</p>
                </div>
            </div>
            <!--             /.row -->
        </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/lightGallery.min.js"></script>
    <script src="js/jscript.js" type="text/javascript"></script>
    <!--        lin para rating-->
    <script src="js/star-rating.js" type="text/javascript"></script>
    <script src="js/jquery.adipoli.min.js" type="text/javascript"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js'></script>
    <script src='js/knockout.mapping-latest.js'></script>
    <script src="js/scrollbar.js"></script>        
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
          $(".video").lightGallery();
      });
      var api = <?php print json_encode($_SESSION[CONFIG]['api']['url']);?>;
    </script>
    <script type="text/javascript" src="js/vod/index.js"></script>
</body>


</html>
