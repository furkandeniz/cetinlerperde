<?php
/**
 * Created by PhpStorm.
 * User: furka
 * Date: 2.04.2021
 * Time: 22:51
 */
?>
<?php if($_SESSION['user']){ ?>
    <?php include 'header.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Form Ekle</h1>
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
                            <input class="form-control" type="text" placeholder="Form Adı" name="form_name" required><br>
                            <div class="form-group">
                                <label>Hesaplama Şekli</label>
                                <select class="form-control" name="hesaplama-yontemi" id="hesaplama-yontemi">
                                    <option value="-1">Seçiniz</option>
                                    <option value="width-area">Stor Perde</option>
                                    <option value="height-area">Tül Perde</option>
                                    <option value="width-and-height-area">Zebra Perde</option>
                                </select>
                            </div><br>
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
