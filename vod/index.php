<?php
//set_include_path('dao' . PATH_SEPARATOR . get_include_path());
require_once '../autoload.php';

/* @var $daoSerieCategoria SerieDAO */
$daoSerieCategoria = DAOFactory::getSerieDAO();

/* @var $recomendacion Serie[] */
$recomendaciones = $daoSerieCategoria->querySeriesInCategoria("Recomendaciones");

/* @var $daoVod VodDAO */
$daoVod = DAOFactory::getVodDAO();

$vods = $daoVod->queryAll();

function getNRandomVods($vods, $n) {

    $array = [];
    for ($i = 0; $i < $n; $i++) {
        $randPos = rand(0, count($vods) - 1);
        $array[] = $vods[$randPos];
    }
    return $array;
}

function addItem ($randVods1, $isActive){    
    print '<div class="item'.$isActive.'">';
    print '<div class="row" id="localVideo">';
    /* @var $vod Vod*/
    foreach ($randVods1 as $vod){
        print '<div class="col-md-3" data-html="#video'.$vod->idVod.'" data-sub-html=".subhtml">';
        print '<a  href="#" class="thumbnail">';
        print '<img class="img-responsive" src="'.$vod->thumbnail.'" alt="Thumbnail">';
        print '</a>';
        print '</div>';
    }
    print '</div>';
    print '</div>';
}

function addVideo ($vods){
    /* @var $vod Vod*/
    foreach ($vods as $vod){
        print '<div style="display:none;"  id="video'.$vod->idVod.'">';
        print '    <video width="100%" controls>';
        print '        <source src="'.$vod->url.'" type="video/mp4">';
        print '             Your browser does not support HTML5 video.</video>';
        print '</div>';
    }
}

function showCarrusel($titulo, $id, $vods) {    
    $idCarousel = "carousel".$id;
    print '<div id="'.$idCarousel.'" class="carousel slide">';
    print '    <div class="carousel-inner">';
    print '        <input id="texto" type="text" placeholder="'.$titulo.'" disabled/>';
    
    $randVods1 = getNRandomVods($vods, 4);
    $randVods2 = getNRandomVods($vods, 4);
    $randVods3 = getNRandomVods($vods, 4);
    
    addItem ($randVods1, 'active');
    addItem ($randVods2, '');
    addItem ($randVods3, '');
    addVideo ($randVods1);
    addVideo ($randVods2);
    addVideo ($randVods3);
    
    print '<div style="display:none;" class="subhtml">';
    print '    <div class="customHtml">';
    print '        <h4>Ventana Educativa</h4>';
    print '    </div>';
    print '</div>';
    print '</div> <!-- carousel-inner -->';
    print '<a class="left carousel-control" id="carousel'.$id.'left" href="#'.$idCarousel.'" data-slide="prev">'
    . '<i class="fa fa-chevron-left fa-2x"></i></a>';
    print '<a class="right carousel-control" id="carousel'.$id.'right" href="#'.$idCarousel.'" data-slide="next">'
    . '<i class="fa fa-chevron-right fa-2x"></i></a>';
    print '<ol class="carousel-indicators">';
    print '<li data-target="#'.$idCarousel.'" data-slide-to="0" class="active"></li>';
    print '<li data-target="#'.$idCarousel.'" data-slide-to="1"></li>';
    print '<li data-target="#'.$idCarousel.'" data-slide-to="2"></li>';
    print '</ol>';
    print '</div> <!--End Carousel-->';
}

