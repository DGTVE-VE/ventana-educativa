<?php
session_start ();
if (! isset ($_SESSION['usuario'])){
    header ('Location: ../index');
}
require_once '../autoload.php';

$idYoutube = $_GET['youtube'];

?>

<!DOCTYPE html>
<html>
  <body>
    <div id="player"></div>
    <div id="progress"></div>

    <script src="http://www.youtube.com/player_api"></script>

    <script>
        var timeElapsed;
        // create youtube player
        var player;
        window.onbeforeunload = function (e) {
            return 'Texto de aviso';
        }
        
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
              height: '390',
              width: '640',              
              videoId: '<?php print $idYoutube;?>',
              playerVars:{
                controls:0,
                playsinline:0,
                iv_load_policy: 3,
                modestbranding: 0,
                showinfo:0,
                enablejsapi:1,
                autoplay:1,
                rel:0
              },
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
            });
        }
        
        function showProgress (){
            timeElapsed = player.getCurrentTime();
            document.getElementById("progress").innerHTML = timeElapsed;
        }

        // autoplay video
        function onPlayerReady(event) {
            event.target.playVideo();
            setInterval(showProgress, 100);
        }

        // when video ends
        function onPlayerStateChange(event) {        
            if(event.data === 0) {          
                alert('done');
            }
        }

    </script>
  </body>
</html>