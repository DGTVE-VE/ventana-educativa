/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function queryApi (url, callback){
    var oReq = new XMLHttpRequest(); //New request object
    oReq.onload = callback;
    oReq.open("get", url, true);
//    ^ Don't block the rest of the execution.
//    Don't wait until the request finishes to 
//    continue.
    oReq.send();
}


    
