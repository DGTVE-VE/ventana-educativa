
function goSearchEnter (event){        
    if(event.keyCode==13) {
        goSearch ();
    }    
}

function goSearch (){  
    var url = "/ventana-educativa/vod/search/"+document.getElementById("searchText").value;
    window.location.assign (url);
}


