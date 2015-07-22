api = "http://localhost/ventana-educativa/api/v1/";
function SeriesViewModel() {
    // Data              
    var self = this;
    self.capitulos = ko.observableArray([]);
    self.serie = ko.observable();
    
    // El ID de la serie viene como último parámetro en la URL
    var pos = window.location.href.toString().lastIndexOf("/");
    var id = window.location.href.toString().substring(pos + 1);
    $.getJSON(api+"vod/serie/"+id, function (data) {
        self.serie(data);
        // Después de obtener los datos de la serie obtiene el background
        // en blur en ese servicio. El servicio hay que mejorarlo para optimizar
        // la entrega de imagenes en blur.
        document.body.style.background = 
                "#000000 url(http://concrete-envoy-87323.appspot.com/?url=" 
                + self.serie().thumbnail + ") no-repeat center center fixed";
    });

    $.getJSON(api+"vod/capitulosXserie/"+id, function (allData) {
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

// Activates knockout.js
ko.applyBindings(new SeriesViewModel());