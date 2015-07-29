api = "http://localhost/ventana-educativa/api/v1/";
function SearchViewModel() {
    // Data              
    var self = this;
    self.capitulos = ko.observableArray([]);
    var pos = window.location.href.toString().lastIndexOf("/");
    var searchText = window.location.href.toString().substring(pos + 1);
    console.log (decodeURI(searchText));
    console.log (api+"search/vod/"+decodeURI(searchText));
    $.getJSON(api+"search/vod/"+decodeURI(searchText), function (allData) {
        console.log ("Data"+allData);
        ko.mapping.fromJS(allData, {}, self.capitulos);
    });
//    console.log(self.capitulos());
}

// Activates knockout.js
ko.applyBindings(new SearchViewModel());
