/* 
        <!--Script para "renderizar" el boton (de Google), obtener los datos del usuario (en Google),
        "postearlos" al servidor y redireccionar al index del VOD-->
 */

//En este metodo se especifica lo que pasara en caso de que el Login de google 
//tenga exito, la obtención de datos por ejemplo y el posteo de los datos 
//obtenidos en la base de datos asi como la redirección al vod.

            
            function onSuccess(googleUser) {
                //Para obtener los datos del usuario
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

//En este metodo se especifican las acciones en caso de que el Login de Google 
//fracase.
            function onFailure(error) {
                console.log(error);
                alert('hay un error');
            }
            
//Esta función se llama cuando se oprime el boton de login de google y especifica
//el id del cliente que se creo en la consola de desarrollo de google los scopes
//para el manejo de la información del cliente y los metodos que se llamaran en
//caso de que se ejecute con exito el login o exista una falla al hacerlo 
//(onsuccess u onfailure)
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

//el logout se encuentra en una pagina diferente con respecto al login por lo 
//tanto se necesita cargar el metodo onLoad el cual carga la libreria necesaria
//para hacer el logout "gaphi.auth2.init", este metodo no hace el logout de la 
//cuenta Google sino de la aplicación Ventana Educativa.

                function signOut() {
                    var auth2 = gapi.auth2.getAuthInstance();
                    auth2.signOut().then(function () {
                        console.log('User signed out.');
                       
                    });
                }

                function onLoad() {
                    gapi.load('auth2', function () {
                        gapi.auth2.init({
                           
                        });
                    });
                }
                
              
//detecta el click en el boton logout y llama al metodo signOut()
            $(document).on('click', '#logout', function(){
                signOut();
            });
