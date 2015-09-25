/* 
        <!--Script para "renderizar" el boton (de Google), obtener los datos del usuario (en Google),
        "postearlos" al servidor y redireccionar al index del VOD-->
 */


            //var api = "http://localhost/ventana-educativa/api/v1/";
            function onSuccess(googleUser) {
                //alert('estas logeado como: '+ googleUser.getBasicProfile().getName());
                //console.log('estas logeado como: ' + googleUser.getBasicProfile().getName());
                //Para obtener los datos del usuario
                GoogleID = googleUser.getBasicProfile().getId();
                alert('tu id de google es: ' + GoogleID);
                GoogleName = googleUser.getBasicProfile().getName();
                GoogleImageURL = googleUser.getBasicProfile().getImageUrl();
                GoogleEmail = googleUser.getBasicProfile().getEmail();
               
                var datos = {   'GoogleID': GoogleID,
                                'GoogleName': GoogleName,
                                'GoogleImageURL': GoogleImageURL,
                                'GoogleEmail': GoogleEmail
                                
                            };
                
                
                $.ajax({
                    url: api + 'usuario/loginGoogle',
                    type: 'POST',
                    data: datos,
                    ContentType: 'application/json; charset=utf-8',
                    async: true,
                    success: function (msg) {
                        console.log(msg);
                        window.location.assign("vod/")                        
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus);
                    }
                });
            }
             
            function onFailure(error) {
                console.log(error);
                alert('hay un error');
            }
            function renderButton() {
                gapi.signin2.render('my-signin2', {
                    'clientid':'429845958607-837g2j6dfn5lm42krcalg6jcrsqanrlc.apps.googleusercontent.com',
                    'scope': 'https://www.googleapis.com/auth/plus.login',
                    //'width': 55,
                    //'height': 50,
                    'cookiepolicy' : 'single_host_origin',
                    'longtitle': true,
                    'theme': 'dark',
                    'onsuccess': onSuccess,
                    'onfailure': onFailure
                });
            }


                function signOut() {
                    var auth2 = gapi.auth2.getAuthInstance();
                    auth2.signOut().then(function () {
                        console.log('User signed out.');
                       
                    });
                }

                function onLoad() {
                    gapi.load('auth2', function () {
                        gapi.auth2.init({
                         client_id: 'CLIENT_ID.apps.googleusercontent.com'
                           
                        });
                    });
                }
                
                function checkState(){
                    
                    
                }
              

            $(document).on('click', '#logout', function(){
//                alert('click logout google');
                signOut();
                checkState();
            });
