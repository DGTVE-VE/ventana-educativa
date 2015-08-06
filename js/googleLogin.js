/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


            var api = "http://localhost/ventana-educativa/api/v1/";
            function onSuccess(googleUser) {
                //Para obtener los datos del usuario
                /*console.log('Logged in as: ' + googleUser.getBasicProfile().getName());*/
                GoogleID = googleUser.getBasicProfile().getId();
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
            }
            function renderButton() {
                gapi.signin2.render('my-signin2', {
                    'scope': 'https://www.googleapis.com/auth/plus.login',
                    'width': 45,
                    'height': 50,
                    'longtitle': true,
                    'theme': 'dark',
                    'onsuccess': onSuccess,
                    'onfailure': onFailure
                });
            }
