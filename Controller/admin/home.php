<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 21.03.2021
 * Time: 21:36
 */
class Home extends Controller {

    public function index() {
        $this->view('admin/home');
    }
}