<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <header class="page-header fixed-top">
        <!--Menú para resolución grande-->
        <div id="wrapper" class="hidden-xs">
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper"> 
                <ul class="nav sidebar-nav" data-bind="foreach:categorias">                                     
                    <li data-bind="css: $index() == 0 ? ' sidebar-brand' : ''">                    
                    <li><a href="#" data-bind="text:categoria"></a></li>                    
                </ul>
            </nav>
            <div class="row">            
                <div class="col-md-12 col-xs-12 col-lg-12 navbar-fixed-top navbar-inverse">                       
                    <div class="col-md-3 col-xs-2 col-lg-3">
                        <a href="#"><img class="hamburger" 
                                         data-toggle="offcanvas" 
                                         src="imagenes/logovem.png" 
                                         alt=""></a>
                    </div>
                    <div class="col-md-3 col-xs-5 col-lg-3 text-right">
                        <a href="#"><img src="imagenes/logoDGTVEsolo.png" alt=""></a>
                    </div>
                    <div class="col-md-2 visible-lg text-left" id="texto">
                        Televisión <br> Educativa
                    </div>
                    <div class="col-md-1 col-xs-2"> 
                        <label class="glyphicon glyphicon-off cerrarSesion"></label>
                    </div>
                    <div class="col-md-3 col-xs-3 col-lg-3 pull-right">
                        <!-- add search form -->
                        <form class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn glyphicon glyphicon-search">
                                        <!--<span class=""></span>-->
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!--/#page-content-wrapper--> 

        </div>
        <!--Menú para resolución pequeña-->
        <nav class="navbar navbar-default navbar-fixed-top visible-xs hidden-lg" role="navigation">
            <div class="container-fluid">
                <!-- add header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle col-md-3" data-toggle="collapse" data-target="#navbar1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#"><img class="col-md-3" src="imagenes/logovem.png"></a>
                    <a href="#"><img class="col-md-3" src="imagenes/logoDGTVEsolo.png" alt=""></a>
                    <label class="glyphicon col-md-3 glyphicon-off cerrarSesion"></label>
                </div>
                <!-- add menu -->
                <div class="collapse navbar-collapse" id="navbar1">
                    <ul class="nav navbar-nav" data-bind="foreach:categorias">
                        <li data-bind="css: $index() == 0 ? ' sidebar-brand' : ''">                    
                        <li><a href="#" data-bind="text:categoria"></a></li> 

                    </ul>
                    <!-- add search form -->
                    <form class="navbar-form navbar-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar">
                            <span class="input-group-btn">
                                <button type="submit" class="btn glyphicon glyphicon-search">
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </nav>    
    </header> 
