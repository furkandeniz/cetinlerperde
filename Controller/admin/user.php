<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 22.03.2021
 * Time: 09:44
 */
class User extends Controller {

    public function add() {
        $this->view('admin/useradd');

    }

    public function create(){
        if (isset($_POST)){
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $role = $_POST['role'];
            if($password == $repassword) {
                $user = $this->model('users');
                $userControl = $user->get($email);
                if(empty($userControl)){
                    $password = md5($password);
                    $userCreate = $user->create($name,$lastname,$email,$password,$role);
                    header('Location: userlist');
                }else {
                    $message = "Böyle bir kullanıcı mevcut";
                    $this->view('admin/useradd', [
                        'message' => $message
                    ]);
                }
            }else {
                $message = "Şifre eşleşmiyor";
                $this->view('admin/useradd', [
                    'message' => $message
                ]);
            }
        }
    }

    public function list(){
        $user = $this->model('users');
        $userList = $user->getAll();
        $this->view('admin/userlist',[
            'users' => $userList
        ]);
    }

    public function edit($id){
        $user = $this->model('users');
        $userInfo = $user->getId($id);
        $this->view('admin/useredit', [
            'userInfo' => $userInfo
        ]);
    }

    public function update(){
        if(isset($_POST)) {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $id = $_POST['id'];
            $user = $this->model('users');
            $userUdate = $user->update($name, $lastname, $email, $role, $id);
            header('Location: userlist');
        }
    }

    public function delete($id) {
        $user = $this->model('users');
        $userDelete = $user->delete($id);
        header('Location: /userlist');
    }
}