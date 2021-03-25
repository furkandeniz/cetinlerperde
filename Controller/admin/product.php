<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 25.03.2021
 * Time: 15:16
 */

class Product extends Controller {

    public function add() {
        $categories = $this->model('categories');
        $categoriesList = $categories->getAll();
        $this->view('admin/productadd',[
            'categories' => $categoriesList
        ]);
    }
}