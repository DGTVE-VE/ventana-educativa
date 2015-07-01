function SeriesViewModel() {
    // Data              
    var self = this;
    self.capitulos = ko.observableArray([]);
    self.serie = ko.observable();
    $.getJSON("/api/v1/vod/serie/1", function (data) {
        self.serie(data);
        document.body.style.background = "#000000 url(http://concrete-envoy-87323.appspot.com/?url=" + self.serie().thumbnail + ") no-repeat center center fixed";
    });

    $.getJSON("/api/v1/vod/capitulos/1", function (allData) {
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