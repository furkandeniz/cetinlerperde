<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 21.03.2021
 * Time: 16:29
 */
class Uyeler extends Controller {

    public function index(){

        $this->view('admin/login');
    }

    public function deneme($name) {
        echo 'hoşgeldin ' . $name;
    }
}
