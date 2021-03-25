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

    public function create() {
        if (isset($_POST)) {
            $productName = $_POST['product_name'];
            $productStockCode = $_POST['stock_code'];
            $productCollectionCode = $_POST['collation_code'];
            $productBrand = $_POST['brand'];
            $productModel = $_POST['model'];
            $productUnit = $_POST['unit'];
            $productColor = $_POST['color'];
            $productMeasure = $_POST['measure'];
            $productMaxWidth = $_POST['max_width'];
            $productMaxHeight = $_POST['max_height'];
            $product = $this->model('products');
            $productCreate = $product->create($productName, $productStockCode, $productCollectionCode, $productBrand, $productModel, $productUnit, $productColor, $productMeasure, $productMaxWidth, $productMaxHeight);
            if(!empty($_POST['category_id'])) {
                $categoriesInProduct = $this->model('categoriesinproduct');
                foreach ($_POST['category_id'] as $categoryId) {
                    $categoriesInProductAdd = $categoriesInProduct->add($productCreate, $categoryId);
                }
            }
            header('Location: productlist');
        }
    }

    public function list(){

        $product = $this->model('products');
        $productList = $product->getAll();
        $categoriesInProduct = $this->model('categoriesinproduct');
        $categoriesInProductList = $categoriesInProduct->getAll();
        $categories = $this->model('categories');
        $categoriesList = $categories->getAll();

        $this->view('admin/productlist', [
            'productList' => $productList,
            'categoriesInProductList' => $categoriesInProductList,
            'categoriesList' => $categoriesList
        ]);
    }

    public function edit($id) {
        $this->view('admin/productedit');
    }
}