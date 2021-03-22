<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 22.03.2021
 * Time: 13:01
 */
?>
<?php if($_SESSION['user']){ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Çetinler Perde | Admin</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="../Assets/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../Assets/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/admin" class="brand-link">
                <span class="brand-text font-weight-light">Çetinler Perde</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block"><?= $_SESSION['user']?></a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Kullanıcı İşlemleri
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/useradd" class="nav-link active">
                                        <i class="fas fa-user-plus nav-icon"></i>
                                        <p>Ekle</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/userlist" class="nav-link">
                                        <i class="fas fa-user-edit nav-icon"></i>
                                        <p>Düzenle</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Kategoriler
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </aside>


        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kullanıcı Düzenle</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <?php
                            if(isset($message)){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $message ?>
                                </div>
                            <?php  }
                            ?>
                            <form action="/userupdate" method="post">
                                <input class="form-control form-control-lg" type="text" placeholder="İsim" value="<?= $userInfo['name'] ?>" name="name" required><br>
                                <input class="form-control form-control-lg" type="text" placeholder="Soyad" value="<?= $userInfo['lastname']?>" name="lastname" required><br>
                                <input class="form-control form-control-lg" type="email" placeholder="Email" value="<?= $userInfo['email']?>" name="email" required><br>
                                <input style="display: none;" value="<?= $userInfo['id']?>" name="id">
                                <div class="form-group">
                                    <label>Yetki Seçimi</label>
                                    <select class="form-control" name="role">
                                        <option value="superadmin">Süper Admin</option>
                                    </select>
                                </div><br>
                                <button type="submit" class="btn btn-success">Kaydet</button> <br>
                            </form>
                            <br><a href="/userdelete/<?= $userInfo['id'] ?>" class="btn btn-danger">Kullanıcıyı Sil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 <a href="#">Furkan Deniz</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../Assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../Assets/dist/js/adminlte.min.js"></script>
    <script src="../Assets/custom.js"></script>

    </body>
</html>
<?php }else{
    header('Location: /login');
}
?>