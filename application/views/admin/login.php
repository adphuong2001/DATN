<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang quản trị</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/vender/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vender/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/vender/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url() ?>/vender/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon"
          href="<?= base_url() ?>/vender/img/logo_ad_page.png"/>
</head>
<body>
<?php
if (isset($message)){
    ?>
    <script>
        alert("<?=$message?>")
    </script>
<?php
}
?>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo" style="margin: 0px; padding: 0px; text-align: center">
                            <h1 style="color:#ff733e; font-weight: 900">TRANG QUẢN TRỊ</h1>
                        </div>
                        <h6 class="font-weight-light">Đăng nhập để tiếp tục.</h6>
                        <form class="pt-3" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="phone" name="phone" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="pass"  name="password" placeholder="Password">
                            </div>
                            <div class="mt-3">
<!--                                <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="--><?//= base_url() ?><!--/index.html">ĐĂNG NHẬP</a>-->
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="background: #ad3c51">ĐĂNG NHẬP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url() ?>/vender/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url() ?>/vender/assets/js/off-canvas.js"></script>
<script src="<?= base_url() ?>/vender/assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>/vender/assets/js/misc.js"></script>
<!-- endinject -->
</body>
</html>
