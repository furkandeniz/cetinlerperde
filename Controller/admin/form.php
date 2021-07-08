<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 2.04.2021
 * Time: 22:50
 */

class Form extends Controller{

    public function add(){

        $this->view('admin/formadd');
    }

    public function list(){

        $this->view('admin/formlist');
    }

    public function createOrder() {

        $this->view('admin/createorder');
    }
}