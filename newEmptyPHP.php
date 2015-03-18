
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
        </script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js">
        </script>
        <link href="../css/estilo.css" rel="stylesheet">
        <!--        link para slider pantalla completa-->
        <link href="../css/full-slider.css" rel="stylesheet">
        <script src="../js/jscript.js" type="text/javascript">
        </script>
        <!--        lin para rating-->
        <script src="../js/star-rating.js" type="text/javascript">
        </script>
        <link href="../css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
        <!--        link para reconocimiento de imagenes en iconos-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <!--        link para efectos reproducción de video-->
        <link rel="stylesheet"  href="../css/lightGallery.css"/>
        <script src="../js/lightGallery.js">
        </script>
        <script src="../js/lightGallery.min.js">
        </script>

        <!--        link para efectos de thumbnails-->
        <link href="../css/adipoli.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
        </script>
        <script src="../js/jquery.adipoli.min.js" type="text/javascript">
        </script>

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
                            <a href="#">
                                <img class="hamburger" data-toggle="offcanvas" src="../imagenes/logove.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 col-xs-5 text-right">
                            <a href="#">
                                <img src="../imagenes/logosolo.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-2 visible-md visible-lg text-left" id="texto">
                            Televisión <br> Educativa
                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-2 pull-right col-xs-4">
                            <form role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control"  placeholder="Buscar">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search">
                                            </i>
                                        </button>
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
                <li data-target="#myCarousel1" data-slide-to="0" class="active">
                </li>
                <li data-target="#myCarousel1" data-slide-to="1">
                </li>
                <li data-target="#myCarousel1" data-slide-to="2">
                </li>
            </ol>

            <!--Wrapper for Slides--> 
            <div class="carousel-inner">
                <div class="item active">   
                    <div class="fill"  style="background-image: url('http://concrete-envoy-87323.appspot.com/?url=https://40.media.tumblr.com/15a912da1e647c569689eac772bf93dd/tumblr_njmaa4Xznv1u0jrbro1_1280.jpg');">        
                        <div class="container" id="contenidos">            
                            <div class="col-xs-6 col-md-9" id="divtitulo">El Chango y la Chancla            
                            </div>            
                            <div id="divvideo" class="col-xs-9 col-md-6">               
                                <a href="serie?idSerie=1" class="thumbnail">                   
                                    <img src="https://40.media.tumblr.com/15a912da1e647c569689eac772bf93dd/tumblr_njmaa4Xznv1u0jrbro1_1280.jpg" alt="Imagen serie">            </a>            
                            </div>            
                            <div id="divsinopsis" class="col-xs-6 col-md-10">La Dirección General de Televisión Educativa (DGTVE) presenta la primera serie animada de televisión con un perfil educativo en México, El Chango y la Chancla, la cual aborda diversos temas que son muy comunes en las relaciones que existen entre los niños y especialmente entre los hermanos. En esta serie, el Chango  es un personaje muy divertido, que se toma las cosas a la ligera pero es muy ingenioso para conseguir lo que desea. Es muy hábil físicamente y disfruta el momento. Lo que más le gusta es comer conchas de chocolate. La Chancla por su parte tiene toda la personalidad de la hermana mayor. Es muy consciente de sí misma y hace todo, según ella, casi perfectamente. Es una niña intensa en sus sentimientos, cuando está de buenas es la más divertida; pero cuando está de malas no hay poder humano que le haga cambiar de parecer. Esta pequeña tiene una pasión en la vida: los libros. Siempre trae un libro bajo el brazo y cada vez que puede se sienta a leer. Así la veremos echando carcaj</div>            <div class="col-md-4 col-xs-12">                <div class="col-md-12">                    <a href="#">
                                        <span id="visto" class="glyphicon glyphicon-thumbs-up">
                                        </span>
                                        <label id="texto">Agregar a mi lista</label>
                                    </a>                </div>                <div class="col-md-12 col-xs-12" id="rating">                   <form>                        <input id="input-6a" data-show-clear="false" data-show-caption="false" class="rating" data-size="xs" data-stars="5" data-step="0.1"/>                    </form>                </div>            </div>            <div class="col-md-8 col-xs-12 social">                <ul>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-facebook">
                                            </i>
                                        </a>
                                    </li>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-twitter">
                                            </i>
                                        </a>
                                    </li>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-google-plus">
                                            </i>
                                        </a>
                                    </li>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-envelope">
                                            </i>
                                        </a>
                                    </li>                </ul>            </div>        </div>    </div>
                </div>
                <div class="item">    
                    <div class="fill"          style="background-image: url('http://concrete-envoy-87323.appspot.com/?url=https://40.media.tumblr.com/69980481860834951e1ea398ae6c6882/tumblr_njolfiJjuz1u0jrbro1_1280.jpg');">        <div class="container" id="contenidos">            <div class="col-xs-6 col-md-9" id="divtitulo">Un nuevo significado            </div>            <div id="divvideo" class="col-xs-9 col-md-6">                <a href="serie?idSerie=2" class="thumbnail">                   <img src="https://40.media.tumblr.com/69980481860834951e1ea398ae6c6882/tumblr_njolfiJjuz1u0jrbro1_1280.jpg" alt="Imagen serie">            </a>            </div>            <div id="divsinopsis" class="col-xs-6 col-md-10">El canal Aprende presenta la serie Nuevo Significado, revista dedicada a las personas de la tercera edad, con la conducción de Mauricio Herrera y Julieta Bracho, acompañados de  especialistas que ofrecen consejos y asesorías en diferentes temas como: ejercicios, leyes, finanzas, cocina y salud, entre otros. Este programa se transmite los lunes y viernes a las 08:00 y 12:00 horas y los sábados a las 07:00 horas. Cuenta además con secciones de entretenimiento; recomendaciones de libros, cine, música y una sección dedicada a la trayectoria de algún personaje que ha destacado dentro de su profesión o en alguna actividad.</div>            <div class="col-md-4 col-xs-12">                <div class="col-md-12">                    <a href="#">
                                        <span id="visto" class="glyphicon glyphicon-thumbs-up">
                                        </span>
                                        <label id="texto">Agregar a mi lista</label>
                                    </a>                </div>                <div class="col-md-12 col-xs-12" id="rating">                   <form>                        <input id="input-6a" data-show-clear="false" data-show-caption="false" class="rating" data-size="xs" data-stars="5" data-step="0.1"/>                    </form>                </div>            </div>            <div class="col-md-8 col-xs-12 social">                <ul>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-facebook">
                                            </i>
                                        </a>
                                    </li>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-twitter">
                                            </i>
                                        </a>
                                    </li>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-google-plus">
                                            </i>
                                        </a>
                                    </li>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-envelope">
                                            </i>
                                        </a>
                                    </li>                </ul>            </div>        </div>    </div>
                </div>
                <div class="item">    <div class="fill"          style="background-image: url('http://concrete-envoy-87323.appspot.com/?url=https://41.media.tumblr.com/2cd3302aa3b934319eff1edab1473631/tumblr_njoly6ThBW1u0jrbro1_1280.png');">        <div class="container" id="contenidos">            <div class="col-xs-6 col-md-9" id="divtitulo">Las Culturas            </div>            <div id="divvideo" class="col-xs-9 col-md-6">                <a href="serie?idSerie=3" class="thumbnail">                   <img src="https://41.media.tumblr.com/2cd3302aa3b934319eff1edab1473631/tumblr_njoly6ThBW1u0jrbro1_1280.png" alt="Imagen serie">            </a>            </div>            <div id="divsinopsis" class="col-xs-6 col-md-10">
                            </div>            <div class="col-md-4 col-xs-12">                <div class="col-md-12">                    <a href="#">
                                        <span id="visto" class="glyphicon glyphicon-thumbs-up">
                                        </span>
                                        <label id="texto">Agregar a mi lista</label>
                                    </a>                </div>                <div class="col-md-12 col-xs-12" id="rating">                   <form>                        <input id="input-6a" data-show-clear="false" data-show-caption="false" class="rating" data-size="xs" data-stars="5" data-step="0.1"/>                    </form>                </div>            </div>            <div class="col-md-8 col-xs-12 social">                <ul>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-facebook">
                                            </i>
                                        </a>
                                    </li>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-twitter">
                                            </i>
                                        </a>
                                    </li>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-google-plus">
                                            </i>
                                        </a>
                                    </li>                    <li>
                                        <a href="#">
                                            <i class="fa fa-lg fa-envelope">
                                            </i>
                                        </a>
                                    </li>                </ul>            </div>        </div>    </div>
                </div>
            </div>

            <!--             Controls -->
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                <span class="icon-prev">
                </span>
            </a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                <span class="icon-next">
                </span>
            </a>
        </div>
        <!--Page Content--> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                    
                    <div class="container">
                        <div class="row">
                            <div class="well">
                                <div id="carousel2" class="carousel slide">    
                                    <div class="carousel-inner">        
                                        <input id="texto" type="text" placeholder="Lo mas visto" disabled/>
                                        <div class="itemactive">
                                            <div class="row" id="localVideo">
                                                <div class="col-md-3" data-html="#video10" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/f156c66c0d4949cf986263d9326a04ae/tumblr_nd74xdeW7N1u0jrbro1_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video84" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://31.media.tumblr.com/4bcf712fbf84abecf0c9a3c31339fa8a/tumblr_nd74k1aqfu1u0jrbro5_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video27" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/dc7e59b3bbd7b0ac8ac5fa24fe7ae4b1/tumblr_nd756k26sQ1u0jrbro1_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video27" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/dc7e59b3bbd7b0ac8ac5fa24fe7ae4b1/tumblr_nd756k26sQ1u0jrbro1_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row" id="localVideo">
                                                <div class="col-md-3" data-html="#video18" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/db6a422039ce6b93652dd5ccbed367ff/tumblr_nd750cnbFx1u0jrbro3_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video41" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/f99d45b03a2eb318ee75bb2806ba5afe/tumblr_nd75az4kgz1u0jrbro5_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video38" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/8bc52014744be0fe2193621b2210d342/tumblr_nd75az4kgz1u0jrbro2_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video28" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://31.media.tumblr.com/503e9f52cd3ac9c5c15d394bde912708/tumblr_nd756k26sQ1u0jrbro2_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row" id="localVideo">
                                                <div class="col-md-3" data-html="#video18" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/db6a422039ce6b93652dd5ccbed367ff/tumblr_nd750cnbFx1u0jrbro3_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video47" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/f8dc8505d25f3c02ae0a2336026ca41b/tumblr_nd75dpcuc01u0jrbro2_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video21" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/933f3e7a408441be5ae2e89ba421092f/tumblr_nd750cnbFx1u0jrbro5_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video94" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/8fed632d4214d0a94cdd904065a2eb31/tumblr_nd786wHXQH1u0jrbro8_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:none;"  id="video10">    <video width="100%" controls>        <source src="http://youtu.be/8Q1D6lrkrBA " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video84">    <video width="100%" controls>        <source src="http://youtu.be/4PjQUYWQ8lI " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video27">    <video width="100%" controls>        <source src="http://youtu.be/PmotBDPBxlI " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video27">    <video width="100%" controls>        <source src="http://youtu.be/PmotBDPBxlI " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video18">    <video width="100%" controls>        <source src="http://youtu.be/27XXw_0wrcA   " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video41">    <video width="100%" controls>        <source src="http://youtu.be/hX5wfg4nK7U" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video38">    <video width="100%" controls>        <source src="http://youtu.be/-CvETRZXGDE" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video28">    <video width="100%" controls>        <source src="http://youtu.be/W5WFgOb6LX0 " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video18">    <video width="100%" controls>        <source src="http://youtu.be/27XXw_0wrcA   " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video47">    <video width="100%" controls>        <source src="http://youtu.be/7Euad0wYdos" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video21">    <video width="100%" controls>        <source src="http://youtu.be/bkVSqTUlzCU" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video94">    <video width="100%" controls>        <source src="http://youtu.be/BG6CZQvNDls  " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;" class="subhtml">    <div class="customHtml">        <h4>Ventana Educativa</h4>    </div>
                                        </div>
                                    </div> <!-- carousel-inner -->
                                    <a class="left carousel-control" id="carousel2left" href="#carousel2" data-slide="prev">
                                        <i class="fa fa-chevron-left fa-2x">
                                        </i>
                                    </a>
                                    <a class="right carousel-control" id="carousel2right" href="#carousel2" data-slide="next">
                                        <i class="fa fa-chevron-right fa-2x">
                                        </i>
                                    </a>
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel2" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carousel2" data-slide-to="1">
                                        </li>
                                        <li data-target="#carousel2" data-slide-to="2">
                                        </li>
                                    </ol>
                                </div> <!--End Carousel-->
                                <div id="carousel3" class="carousel slide">    
                                    <div class="carousel-inner">        
                                        <input id="texto" type="text" placeholder="Estrenos" disabled/>
                                        <div class="itemactive">
                                            <div class="row" id="localVideo">
                                                <div class="col-md-3" data-html="#video27" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/dc7e59b3bbd7b0ac8ac5fa24fe7ae4b1/tumblr_nd756k26sQ1u0jrbro1_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video92" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/ddf8ec6bf76e2cab53baf5c7bc0ebba4/tumblr_nd786wHXQH1u0jrbro6_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video43" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/5cc314ddd3f4fcf3f8af4a00bd6d801d/tumblr_nd75az4kgz1u0jrbro7_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video36" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/5d40377aa46ab9adbaba93bb3898768c/tumblr_nd756k26sQ1u0jrbro10_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row" id="localVideo">
                                                <div class="col-md-3" data-html="#video26" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/4dceb6f797bce8f4f65e7ed9fda0cc33/tumblr_nd750cnbFx1u0jrbro10_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video38" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/8bc52014744be0fe2193621b2210d342/tumblr_nd75az4kgz1u0jrbro2_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video97" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/1c8f3174342a8318821005b4d2f5412c/tumblr_nd786wHXQH1u0jrbro1_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video23" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/5602d3b6c595e4b734d48c8979a3115f/tumblr_nd750cnbFx1u0jrbro7_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row" id="localVideo">
                                                <div class="col-md-3" data-html="#video30" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/7e68c601b809efb2451ac62ad7d49cd3/tumblr_nd756k26sQ1u0jrbro4_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video36" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/5d40377aa46ab9adbaba93bb3898768c/tumblr_nd756k26sQ1u0jrbro10_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video21" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/933f3e7a408441be5ae2e89ba421092f/tumblr_nd750cnbFx1u0jrbro5_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video94" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/8fed632d4214d0a94cdd904065a2eb31/tumblr_nd786wHXQH1u0jrbro8_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:none;"  id="video27">    <video width="100%" controls>        <source src="http://youtu.be/PmotBDPBxlI " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video92">    <video width="100%" controls>        <source src="http://youtu.be/lTwuX2A203g  " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video43">    <video width="100%" controls>        <source src="http://youtu.be/O95f52NgR28 " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video36">    <video width="100%" controls>        <source src="http://youtu.be/woyHDBZ7ujo" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video26">    <video width="100%" controls>        <source src="http://youtu.be/ls7npNhR2bw   " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video38">    <video width="100%" controls>        <source src="http://youtu.be/-CvETRZXGDE" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video97">    <video width="100%" controls>        <source src="http://youtu.be/WeMiXIglsLU  " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video23">    <video width="100%" controls>        <source src="http://youtu.be/_YHOpPtZbK0  " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video30">    <video width="100%" controls>        <source src="http://youtu.be/c-AxZ5T0HcM" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video36">    <video width="100%" controls>        <source src="http://youtu.be/woyHDBZ7ujo" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video21">    <video width="100%" controls>        <source src="http://youtu.be/bkVSqTUlzCU" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video94">    <video width="100%" controls>        <source src="http://youtu.be/BG6CZQvNDls  " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;" class="subhtml">    <div class="customHtml">        <h4>Ventana Educativa</h4>    </div>
                                        </div>
                                    </div> <!-- carousel-inner -->
                                    <a class="left carousel-control" id="carousel3left" href="#carousel3" data-slide="prev">
                                        <i class="fa fa-chevron-left fa-2x">
                                        </i>
                                    </a>
                                    <a class="right carousel-control" id="carousel3right" href="#carousel3" data-slide="next">
                                        <i class="fa fa-chevron-right fa-2x">
                                        </i>
                                    </a>
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel3" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carousel3" data-slide-to="1">
                                        </li>
                                        <li data-target="#carousel3" data-slide-to="2">
                                        </li>
                                    </ol>
                                </div> <!--End Carousel-->
                                <div id="carousel4" class="carousel slide">    <div class="carousel-inner">        <input id="texto" type="text" placeholder="Lo que ya viste" disabled/>
                                        <div class="itemactive">
                                            <div class="row" id="localVideo">
                                                <div class="col-md-3" data-html="#video20" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/66c618e2f0099925b31abd609187869b/tumblr_nd750cnbFx1u0jrbro4_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video7" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/cc5c886262795e1203a273be8ec85c7b/tumblr_nd74pwQ6ng1u0jrbro10_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video5" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/1837569e5e2a24a356c932e16a36e21f/tumblr_nd74pwQ6ng1u0jrbro6_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video27" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/dc7e59b3bbd7b0ac8ac5fa24fe7ae4b1/tumblr_nd756k26sQ1u0jrbro1_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row" id="localVideo">
                                                <div class="col-md-3" data-html="#video9" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/83ffc9512433f4d3aaacd2a6ef2be262/tumblr_nd74pwQ6ng1u0jrbro9_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video17" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://31.media.tumblr.com/ebfad857b41e806d846aa4d9030f1856/tumblr_nd750cnbFx1u0jrbro1_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video24" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/2b8512817a3e697a69f193a29d52d9ff/tumblr_nd750cnbFx1u0jrbro8_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video24" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/2b8512817a3e697a69f193a29d52d9ff/tumblr_nd750cnbFx1u0jrbro8_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row" id="localVideo">
                                                <div class="col-md-3" data-html="#video84" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://31.media.tumblr.com/4bcf712fbf84abecf0c9a3c31339fa8a/tumblr_nd74k1aqfu1u0jrbro5_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video10" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/f156c66c0d4949cf986263d9326a04ae/tumblr_nd74xdeW7N1u0jrbro1_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video34" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://33.media.tumblr.com/dbd00ce204ebb3dc6167c1653e59f1f0/tumblr_nd756k26sQ1u0jrbro8_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                                <div class="col-md-3" data-html="#video90" data-sub-html=".subhtml">
                                                    <a  href="#" class="thumbnail">
                                                        <img class="img-responsive" src="https://38.media.tumblr.com/598b65d2dac08553a1dd99fe83e0c340/tumblr_nd786wHXQH1u0jrbro4_400.jpg" alt="Thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display:none;"  id="video20">    <video width="100%" controls>        <source src="http://youtu.be/Gt_Orhu7FG0 " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video7">    <video width="100%" controls>        <source src="http://youtu.be/FRDbsX81ESs" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video5">    <video width="100%" controls>        <source src="http://youtu.be/k2TknIzefEE   " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video27">    <video width="100%" controls>        <source src="http://youtu.be/PmotBDPBxlI " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video9">    <video width="100%" controls>        <source src="http://youtu.be/jD1G7hPtcLA " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video17">    <video width="100%" controls>        <source src="http://youtu.be/5QGYwFCVdWs  " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video24">    <video width="100%" controls>        <source src="http://youtu.be/pPivJpQB8VE " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video24">    <video width="100%" controls>        <source src="http://youtu.be/pPivJpQB8VE " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video84">    <video width="100%" controls>        <source src="http://youtu.be/4PjQUYWQ8lI " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video10">    <video width="100%" controls>        <source src="http://youtu.be/8Q1D6lrkrBA " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video34">    <video width="100%" controls>        <source src="http://youtu.be/xf01tqWHbGc" type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;"  id="video90">    <video width="100%" controls>        <source src="http://youtu.be/kXgeG92nFfc " type="video/mp4">             Your browser does not support HTML5 video.</video>
                                        </div>
                                        <div style="display:none;" class="subhtml">    <div class="customHtml">        <h4>Ventana Educativa</h4>    </div>
                                        </div>
                                    </div> <!-- carousel-inner -->
                                    <a class="left carousel-control" id="carousel4left" href="#carousel4" data-slide="prev">
                                        <i class="fa fa-chevron-left fa-2x">
                                        </i>
                                    </a>
                                    <a class="right carousel-control" id="carousel4right" href="#carousel4" data-slide="next">
                                        <i class="fa fa-chevron-right fa-2x">
                                        </i>
                                    </a>
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel4" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carousel4" data-slide-to="1">
                                        </li>
                                        <li data-target="#carousel4" data-slide-to="2">
                                        </li>
                                    </ol>
                                </div> <!--End Carousel-->                            </div> <!--End Well -->
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