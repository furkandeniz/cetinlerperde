<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 25.03.2021
 * Time: 13:10
 */
?>
<?php if($_SESSION['user']){ ?>
    <?php include 'header.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kategori Ekle</h1>
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
                        <form action="/categorycreate" method="post">
                            <input class="form-control form-control-lg" type="text" placeholder="Kategori Adı" name="category_name" required><br>
                            <input class="form-control form-control-lg" type="text" placeholder="Kategori Kodu" name="category_code" required><br>
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
