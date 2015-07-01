
var timeElapsed;
var player;
window.onbeforeunload = function (e) {
    return 'Texto de aviso';
}

function onYouTubePlayerAPIReady() {
    pos = window.location.href.toString().lastIndexOf("/");
    id = window.location.href.toString().substring(pos + 1);
    player = new YT.Player('player', {
//        height: '390',
//        width: '640',
        width:window.innerWidth-50,
        height:window.innerHeight-50,
        videoId: id,
        playerVars: {
            controls: 0,
            playsinline: 0,
            iv_load_policy: 3,
            modestbranding: 0,
            showinfo: 0,
            enablejsapi: 1,
            autoplay: 1,
            rel: 0
        },
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

function showProgress() {
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
    if (event.data === 0) {
        alert('done');
    }
}