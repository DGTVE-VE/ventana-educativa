<?php
require_once '../autoload.php';

/* @var $daoSerie SerieDAO */
$daoSerie= DAOFactory::getSerieDAO();

/* @var $daoVod SerieDAO */
$daoVod = DAOFactory::getVodDAO();

/* @var $recomendacion Serie[] */
$serie = $daoSerie->load($_GET['idSerie']);

$capitulos = $daoVod->queryByIdSerie($serie->idSerie);
$maxTemporada = $daoVod->getLastTemporadaOfSerie($serie->idSerie);

function showTemporadas ($max){
    for ($i = 1; $i <= $max; $i++){
        print "<span class=\"num-temporada\"> $i </span>";
    }
}

function showCaps ($capitulos){
    /* @var $capitulo VOD */    
    foreach ($capitulos as $capitulo){
        print '<tr><td class="video">';
        print '<div data-src="'.trim($capitulo->url).'" data-sub-html=".subhtml">';
        print '<a href="#"> <img width="200" src="' . $capitulo->thumbnail . '"/></a> </div> </td>';
        print "<td class=\"opaco\" id='texto1'>". $capitulo->sinopsis ."</td></tr>";                                   
    }
}
$backgroundImage = "http://concrete-envoy-87323.appspot.com/?url=";
$backgroundImage .= $serie->thumbnail;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8" />
        <!-- Latest compiled and minified CSS -->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
         Optional theme 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/vod.css">
         Latest compiled and minified JavaScript 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!--        <link href="../css/estilo.css" rel="stylesheet">-->
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
        <script src="../js/jquery.adipoli.min.js" type="text/javascript"></script>

        <link href="../css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
        <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
        <link rel="stylesheet" href="../css/vod.css">
    </head>
    <body style="background: url(<?php print $backgroundImage; ?>) no-repeat center center fixed">      
            <header>
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
        <div class="container-fluid">           
            <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div id="divtitulo">
                            <?php print $serie->titulo; ?>
                        </div>
                    </div>
                <div class="temporadas-text col-md-6">
                    <div id="texto"> 
                        Temporadas...........................<?php showTemporadas($maxTemporada); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <img src="<?php print $serie->thumbnail; ?>" width="100%"/>
                </div>
                <div class="col-md-5 series table-responsive content mCustomScrollbar">                    
                    <table class="table borderless ">
                        <?php showCaps($capitulos); ?>
                    </table>
                </div>         
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".video").lightGallery();
            });
        </script>
    </body>
</html>
    