<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 25.03.2021
 * Time: 13:38
 */

class Categories extends Model {

    public function getAll() {
        return $this->db->query('SELECT * FROM categories WHERE status = 1')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getId($id) {
        $response = NULL;
        $query = $this->db->prepare('SELECT * FROM categories WHERE status = 1 and id = :cid');
        $query->execute(array(
            'cid' => $id
        ));
        if($query->rowCount()) {
            foreach ($query as $row) {
                $response['name'] = $row['name'];
                $response['categoryCode'] = $row['category_Code'];
                $response['active'] = $row['active'];
                $response['id'] = $row['id'];
            }
        }
        return $response;
    }

    public function create($categoryName, $categoryCode) {

        $query = $this->db->prepare('INSERT INTO categories SET name = :cname, category_Code = :ccode');
        $create = $query->execute(array(
            'cname' => $categoryName,
            'ccode' => $categoryCode
        ));
        if($create) {
            $last_id = $this->db->lastInsertId();
        }
    }

    public function update($categoryName, $categoryCode, $categoryActive, $categoryId) {
        $query = $this->db->prepare('UPDATE categories SET name = :cname, category_Code = :ccode, active = :cactive WHERE id = :cid');
        $update = $query->execute(array(
            'cname' => $categoryName,
            'ccode' => $categoryCode,
            'cactive' => $categoryActive,
            'cid' => $categoryId
        ));
    }
}