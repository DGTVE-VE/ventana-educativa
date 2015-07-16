<!DOCTYPE html>
<html>
    <head>
      <base href="http://<?php print $_SERVER['HTTP_HOST']; ?>" />
    </head>
    <body style='background: #000000'>

        <div id="player" align="center">    
        </div>
        <div id="progress"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js'></script>
        <script src='js/knockout.mapping-latest.js'></script>
        <script src="https://www.youtube.com/player_api"></script>
        <script src='js/vod/youtube.js'></script>
    </body>
</html>