
function goSearchEnter (event){        
    if(event.keyCode==13) {
        goSearch ();
    }    
}

function goSearch (){  
    var url = "http://172.16.107.157/ventana-educativa/vod/search/"+document.getElementById("searchText").value;
    window.location.assign (url);
}


