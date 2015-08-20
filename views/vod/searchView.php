<div id="search-div" class="container" data-bind="foreach:capitulos ">
    <div class="row">
        <div class="col-md-4">
            <a data-bind="attr:{href:'/ventana-educativa/vod/youtube/'+idVod()}"><img data-bind="attr:{src: thumbnail}"></a>
        </div>
        <div class="col-md-2" >
            <a data-bind="attr:{href:'/ventana-educativa/vod/youtube/'+idVod()}, text:titulo"></a>
        </div>
        <div class="col-md-12 search-sinopsis" data-bind="text:sinopsis"></div>
    </div>
</div>

<script>
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
ko.applyBindings(new SearchViewModel(), document.getElementById('search-div'));
</script>