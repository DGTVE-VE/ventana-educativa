<?php

//set_include_path('dao' . PATH_SEPARATOR . get_include_path());
require_once '../autoload.php';

/* @var $daoSerieCategoria SerieDAO */
$daoSerieCategoria = DAOFactory::getSerieDAO();

/* @var $recomendacion Serie[] */
$recomendaciones = $daoSerieCategoria->querySeriesInCategoria("Recomendaciones");

/* @var $recomendacion Serie */
foreach ($recomendaciones as $recomendacion ){
    
    
    
}