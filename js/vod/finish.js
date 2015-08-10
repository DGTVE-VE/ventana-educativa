/** URL del api de ventana educativa*/
var api = "http://localhost/ventana-educativa/api/v1/";



function CapitulosViewModel() {
    // Data              
    var self = this;
    self.sugeridos = ko.observableArray([]);
    self.capitulo = ko.observable();

    // El ID de la serie viene como último parámetro en la URL
    var pos = window.location.href.toString().lastIndexOf("/");
    var id = window.location.href.toString().substring(pos + 1);
    // trae el capitulo que termino y las sugerencias(de la misma serie)

    $.getJSON(api + "vod/capitulo/" + id, function (data) {
        self.capitulo(data);
        document.body.style.background =
                "#000000 url("
                + data.thumbnail + ") no-repeat center center fixed";
    });

    $.getJSON(api + "vod/capituloSugerido/" + id, function (allData) {
        ko.mapping.fromJS(allData, {}, self.sugeridos);
    });

    self.Tooltip = function (index, numElements) {
        
        if (index + 1 == numElements) {
            console.log(numElements);
            console.log(index);
                $('[data-toggle="tooltip"]').tooltip();
            return true;     
        }
        };

      
}

// Activates knockout.js
ko.applyBindings(new CapitulosViewModel());



/*Etiqueta que se incluira en el rating al ser seleccionada una estrella por el usuario*/
$("#input-2").rating({
    starCaptions: {1: "Malo", 2: "Regular", 3: "Bueno", 4: "Muy Bueno", 5: "Excelente"}
});

/*Función que obtiene la calificación del lado cliente y envia para su publica-
 * ción en la base de datos */

$("#input-2").on("rating.change", function (event, value, caption) {

    var idVod = $('#idVod').val();
    var idSerie = $('#idSerie').val();

//    alert( idVod + idSerie );

    var datos = {'calificacion': value, 'idVod': idVod, 'idSerie': idSerie};
//    alert( datos.calificacion + datos.idSerie + datos.idVod );
    $.ajax({
        url: api + 'vod/calificarCapitulo',
        type: 'POST',
        data: datos,
        ContentType: 'application/json; charset=utf-8',
        async: true,
        success: function (msg) {
            console.log(msg + "Termino");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error(textStatus + "Fallo");
        }
    });
});