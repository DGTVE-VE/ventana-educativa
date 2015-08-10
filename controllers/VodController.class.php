<?php

/**
 * Description of Vod
 *
 * @author Israel
 */
class VodController extends _BaseController {

    public function test() {
        include ('views/vod/testView.php');
    }

    public function serie($id) {
        $_SESSION[CONTENIDO_INCLUIDO] = file_get_contents('views/vod/serieView.php');
        include 'tpl/index.tpl.php';
    }

    public function youtube($id) {
        include ('views/vod/youtubeView.php');
    }

    public function defaultAction() {
        $_SESSION[CONTENIDO_INCLUIDO] = file_get_contents('views/vod/indexView.php');
        include 'tpl/index.tpl.php';
    }

    public function search() {
        include 'views/searchView.php';
    }

    public function finish($id) {
        include 'views/vod/finishView.php';
    }

}
