
<div id="serie-view" class="container-fluid">           
    <div class="row">
        <div class="col-md-8 col-md-offset-2 opaco">
            <div id="divtitulo" class="col-md-12" data-bind="with: serie" >
                <input type="hidden" data-bind="attr:{'id':'idSerie'}, value:idSerie">
                <h2 data-bind="text: titulo"></h2>
            </div>
            <div class="col-md-4" data-bind="with: serie">
                <a href="">
                    <img width="100%" data-bind="attr:{src: thumbnail}"/>
                </a>                    
                <div id="divsinopsis" class="col-xs-5 col-md-10 content mCustomScrollbar mCS-autoHide" data-bind="text: descripcion"></div>
            </div>
            <div class="col-md-8 series content mCustomScrollbar">                                            
                <h3>Capítulos</h3>
                <table class="table" data-bind="foreach: capitulos">
                    <thead>                                
                        <tr>
                            <th  class="noborder" colspan="2" data-bind="text: titulo"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="col-lg-12 col-md-12 col-xs-12">
                            <td class="video text-center" >
                                <a data-bind="attr:{'href':'vod/youtube/'+idVod()}"> 
                                    <img width="200" data-bind="attr:{src: thumbnail}"/>
                                </a> 
                            </td>
                            <td class="hidden-xs col-md-9 col-lg-8 text-justify" data-bind="text: sinopsis"></td>                            
                        </tr>
                    </tbody>
                </table>
            </div>                
            <div class="col-md-12">
                <div class="col-md-3 col-xs-12">
                    <a href="#"><span class="glyphicon glyphicon-play"></span></a><span id="textoBlanco">Agregar a mi lista</span>                                               
                    <input id="input-1" class="rating" data-show-clear="false" data-show-caption="false" data-size="xs" data-min="0" data-max="5" data-step="1">
                </div>    
                <div class="col-md-2 col-xs-12 social">
                    <span class="glyphicon glyphicon-share"></span><span id="textoBlanco">   Compartir</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
                <!--<div class="col-md-12"><input id="input-1" class="rating" data-show-clear="false" data-show-caption="false" data-size="xs" data-min="0" data-max="5" data-step="1"></div>-->
        </div>
    </div>
</div>

<script type="text/javascript" src="js/vod/serie.js"></script>        
