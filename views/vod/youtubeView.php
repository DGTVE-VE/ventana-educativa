<!DOCTYPE html>
<html>
    <head>
      <base href="http://<?php print $_SESSION[CONFIG]['host']['url']; ?>">
    </head>
    <body style='background: #000000'>

        <!--En este div se empotra el reproductor de youtube-->
        <div id="player" align="center">    </div>
        <div id="progress"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js'></script>
        <script src='js/knockout.mapping-latest.js'></script>
        <script src="https://www.youtube.com/player_api"></script>
        <script> var api = <?php print json_encode($_SESSION[CONFIG]['api']['url']); ?>; </script>
        <script src='js/vod/youtube.js'></script>
    </body>
</html>