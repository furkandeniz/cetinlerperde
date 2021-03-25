<?php
/**
 * Created by PhpStorm.
 * User: furka
 * Date: 25.03.2021
 * Time: 15:18
 */
?>
<?php if($_SESSION['user']){ ?>
    <?php include 'header.php'; ?>
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
                        if(isset($message)){ ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $message ?>
                            </div>
                        <?php  }
                        ?>
                        <form action="/productcreate" method="post">
                            <input class="form-control form-control-lg" type="text" placeholder="Ürün Adı" name="product_name" required><br>
                            <div class="container">
                                <label>Kategori</label>
                                <div class="row">
                                <?php foreach($categories as $category){ ?>
                                    <div class="col-4">
                                        <input type="checkbox" id="<?= $category['id']?>" name="category_id[]" value="<?= $category['id']?>">
                                        <label for="<?=$category['id'] ?>"><?= $category['name']?></label><br>
                                    </div>
                                <?php } ?>
                                </div><br>
                            </div>
                            <input class="form-control form-control-lg" type="text" placeholder="Ürün Stok Kodu" name="stock_code" required><br>
                            <input class="form-control form-control-lg" type="text" placeholder="Ürün Koleksiyon Kodu" name="collation_code" required><br>
                            <input class="form-control form-control-lg" type="text" placeholder="Marka" name="brand" required><br>
                            <input class="form-control form-control-lg" type="text" placeholder="Model" name="model" required><br>
                            <input class="form-control form-control-lg" type="text" placeholder="Birim" name="unit" required><br>
                            <input class="form-control form-control-lg" type="text" placeholder="Renk" name="color" required><br>
                            <input class="form-control form-control-lg" type="number" placeholder="Ölçü" name="measure" required><br>
                            <input class="form-control form-control-lg" type="number" placeholder="Maksimum En" name="max_width" required><br>
                            <input class="form-control form-control-lg" type="number" placeholder="Maksimum Yükseklik" name="max_height" required><br>
                            <button type="submit" class="btn btn-success">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
<?php }else{
    header('Location: /login');
}
?>
