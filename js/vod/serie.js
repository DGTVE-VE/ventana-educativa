//api = "http://localhost/ventana-educativa/api/v1/";

function SeriesViewModel() {    
    // Data              
    var self = this;
    self.capitulos = ko.observableArray([]);
    self.serie = ko.observable();

    // El ID de la serie viene como último parámetro en la URL
    var pos = window.location.href.toString().lastIndexOf("/");
    var id = window.location.href.toString().substring(pos + 1);
    $.getJSON(api + "vod/serie/" + id, function (data) {
        self.serie(data);
        // Después de obtener los datos de la serie obtiene el background
        // en blur en ese servicio. El servicio hay que mejorarlo para optimizar
        // la entrega de imagenes en blur.
        document.body.style.background =
//    document.getElementById('back-full').style.background =
                "#000000 url(http://concrete-envoy-87323.appspot.com/?url="
                + self.serie().thumbnail + ")no-repeat center center fixed";
//                + self.serie().thumbnail + ")no-repeat";
        
    });

    $.getJSON(api + "vod/capitulosXserie/" + id, function (allData) {
        ko.mapping.fromJS(allData, {}, self.capitulos);
    });

    self.temporadas = ko.computed(function () {
        t = [];
        if (typeof self.serie() === "undefined") {
            t.push(1);
            return t;
        }

        for (i = 1; i <= self.serie().temporadas; i++) {
            t.push(i);
        }
        return t;
    });

}
$(document).ready(function() {
    
    ko.applyBindings(new SeriesViewModel(), document.getElementById("serie-view"));
});

// Activates knockout.js


/*Etiqueta que se incluira en el rating al ser seleccionada una estrella por el usuario*/
//$("#input-1").rating({
//    starCaptions: {1: "Malo", 2: "Regular", 3: "Bueno", 4: "Muy Bueno", 5: "Excelente"}
//});

/*Función que */
$("#input-1").on("rating.change", function (event, value, caption) {
    id = document.getElementById('idSerie');
    console.log(id.value);
    var datos = {'calificacion': value, 'idVideo': id.value};
    $.ajax({
        url: api + 'serie/calificarSerie',
        type: 'POST',
        data: datos,
        ContentType: 'application/json; charset=utf-8',
        async: true,
        success: function (msg) {
            console.log(msg);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error(textStatus);
        }
    });
});
/*Etiqueta que se incluira en el rating al ser seleccionada una estrella por el usuario*/
$("#input-1").rating({
    starCaptions: {1: "Malo", 2: "Regular", 3: "Bueno", 4: "Muy Bueno", 5: "Excelente"}
});


$("#input-1").on("rating.change", function (event, value, caption) {
    id = document.getElementById('idSerie');
    console.log(id.value);
    var datos = {'calificacion': value, 'idVideo': id.value};
    $.ajax({
        url: api + 'serie/calificarSerie',
        type: 'POST',
        data: datos,
        ContentType: 'application/json; charset=utf-8',
        async: true,
        success: function (msg) {
            console.log(msg);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error(textStatus);
        }
    });
});