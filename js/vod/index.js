function VodIndexViewModel() {
    // Data              
    var self = this;
    self.recomendaciones = ko.observableArray([]);
    self.lomasvisto = ko.observableArray([]);
    self.estrenos = ko.observableArray([]);    

    $.getJSON("/api/v1/vod/categoria/recomendaciones", function (allData) {
        ko.mapping.fromJS(allData, {}, self.recomendaciones);
        console.log (self.recomendaciones);
    });
    
    $.getJSON("/api/v1/vod/categoria/lo+mas+visto", function (allData) {
        ko.mapping.fromJS(allData, {}, self.lomasvisto);
    });
    $.getJSON("/api/v1/vod/categoria/estrenos", function (allData) {
        ko.mapping.fromJS(allData, {}, self.estrenos);
    });
}

// Activates knockout.js
ko.applyBindings(new VodIndexViewModel());