function showRecomendaciones($recomendaciones) {
    $primeraIteracion = true;
    /* @var $recomendacion Serie */
    foreach ($recomendaciones as $recomendacion) {
        if ($primeraIteracion) {
            print '<div class="item active">';
            $primeraIteracion = false;
        } else {
            print '<div class="item">';
        }
        print '    <div class="fill" '
                . '         style="background-image:'
                . ' url(\'http://concrete-envoy-87323.appspot.com/?url=' . $recomendacion->thumbnail . '\');">';
        print '        <div class="container" id="contenidos">';
        print '            <div class="col-xs-6 col-md-9" id="divtitulo">' . $recomendacion->titulo
                . '            </div>';
        print '            <div id="divvideo" class="col-xs-9 col-md-6">';
        print '                <a href="serie?idSerie=' . $recomendacion->idSerie . '" class="thumbnail">'
                . '                   <img src="' . $recomendacion->thumbnail . '" alt="Imagen serie">'
                . '            </a>';
        print '            </div>';
        print '            <div id="divsinopsis" class="col-xs-6 col-md-10">' . $recomendacion->descripcion . '</div>';
        print '            <div class="col-md-4 col-xs-12">';
        print '                <div class="col-md-12">';
        print '                    <a href="#"><span id="visto" class="glyphicon glyphicon-thumbs-up"></span><label id="texto">Agregar a mi lista</label></a>';
        print '                </div>';
        print '                <div class="col-md-12 col-xs-12" id="rating">';
        print '                   <form>';
        print '                        <input id="input-6a" data-show-clear="false" data-show-caption="false" class="rating" data-size="xs" data-stars="5" data-step="0.1"/>';
        print '                    </form>';
        print '                </div>';
        print '            </div>';
        print '            <div class="col-md-8 col-xs-12 social">';
        print '                <ul>';
        print '                    <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>';
        print '                    <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>';
        print '                    <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>';
        print '                    <li><a href="#"><i class="fa fa-lg fa-envelope"></i></a></li>';
        print '                </ul>';
        print '            </div>';
        print '        </div>';
        print '    </div>';
        print '</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link href="../css/estilo.css" rel="stylesheet">
        <!--        link para slider pantalla completa-->
        <link href="../css/full-slider.css" rel="stylesheet">
        <script src="../js/jscript.js" type="text/javascript"></script>
        <!--        lin para rating-->
        <script src="../js/star-rating.js" type="text/javascript"></script>
        <link href="../css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
        <!--        link para reconocimiento de imagenes en iconos-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <!--        link para efectos reproducción de video-->
        <link rel="stylesheet"  href="../css/lightGallery.css"/>
        <script src="../js/lightGallery.js"></script>
        <script src="../js/lightGallery.min.js"></script>

        <!--        link para efectos de thumbnails-->
        <link href="../css/adipoli.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="../js/jquery.adipoli.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            ///**script para los videos**///
            $(document).ready(function() {
//                $('#localVideo').lightGallery();
            });

        </script>
        <!-- Script to Activate the Carousel -->
        <script>

            //    script rating
            jQuery(document).ready(function() {
                /*script para efectos de video*/


                /*script para efectos de thumbnail   (startEffect : transparent, hoverEffect : boxRainGrowReverse)*/
                $('#image1').adipoli({
                    'startEffect': 'transparent',
                    'hoverEffect': 'boxRainGrowReverse'
                });
                //    script carrusel
//                $('#myCarousel1').carousel({
//                    interval: 25000 //changes the speed
//                });
//
//                $('#myCarousel').carousel({
//                    interval: 4000
//                });
//                $('.carousel').carousel({
//                    interval: 5000 //changes the speed
//                });
//                $("#input-21f").rating({
//                    starCaptions: function(val) {
//                        if (val < 3) {
//                            return val;
//                        } else {
//                            return 'high';
//                        }
//                    },
//                    starCaptionClasses: function(val) {
//                        if (val < 3) {
//                            return 'label label-danger';
//                        } else {
//                            return 'label label-success';
//                        }
//                    },
//                    hoverOnClear: false
//                });

//                $('#rating-input').rating({
//                    min: 0,
//                    max: 5,
//                    step: 1,
//                    size: 'lg'
//                });
//
//                $('#btn-rating-input').on('click', function() {
//                    var $a = self.$element.closest('.star-rating');
//                    var chk = !$a.hasClass('rating-disabled');
//                    $('#rating-input').rating('refresh', {showClear: !chk, disabled: chk});
//                });
//
//
//                $('.btn-danger').on('click', function() {
//                    $("#kartik").rating('destroy');
//                });
//
//                $('.btn-success').on('click', function() {
//                    $("#kartik").rating('create');
//                });
//
//                $('#rating-input').on('rating.change', function() {
//                    alert($('#rating-input').val());
//                });
//
//
//                $('.rb-rating').rating({'showCaption': true, 'stars': '3', 'min': '0', 'max': '3', 'step': '1', 'size': 'xs', 'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}});
            });

        </script>
    </head>

    <body class="back">
        <header class="page-header">
            <div class="row">
                <div id="wrapper">
                    <!--             Sidebar -->
                    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
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
                            <a href="#"><img class="hamburger" data-toggle="offcanvas" src="../imagenes/logove.png" alt=""></a>
                        </div>
                        <div class="col-md-2 col-xs-5 text-right">
                            <a href="#"><img src="../imagenes/logosolo.png" alt=""></a>
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
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!--/#page-content-wrapper--> 

            </div>

        </header>  
        <!--         Full Page Image Background Carousel Header -->
        <div id="myCarousel1" class="carousel slide">
            <!--             Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>

            <!--Wrapper for Slides--> 
            <div class="carousel-inner">

                <?php showRecomendaciones($recomendaciones); ?>

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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                    
                    <div class="container">
                        <div class="row">
                            <div class="well">
                                <?php
                                showCarrusel("Lo mas visto", 2, $vods);
                                showCarrusel("Estrenos", 3, $vods);
                                showCarrusel("Lo que ya viste", 4, $vods);
                                ?>
                            </div> <!--End Well -->
                        </div>
                    </div>

                    <hr>

                    <!--Footer--> 
                    <footer>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Copyright &copy; Ventana Educativa 2015.</p>
                                <p>Dirección General de Televisión Educativa.</p>
                            </div>
                        </div>
                        <!--             /.row -->
                    </footer>

                </div>
            </div>
        </div>
        <!--     /.container -->
    </body>

</html>