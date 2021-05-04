<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 25.03.2021
 * Time: 23:46
 */
?>
<?php if ($_SESSION['user']) { ?>

    <!DOCTYPE html>
    <!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
    -->
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

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>


            <!-- Right navbar links -->
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
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin" class="brand-link">
                <span class="brand-text font-weight-light">Çetinler Perde</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block"><?= $_SESSION['user']?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link">
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
                                        <p>Listele</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Kategoriler
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/categoryadd" class="nav-link active">
                                        <i class="fas fa-user-plus nav-icon"></i>
                                        <p>Ekle</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/categorylist" class="nav-link">
                                        <i class="fas fa-user-edit nav-icon"></i>
                                        <p>Listele</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Ürünler
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/productadd" class="nav-link active">
                                        <i class="fas fa-user-plus nav-icon"></i>
                                        <p>Ekle</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/productlist" class="nav-link">
                                        <i class="fas fa-user-edit nav-icon"></i>
                                        <p>Listele</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-calendar"></i>
                                <p>
                                    Hesaplama Yöntemleri
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/calculationmethodadd" class="nav-link active">
                                        <i class="fas fa-user-plus nav-icon"></i>
                                        <p>Ekle</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/calculationmethodlist" class="nav-link">
                                        <i class="fas fa-user-edit nav-icon"></i>
                                        <p>Listele</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-wpforms"></i>
                                <p>
                                    Form
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/formadd" class="nav-link active">
                                        <i class="fas fa-user-plus nav-icon"></i>
                                        <p>Ekle</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Ürün Ekle</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <?php
                            if (isset($message)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $message ?>
                                </div>
                            <?php }
                            ?>
                            <!-- Ürünü güncellemiyor yeni ürün ekliyor. -->
                            <form action="/productcreate" method="post">
                                <input class="form-control form-control-lg" type="text" placeholder="Ürün Adı" value="<?= $productList['name']?>"
                                       name="product_name" required><br>
                                <div class="container">
                                    <label>Kategori</label>
                                    <div class="row">
                                        <?php foreach ($categoryList as $category) { ?>

                                            <div class="col-4">
                                                <input type="checkbox" id="<?= $category['id'] ?>" name="category_id[]"
                                                       value="<?= $category['id'] ?>"
                                                    <?php foreach ($selectedCategories as $deneme) { ?>
                                                    <?php if ($productList['id'] == $deneme['product_id']) {?>
                                                    <?php if ($category['id'] == $deneme['category_id']){ ?> checked="checked" <?php } } } ?>>
                                                <label for="<?= $category['id'] ?>"><?= $category['name'] ?> </label><br>
                                            </div>

                                        <?php } ?>
                                    </div>
                                    <br>
                                </div>
                                <input class="form-control form-control-lg" type="text" value="<?= $productList['stock_code']?>" placeholder="Ürün Stok Kodu"
                                       name="stock_code" required><br>
                                <input class="form-control form-control-lg" type="text"
                                       placeholder="Ürün Koleksiyon Kodu" name="collation_code" value="<?= $productList['collection_code']?>" required><br>
                                <input class="form-control form-control-lg" type="text" placeholder="Marka" value="<?= $productList['brand']?>"  name="brand"
                                       required><br>
                                <input class="form-control form-control-lg" type="text" placeholder="Model" value="<?= $productList['model']?>" name="model"
                                       required><br>
                                <input class="form-control form-control-lg" type="text" placeholder="Birim" value="<?= $productList['unit']?>" name="unit"
                                       required><br>
                                <input class="form-control form-control-lg" type="text" placeholder="Renk" value="<?= $productList['color']?>" name="color"
                                       required><br>
                                <input class="form-control form-control-lg" type="number" placeholder="Ölçü" value="<?= $productList['measure']?>"
                                       name="measure" required><br>
                                <input class="form-control form-control-lg" type="number" placeholder="Maksimum En" value="<?= $productList['max_width']?>"
                                       name="max_width" required><br>
                                <input class="form-control form-control-lg" type="number"
                                       placeholder="Maksimum Yükseklik" value="<?= $productList['max_height']?>" name="max_height" required><br>
                                <button type="submit" class="btn btn-success">Kaydet</button>
                            </form>
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
<?php } else {
    header('Location: /login');
}
?>
