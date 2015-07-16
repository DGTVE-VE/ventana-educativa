

function VodIndexViewModel() {
    // Data              
    var self = this;
    self.recomendaciones = ko.observableArray([]);
    self.categorias = ko.observableArray([]);

    // Obtiene las recomendaciones
    $.getJSON("/api/v1/vod/seriesXcategoria/recomendaciones", function (allData) {
        ko.mapping.fromJS(allData, {}, self.recomendaciones);
    });

    // Obtiene las categorías de padre 0.
    $.getJSON("/api/v1/vod/seriesXcategoriasXpadre/0", function (allData) {
        ko.mapping.fromJS(allData, {}, self.categorias);
    });

    /*
     * Inicializa el Slider http://kenwheeler.github.io/slick/
     * 
     * Este slider es para las series dentro de cada categoría. La inicialización
     * del slider se realizó de acuerdo al ejemplo del slider responsivo.
     * 
     * @param {int} index indice de la iteración del foreach. La inicialización
     *              debe realizarse únicamente cuando todos los elementos fueron
     *              renderizados. El índice es base 0.
     * @param {int} numElements número de elementos que se rendizarán dentro del 
     *              foreach.
     * @returns {Boolean}
     */
    self.initSlick = function (index, numElements) {
        
        if (index + 1 == numElements) { // Es el último elemento en ser renderizado.
            $(".serie-slider").slick({
                arrows: true,
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 792,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },                   
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        }
        return true;
    }

}

ko.applyBindings(new VodIndexViewModel());

