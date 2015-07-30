<header class="page-header fixed-top">
    <div class="row">
        <div id="wrapper">
            <!--             Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" 
                 id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav" data-bind="foreach:categorias">                                     
                    <li data-bind="css: $index() == 0 ? ' sidebar-brand' : ''">                    
                    <li><a href="#" data-bind="text:categoria"></a></li>                    
                </ul>
            </nav>
            <div class="row navbar-fixed-top navbar-inverse">                       
                <div class="col-md-4 col-xs-2">
                    <a href="#"><img class="hamburger" 
                                     data-toggle="offcanvas" 
                                     src="imagenes/logove.png" 
                                     alt=""></a>
                </div>
                <div class="col-md-2 col-xs-5 text-right">
                    <a href="#"><img src="imagenes/logoDGTVEsolo.png" alt=""></a>
                </div>
                <div class="col-md-2 visible-md visible-lg text-left" id="texto">
                    Televisión <br> Educativa
                </div>
                <div class="col-md-2"> 
                    <a href="session/close" > Cerrar sesión </a>
                </div>
                <div class="col-md-2 pull-right col-xs-4">
                    <form role="search">
                        <div class="input-group">
                            <input type="text" class="form-control"  placeholder="Buscar">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!--/#page-content-wrapper--> 

    </div>
    <script src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js'></script>
    <script src='js/knockout.mapping-latest.js'></script>
</header> 