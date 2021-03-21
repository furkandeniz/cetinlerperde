<?php if($_SESSION['user']){ ?>
    <?php include 'header.php'?>
        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Siparişler</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <span>Tablo Gelecek</span>
                    </div>

                </div>
            </div>

        </div>

    <?php include 'footer.php' ?>
<?php }else{
    header('Location: /login');
}
    ?>
