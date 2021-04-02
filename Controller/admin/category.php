<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 25.03.2021
 * Time: 13:08
 */

class Category extends Controller {

    public function add() {

        $this->view('admin/categoryadd');
    }

    public function create(){
        if (isset($_POST)) {
            $categoryName = $_POST['category_name'];
            $categoryCode = $_POST['category_code'];
            $category = $this->model('categories');
            $categoryCreate = $category->create($categoryName, $categoryCode);
            header('Location: categorylist');
        }
    }

    public function list(){
        $category = $this->model('categories');
        $categoryList = $category->getAll();
        $this->view('admin/categorylist',[
            'categorys' => $categoryList
        ]);
    }

    public function edit($id) {
        $category = $this->model('categories');
        $categoryEdit = $category->getId($id);
        $this->view('admin/categoryedit', [
           'categoryInfo' => $categoryEdit
        ]);
    }

    public function update() {
        if (isset($_POST)) {
            $categoryName = $_POST['category_name'];
            $categoryCode = $_POST['category_code'];
            $categoryActive = $_POST['active'];
            $categoryId = $_POST['id'];
            $category = $this->model('categories');
            $categoryUpdate = $category->update($categoryName, $categoryCode, $categoryActive, $categoryId);
            header('Location: categorylist');
        }
    }

    public function delete($id) {
        $category = $this->model('categories');
        $delete = $category->delete($id);
        header('Location: /categorylist');
    }
}