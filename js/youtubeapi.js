/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var i; //Global variable so that you can reset interval easily

function onYouTubePlayerReady(playerid)
{
    ytp = document.getElementById("ytvideo"); //get player on page
    ytp.d = ytp.getDuration(); //get video duration
    i = setInterval(checkPlayer, 5000); //check status

}

function onplayerReset()
{
    clearInterval(i);
}

function checkPlayer()
{
    var p = ytp.getCurrentTime(); //get video position
    var d = ytp.d; //get video duration
    var c = p / d * 100; //calculate % complete
    c = Math.round(c); //round to a whole number
    var t = document.getElementById('videotitle').innerHTML;

    if (ytp.isReset) {
        c = 0;
    }
    ytp.c = c;

    if (!ytp.completed)
    {
        if (c >= 80) {
            _gaq.push(['_trackEvent', 'Video Status', t, 'Complete']);
            ytp.completed = true;
        } // or do something else
    }

}