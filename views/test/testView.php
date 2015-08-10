<!DOCTYPE html>
<html>
    <head>
        <base href="http://<?php print $_SESSION[CONFIG]['host']['url']; ?>" />
        <style>
            body {
                background-image: url("imagenes/El_chango_y_la_chancla.jpg");
            }
            #bg {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -2;
                /*background: #FFF;*/
                background-size: cover !important;
            }
        </style>
    </head>
    <body>
        <div id="bg" >    </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js'></script>
        <script src='js/knockout.mapping-latest.js'></script>

        <script src="js/blur.js"></script>

        <script>
            $(document).ready(function () {

                $('#bg').blurjs({
                    source: 'body',
                    radius: 30,
                    overlay: 'rgba(0, 0, 0, .2)'
                });
            });
        </script>
    </body>
</html>