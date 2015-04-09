<?php
require_once 'autoload.php';
$dao = DAOFactory::getCategoriasDAO();
$c = $dao->load("Lo mas visto");
$c->descripcion = "Lo más visto   asasasas";
$dao->update($c);