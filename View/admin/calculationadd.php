<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 2.04.2021
 * Time: 20:28
 */
?>
<?php if($_SESSION['user']){ ?>
    <?php include 'header.php'; ?>
    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Hesaplama Yöntemi Ekle</h1>
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
                        <form action="/calculationmethodlist" method="post">
                            <input class="form-control" type="text" placeholder="Kural Adı" name="name" required><br>
                            <div class="form-group">
                                <label>Hesaplama Şekli</label>
                                <select class="form-control" name="method" id="method">
                                    <option value="-1">Seçiniz</option>
                                    <option value="width-area">En</option>
                                    <option value="height-area">Boy</option>
                                    <option value="width-and-height-area">En x Boy</option>
                                    <option value="quantity">Miktar</option>
                                </select>
                            </div><br>

                            <div class="width-area">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">En</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <div class="col-2">
                                                    <label>İşlemden Önce</label>
                                                </div>
                                                <div class="col-5">
                                                    <select class="form-control" name="width-area" id="width-area">
                                                        <option value="width-plus">En Artı</option>
                                                        <option value="width-minus">En Eksi</option>
                                                    </select>
                                                </div>
                                                <div class="col-5">
                                                    <input class="form-control" type="number" value="0" name="width-value"><br>
                                                </div>
                                            </div>
                                            <div class="input-group col-12 d-flex">
                                                <div class="col-6">
                                                    <label>Minimum En</label>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="number" value="0" placeholder="Minimum En" name="min-width"><br>
                                                </div>
                                            </div>
                                            <div class="input-group col-12 d-flex">
                                                <div class="col-6">
                                                    <label>En Artışı</label>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="number" value="0" placeholder="En Artışı" name="width-increase"><br>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex">
                                                <div class="col-4">
                                                    <label>Eğer En W1'den büyük ise W2'yi Kullan</label>
                                                </div>
                                                <div class="input-group col-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">W1</span>
                                                    </div>
                                                    <input type="number" value="0" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                                <div class="input-group col-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">W2</span>
                                                    </div>
                                                    <input class="form-control" type="number" value="0">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>

                            <div class="height-area">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Boy</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <div class="col-2">
                                                    <label>İşlemden Önce</label>
                                                </div>
                                                <div class="col-5">
                                                    <select class="form-control" name="height-area" id="height-area">
                                                        <option value="height-plus">Boy Artı</option>
                                                        <option value="height-minus">Boy Eksi</option>
                                                    </select>
                                                </div>
                                                <div class="col-5">
                                                    <input class="form-control" type="number" value="0" name="height-value"><br>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex">
                                                <div class="col-6">
                                                    <label>Minimum Boy</label>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="number" value="0" placeholder="Minimum Boy" name="min-height"><br>
                                                </div>
                                            </div><br />
                                            <div class="col-12 d-flex">
                                                <div class="col-6">
                                                    <label>Boy Artışı</label>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="number" value="0" placeholder="Boy Artışı" name="height-increase"><br>
                                                </div>
                                            </div><br />
                                            <div class="col-12 d-flex">
                                                <div class="col-4">
                                                    <label>Eğer Boy H1'den büyük ise H2'yi Kullan</label>
                                                </div>
                                                <div class="input-group col-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">H1</span>
                                                    </div>
                                                    <input type="number" value="0" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                                <div class="input-group col-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">H2</span>
                                                    </div>
                                                    <input type="number" value="0" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>

                            <div class="width-and-height-area">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">En x Boy</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <div class="col-6">
                                                    <label>Minimum En x Boy</label>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="number" value="0" placeholder="Minimum En x Boy" name="min-height"><br>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex">
                                                <div class="col-6">
                                                    <label>En x Boy Artışı</label>
                                                </div>
                                                <div class="col-6">
                                                    <input class="form-control" type="number" value="0" placeholder="En x Boy Artışı" name="height-increase"><br>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label>Eğer En ve Boy aynı anda W1 ve H1'den büyük ise W2 ve H2 yi Kullan</label>
                                            </div>
                                            <div class="col-12 d-flex">
                                                <div class="input-group col-6">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">W1</span>
                                                    </div>
                                                    <input type="number" value="0" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                                <div class="input-group col-6">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">H1</span>
                                                    </div>
                                                    <input type="number" value="0" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="col-12 d-flex">
                                                <div class="input-group col-6">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">W2</span>
                                                    </div>
                                                    <input type="number" value="0" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                                <div class="input-group col-6">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">H2</span>
                                                    </div>
                                                    <input type="number" value="0" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="quantity">
                                <div class="row">
                                    <div class="col-12 d-flex">
                                        <div class="col-6">
                                            <label>Miktar</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="number" value="0" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <label><strong>* İşlem Yapmamasını istediğiniz Yere 0 Yazın</strong></label><br>
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

