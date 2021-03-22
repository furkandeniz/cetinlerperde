<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 22.03.2021
 * Time: 09:46
 */
?>
<?php if($_SESSION['user']){ ?>
<?php include 'header.php'; ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kullanıcı Ekle</h1>
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
                    <form action="/usercreate" method="post">
                        <input class="form-control form-control-lg" type="text" placeholder="İsim" name="name" required><br>
                        <input class="form-control form-control-lg" type="text" placeholder="Soyad" name="lastname" required><br>
                        <input class="form-control form-control-lg" type="email" placeholder="Email" name="email" required><br>
                        <input class="form-control form-control-lg" type="password" placeholder="Şifre" name="password" required><br>
                        <input class="form-control form-control-lg" type="password" placeholder="Şifreyi Onayı" name="repassword" required><br>
                        <div class="form-group">
                            <label>Yetki Seçimi</label>
                            <select class="form-control" name="role">
                                <option value="superadmin">Süper Admin</option>
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
