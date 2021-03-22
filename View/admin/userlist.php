<?php
/**
 * Created by PhpStorm.
 * User: furkan
 * Date: 22.03.2021
 * Time: 09:46
 */?>
<?php if($_SESSION['user']){ ?>
<?php include 'header.php'; ?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kullanıcılar</h1>
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
                                        <th>Soyad</th>
                                        <th>Email</th>
                                        <th>Yetki</th>
                                        <th>Düzenle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($users as $user){ ?>
                                    <tr>
                                        <td><?= $user['name'] ?></td>
                                        <td><?= $user['lastname'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['role'] ?></td>
                                        <td><a href='useredit/<?= $user['id'] ?>'class="btn btn-block btn-info">Düzenle</a></td>
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
