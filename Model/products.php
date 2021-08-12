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

    public function getAllActive() {
        return $this->db->query('SELECT * FROM products WHERE status = 1 and active = 1')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getId($id) {
        $response = NULL;
        $query = $this->db->prepare('SELECT * FROM products WHERE id = :pid');
        $query->execute(array(
           'pid' => $id
        ));
        if($query->rowCount()) {
            foreach ($query as $row) {
                $response['id'] = $row['id'];
                $response['name'] = $row['name'];
                $response['stock_code'] = $row['stock_code'];
                $response['collection_code'] = $row['collection_code'];
                $response['brand'] = $row['brand'];
                $response['model'] = $row['model'];
                $response['unit'] = $row['unit'];
                $response['color'] = $row['color'];
                $response['measure'] = $row['measure'];
                $response['max_width'] = $row['max_width'];
                $response['max_height'] = $row['max_height'];
            }
        }
        return $response;
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