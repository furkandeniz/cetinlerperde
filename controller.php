<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 21.03.2021
 * Time: 16:50
 */
class Controller {

    public function view($name, $data = []){
        extract($data);
        require __DIR__ . '/View/' . strtolower($name) . '.php';
    }

    public function model($name) {
        require __DIR__ . '/Model/' . strtolower($name) . '.php';
        return new $name();
    }
}