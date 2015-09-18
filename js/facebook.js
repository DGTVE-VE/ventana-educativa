$(function () {
//esta primera parte de la función nos permite saber los alcances o permisos que 
//necesitará nuestra aplicación para ejecutarse, ademas de crear de nuevo los 
//botones de inicio y cierre de sesion
//también se crea un div para imprimir el nombre del usuario que inicio sesión y 
//un img para la imagen del perfil de usuario.
    var app_id = '1408909052733113';
    var scopes = 'email, user_friends';
    var nameUser;
    var emailUser;
    var idUser;
    var imageUser;
    var conected = 0;

    //var api = "http://localhost/ventana-educativa/api/v1/";
    


//Aqui va parte del codigo proporcionado por facebook para inicializar el sdk y 
//obtenemos el status actual del usuario y lo devolvemos. Para mayor explicación 
//consultar la documentación de facebook. 

    window.fbAsyncInit = function () {
   
    FB.init({
        appId: app_id,
        status: true,
        cookie: true,
        xfbml: true,
        version: 'v2.2'
    });

   


    FB.getLoginStatus(function (response) {
        statusChangeCallback(response, function () {

        });
    });

 };

// This is called with the results from from FB.getLoginStatus(). Esta funcion
//  es llamada para saber que hacer dependiendo del status del usuario.

    var statusChangeCallback = function (response, callback) {

        if (response.status === 'connected') {
            //testAPI(); este metodo no lo necesitaremos
            
//Se comenta la llamada al metodo getFacebookData data porque este metodo no se 
//deja de ejecutar para comprobar el estado del usuario en todo momento por lo 
//cual el vod parpadea pues se esta redirigiendo siempre.

//            getFacebookData();
        }

        else {

            callback(false);
        }
    };
//esta función se llama cuando alguien termino con el boton de login.
    var checkLoginState = function (callback) {
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response, function (data) {
                callback(data);
            });
        });
    };
//con este metodo se tiene acceso a los datos del usuario despues de hacer Login    
    var getFacebookData = function () {
        FB.api('/me?fields=email,about,name', function (response) {
            
            idUser = response.id;
            nameUser = response.name;
            emailUser = response.email;
            imageUser = 'http://graph.facebook.com/' + response.id + '/picture?type=large';

//            alert('tu nombre es: ' + nameUser + 'y tu correo es: ' + response.email );

            var datos = {'nameUser': nameUser,
                'emailUser': emailUser,
                'idUser': idUser,
                'imageUser': imageUser
            };

            $.ajax({
                url: api + 'usuario/loginFacebook',
                type: 'POST',
                data: datos,
                ContentType: 'application/json; charset=utf-8',
                async: true,
                success: function (msg) {
//                        console.log(msg);
                    window.location.assign('vod/');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus);
                    alert('error');
                }
            });
        });
    };

    var facebookLogin = function () {
      //  alert('entro al login');
        checkLoginState(function (response) {
            if (!response) {
//                alert(response);
                FB.login(function (response) {
                    if (response.status === 'connected' && response.authResponse) {
//                        alert('aqui estoy');
                        getFacebookData();
                    }
                }, {scope: scopes});
            }else{
                if (response.status === 'connected' && response.authResponse) {
                        //alert('else');
                        getFacebookData();
                        window.location.assign('vod/');
                    }
            }
        });
    };
    
    



    var facebookLogout = function () {
        alert('entro al signout Facebook');
                FB.logout(function (response) {
                    
                });
    };




//evento click en el boton de login
    $(document).on('click', '#login', function (e) {
        facebookLogin();
    });

    $(document).on('click', '.logout', function (e) {
        console.log('logout');
        facebookLogout();
        window.location.assign('vod/closeSession');
    });

});
