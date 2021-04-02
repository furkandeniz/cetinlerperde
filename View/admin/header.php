
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
    <link rel="stylesheet" href="Assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="Assets/custom.css">
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
                            <i class="nav-icon fas fa-th"></i>
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
                            <i class="nav-icon fas fa-user"></i>
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
                            <i class="nav-icon fas fa-user"></i>
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