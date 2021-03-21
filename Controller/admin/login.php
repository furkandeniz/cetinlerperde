<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 21.03.2021
 * Time: 14:28
 */
class login extends Controller {

    public function index() {

       $this->view('admin/login');
    }

    public function post() {
        if(isset($_POST)) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userModel = $this->model('users');
            $user = $userModel->get($email);
            if($email == $user['email'] && $password == $user['password']) {
                $_SESSION['user'] = $user['name'] . ' ' . $user['lastname'];
                header('Location: admin');
            }else{
                $message = "Hatalı email/Şifre girdiniz";
                $this->view('admin/login', [
                   'errorMessage' => $message
                ]);
            }
        }
    }

    public function logout() {
        unset($_SESSION['user']);
        header('Location: login' );
    }
}


