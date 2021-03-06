<link rel="stylesheet" type="text/css" href="css/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css"/>        
<link href="css/full-slider.css" rel="stylesheet">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<link href="css/ihover.css" rel="stylesheet" type="text/css">
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<div class="row" id="vista_principal">
    <div id="myCarousel1" class="carousel slide">
        <!--Wrapper for Slides--> 
        <div class="carousel-inner col-md-12 video" id="carousel-full" data-bind="foreach: recomendaciones">     
            <!--El primer elemento debe tener la clase 'active'-->
            
            <div class="item" data-bind="css:{'active':$index() == 0}">               
                <div id="divvideo" class="col-xs-12 col-md-12">                    
                    <a data-bind="attr:{href: 'vod/serie/'+idSerie()}" class=" thumb-sinopsis">
                        <img id="imgFullIndex" class="img-responsive" data-bind="attr:{src: background}" alt="Imagen serie">
                        <!--<img src="imagenes/QUEONDACONELSEXO.png">-->
                    </a>                    
                    
                </div>
                
                <div class="container" id="contenidos">
                    <div class="carousel-caption" id="tipografiaIndex">
                        <!--<h1 id="divtitulo" data-bind="text: titulo"></h1>-->
                        <p id="divsinopsis" class="col-xs-6 col-md-1  content mCustomScrollbar" data-bind="text: sinopsis"></p>
                    </div>
                </div>

                <!--                <div class="container" id="contenidos">
                                    <div class="col-xs-12 col-md-12 text-center" id="divtitulo" 
                                         data-bind="text: titulo">
                                    </div>
                                    <div id="divsinopsis" class="col-xs-6 col-md-1  content mCustomScrollbar" data-bind="text: descripcion"> </div>                                                             
                                </div>-->
            </div>
        </div>
        <!--             Controls -->
        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel1" data-slide="next">
            <span class="icon-next"></span>
        </a>                                                
        <!--<div class="col-md-12"> Indicators -->
        <ol class="carousel-indicators" data-bind="foreach: recomendaciones">
            <li data-target="#myCarousel1" data-bind="css: $index() == 0 ? ' active' : '', attr:{'data-slide-to':$index()}"></li>
<!--            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="1"></li>
            <li data-target="#myCarousel1" data-slide-to="2"></li>-->
        </ol>
        <!--</div>-->            
    </div><!--Fin Slider pantalla completa-->
    <div class="row">
        <div class="col-md-12" id="IVSliderSeries" data-bind="foreach: { data: categorias}">
            <!-- ko if: series().length -->            
                <div><a id="titserie" data-bind="text: categoria, attr:{'name':categoria}"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-4"></div>
                <div class="serie-slider col-md-10 col-lg-10 col-sm-6 col-xs-4" data-bind="foreach: { data: series}">   
                    <div id="img-contenedor" class="ih-item square effect6 scale_down" data-bind="if: $root.initSlick($index(), $parent.series().length)">
                        <a data-bind="attr:{href:'vod/serie/'+idSerie()} ">
                            <img class="seriethum img" data-bind="attr:{src:thumbnail}" alt="Thumbnail">                            
                            <div class="info">
                                <h3 data-bind="text: titulo"></h3>
                                <p id="descripIndex" class="mCustomScrollbar" data-bind="text: sinopsis"></p>
                            </div>
                        </a>
                    </div>                    
                </div> 
                <div class="col-lg-1 col-md-1  col-sm-3 col-xs-4"></div>            
            <!-- /ko -->
        </div>
        <hr>
    </div>        
</div> <!--row principal--> 
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Ventana Educativa 2015.</p>
            <p>Dirección General de Televisión Educativa.</p>
            <!-- end normal -->
        </div>
    </div>
</footer>     

<script src="js/star-rating.js" type="text/javascript"></script><!--*estrellas del rating-->
<script src="js/jquery.adipoli.min.js" type="text/javascript"></script><!--permite ver el slider tipo netflix-->
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script><!--permite ver el slider tamaño normal-->
<script type="text/javascript" src="js/vod/index.js"></script><!--conexión con nkockuot-->





