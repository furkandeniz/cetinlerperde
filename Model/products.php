<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 25.03.2021
 * Time: 20:04
 */

class Products extends Model {

    public function getAll() {
        return $this->db->query('SELECT * FROM products WHERE status = 1')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($productName, $productStockCode, $productCollectionCode, $productBrand, $productModel, $productUnit, $productColor, $productMeasure, $productMaxWidth, $productMaxHeight) {
        $query = $this->db->prepare('INSERT INTO products SET name = :pname, stock_code = :pstock_code, collection_code = :pcollection_code, brand = :pbrand, model = :pmodel, unit = :punit, color = :pcolor,measure = :pmeasure, max_width = :pmax_width, max_height = :pmax_height');
        $create = $query->execute(array(
            'pname' => $productName,
            'pstock_code' => $productStockCode,
            'pcollection_code' => $productCollectionCode,
            'pbrand' => $productBrand,
            'pmodel' => $productModel,
            'punit' => $productUnit,
            'pcolor' => $productColor,
            'pmeasure' => $productMeasure,
            'pmax_width' => $productMaxWidth,
            'pmax_height' => $productMaxHeight,
        ));
        if($create) {
            $lastId = $this->db->lastInsertId();
            return $lastId;
        }
    }
}