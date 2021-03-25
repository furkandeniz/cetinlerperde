<?php
/**
 * Created by PhpStorm.
 * User: furka
 * Date: 25.03.2021
 * Time: 20:13
 */
?>
<?php if($_SESSION['user']){ ?>
    <?php include 'header.php'; ?>

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ürünler</h1>
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
                                        <th>Kategori</th>
                                        <th>Stok Kodu</th>
                                        <th>Koleksiyon Kodu</th>
                                        <th>Marka</th>
                                        <th>Model</th>
                                        <th>Birim</th>
                                        <th>Ölçü</th>
                                        <th>Renk</th>
                                        <th>Max En</th>
                                        <th>Max Boy</th>
                                        <th>Durum</th>
                                        <th>Düzenle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($productList as $product){ ?>
                                        <tr>
                                            <td><?= $product['name'] ?></td>
                                            <td><?php foreach ($categoriesInProductList as $category) {
                                                if($category['product_id'] == $product['id']) {
                                                    foreach ($categoriesList as $categories) {
                                                        if($category['category_id'] == $categories['id']) { ?>
                                                            <span><?= $categories['name'];?></span><br>
                                                     <?php   }
                                                    }
                                                }
                                                } ?></td>
                                            <td><?= $product['stock_code'] ?></td>
                                            <td><?= $product['collection_code'] ?></td>
                                            <td><?= $product['brand'] ?></td>
                                            <td><?= $product['model'] ?></td>
                                            <td><?= $product['unit'] ?></td>
                                            <td><?= $product['measure'] ?></td>
                                            <td><?= $product['color'] ?></td>
                                            <td><?= $product['max_width'] ?></td>
                                            <td><?= $product['max_height'] ?></td>
                                            <td><?php if($product['active'] == "1"){ echo 'Aktif';} else { echo 'Pasif';}  ?></td>
                                            <td><a href='productedit/<?= $product['id'] ?>'class="btn btn-block btn-info">Düzenle</a></td>
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
