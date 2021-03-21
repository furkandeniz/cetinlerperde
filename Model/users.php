<?php
/**
 * Created by PhpStorm.
 * User: furka
 * Date: 21.03.2021
 * Time: 17:50
 */
class Users extends Model {

    public function getAll(){
        return $this->db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($email) {
        $response = NULL;
        $query = $this->db->prepare('SELECT * FROM users WHERE email= ? ');
        $query->execute(array($email));
        if($query->rowCount()) {
            foreach ($query as $row) {
                $response['email'] = $row['email'];
                $response['password'] = $row['password'];
                $response['name'] = $row['name'];
                $response['lastname'] = $row['lastname'];
            }
        }
        return $response;
    }
}