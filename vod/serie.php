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
        print "<tr><td><img src=\"" . $capitulo->thumbnail . "\"/></td>";
        print "<td>". $capitulo->sinopsis ."</td></tr>";                                   
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/vod.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </head>
    <body style="background: url(<?php print $serie->thumbnail; ?>) no-repeat center center fixed">      
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 encabezado">Span 5</div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <h1>
                        <?php print $serie->titulo; ?>
                    </h1>
                    <h2>
                        Animación
                    </h2>
                </div>
                <div class="temporadas-text col-md-6">
                    <h4> 
                        Temporadas...........................<?php showTemporadas($maxTemporada); ?>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-4">
                    <img src="<?php print $serie->thumbnail; ?>" width="100%"/>
                </div>
                <div class="col-md-5 series table-responsive">
                    <table class="table borderless">
                        <?php showCaps($capitulos); ?>
                    </table>
                </div>         
            </div>
        </div>
    </body>
</html>
