<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 2.04.2021
 * Time: 22:16
 */
?>
<?php if($_SESSION['user']){ ?>
    <?php include 'header.php'; ?>

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Hesaplama Yöntemleri</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>İsim</th>
                                        <th>Durumu</th>
                                        <th>Düzenle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Stor Perde</td>
                                            <td>Aktif</td>
                                            <td><a href="#" class="btn btn-info">Düzenle</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tül Perde</td>
                                            <td>Aktif</td>
                                            <td><a href="#" class="btn btn-info">Düzenle</a></td>
                                        </tr>
                                        <tr>
                                            <td>Zebra Perde</td>
                                            <td>Pasif</td>
                                            <td><a href="#" class="btn btn-info">Düzenle</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
    <?php include 'footer.php'; ?>
<?php }else{
    header('Location: /login');
}
?>
