
//api = "http://localhost/ventana-educativa/api/v1/";

//Función para obtener las categorias disponibles
function HeaderViewModel() {
    var self = this;
    self.categorias = ko.observableArray([]);
    $.getJSON(api + "vod/seriesXcategoriasXpadre/0", function (data) {
        self.categorias(data);
    })
}

//Ejecuta la función HeaderViewModel en el Header del archivo "index.tpl.php"
ko.applyBindings(new HeaderViewModel(), document.getElementById("menu"));

//Función para mostrar el menú que aparece al presionar el logo de ventana educativa

$(document).ready(function () {
    var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });
});