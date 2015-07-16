
var timeElapsed;
var player;
var id;
var capitulos;
window.onbeforeunload = function (e) {

    var datos = {'timeElapsed': timeElapsed, 'idVideo': id};
    $.ajax({
        url: 'api/v1/vodConsumidoApi/update',
        type: 'POST',
        data: datos,
        ContentType: 'application/json; charset=utf-8',
        async: false,
        success: function (msg) {
            console.log(msg);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error(textStatus);
        }
    });
    return null;
}

//function getCapitulos() {
//    var capitulos;
//    $.ajax({
//        url: '/session/get/capitulos',
//        type: 'GET',
//        async: false,
//        success: function (msg) {
//            capitulos = msg;
//        },
//        error: function (jqXHR, textStatus, errorThrown) {
//            console.error(textStatus);
//        }
//    });
//    return $.parseJSON(capitulos);
//}

function onYouTubePlayerAPIReady() {
    pos = window.location.href.toString().lastIndexOf("/");
    id = window.location.href.toString().substring(pos + 1);
    $.getJSON("/api/v1/vod/capitulo/" + id, function (data) {
        capitulo = data;
        initializeYoutube(capitulo.youtubeId);
    });
}

function initializeYoutube(youtubeId) {    
    player = new YT.Player('player', {
        width: window.innerWidth - 50,
        height: window.innerHeight - 50,
        videoId: youtubeId,
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