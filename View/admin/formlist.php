<?php
/**
 * Created by PhpStorm.
 * User: furka
 * Date: 5.07.2021
 * Time: 14:47
 */

?>
<?php if($_SESSION['user']){ ?>
    <?php include 'header.php'; ?>

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Formlar</h1>
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
                                        <th>Adı</th>
                                        <th>Hesaplama Türü</th>
                                        <th>Durum</th>
                                        <th>Düzenle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Beyaz Perde</td>
                                            <td>En</td>
                                            <td>Aktif</td>
                                            <td><a href='productedit/' class="btn btn-block btn-info">Düzenle</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tül Perde</td>
                                            <td>Boy</td>
                                            <td>Aktif</td>
                                            <td><a href='productedit/' class="btn btn-block btn-info">Düzenle</a></td>
                                        </tr>
                                        <tr>
                                            <td>Zebra</td>
                                            <td>En x Boy</td>
                                            <td>Aktif</td>
                                            <td><a href='productedit/' class="btn btn-block btn-info">Düzenle</a></td>
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
