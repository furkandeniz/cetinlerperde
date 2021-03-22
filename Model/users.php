<?php
/**
 * Created by PhpStorm.
 * User: furka
 * Date: 21.03.2021
 * Time: 17:50
 */
class Users extends Model {

    public function getAll(){
        return $this->db->query('SELECT * FROM users WHERE status = 1')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($email) {
        $response = NULL;
        $query = $this->db->prepare('SELECT * FROM users WHERE email= ? and status = 1 ');
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

    public function getId($id) {
        $response = NULL;
        $query = $this->db->prepare('SELECT * FROM users WHERE id= ? and status = 1 ');
        $query->execute(array($id));
        if($query->rowCount()) {
            foreach ($query as $row) {
                $response['id'] = $row['id'];
                $response['email'] = $row['email'];
                $response['password'] = $row['password'];
                $response['name'] = $row['name'];
                $response['lastname'] = $row['lastname'];
                $response['role'] = $row['role'];
            }
        }
        return $response;
    }

    public function create($name, $lastname, $email, $password, $role) {
        $query = $this->db->prepare("INSERT INTO users SET name = :uname, lastname = :ulastname, email= :uemail, password = :upassword, role =:urole");
        $insert = $query->execute(array("uname" => $name,"ulastname" => $lastname,"uemail" => $email,"upassword" => $password,"urole" => $role));
        if($insert) {
            $last_id = $this->db->lastInsertId();
        }
    }

    public function update($name, $lastname, $email, $role, $id) {
        $query = $this->db->prepare("UPDATE users SET name = :uname, lastname = :ulastname, email = :uemail, role = :urole WHERE id = :uid");
        $update = $query->execute(array(
            'uname' => $name,
            'ulastname' => $lastname,
            'uemail' => $email,
            'urole' => $role,
            'uid' => $id
        ));
    }

    public function delete($id) {
        $query = $this->db->prepare("UPDATE users SET status = :ustatus WHERE id = :uid");
        $delete = $query->execute(array(
            'ustatus' => '0',
            'uid' => $id
        ));
    }
}