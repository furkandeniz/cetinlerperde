<?php
/**
 * Created by PhpStorm.
 * User: furka
 * Date: 25.03.2021
 * Time: 23:06
 */

class CategoriesInProduct extends Model {

    public function getAll() {
        return $this->db->query('SELECT * FROM categories_in_product')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getId($id) {
        $response = NULL;
        $query = $this->db->prepare('SELECT * FROM categories_in_product WHERE product_id = :pid' );
        $query->execute(array(
            'pid' => $id
        ));
        if($query->rowCount()) {
            foreach ($query as $row) {
                $response['id'] = $row['id'];
                $response['product_id'] = $row['product_id'];
                $response['category_id'] = $row['category_id'];
            }
        }
        return $response;
    }

    public function add($productId, $categoryId) {
        $query = $this->db->prepare('INSERT INTO categories_in_product SET product_id = :pid, category_id = :cid');
        $create = $query->execute(array(
            'pid' => $productId,
            'cid' => $categoryId
        ));
        if($create) {
            $lastId = $this->db->lastInsertId();
        }
    }
}