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