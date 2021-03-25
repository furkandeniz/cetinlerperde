<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 25.03.2021
 * Time: 13:46
 */
?>

<?php if($_SESSION['user']){ ?>
    <?php include 'header.php'; ?>

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kategoriler</h1>
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
                                        <th>Kategori Kodu</th>
                                        <th>Durumu</th>
                                        <th>Düzenle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($categorys as $category){ ?>
                                        <tr>
                                            <td><?= $category['name'] ?></td>
                                            <td><?= $category['category_Code'] ?></td>
                                            <td><?php if($category['active'] == '1' ) {
                                                   echo "Aktif";
                                                }else {
                                                echo "Pasif";
                                                } ?></td>
                                            <td><a href='categoryedit/<?= $category['id'] ?>'class="btn btn-block btn-info">Düzenle</a></td>
                                        </tr>
                                    <?php } ?>
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
