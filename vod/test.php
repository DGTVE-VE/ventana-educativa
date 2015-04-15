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
            console.log("Tiempo:"+timeElapsed);
            alert (timeElapsed);
        }
        
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
              height: '390',
              width: '640',
              videoId: '0Bmhjf0rKe8',
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