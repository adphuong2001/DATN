<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang quản trị</title>
    <!-- plugins:css -->
    <link rel="stylesheet"
          href="<?= base_url() ?>vender/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="icon" href="<?=base_url()?>vender/img/logo_ad_page.png">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url() ?>vender/assets/css/style.css">

    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url() ?>vender/assets/jquery.min.js"></script>


    <script src="<?= base_url() ?>vender/assets/datatable/datatables.min.js"></script>
    <script src="<?= base_url() ?>vender/assets/moment/moment.js"></script>
    <script src="<?= base_url() ?>vender/js/myjsheade.js"></script>

    <script src="<?= base_url("vender/js/pagination.js") ?>"></script>
    <!--    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
    <script>
        const url_api = "<?=base_url()?>v1/";

        function getNumerologyTextType(type){
            if (type == 1) return "Bài học đường đời";
            else if (type == 2) return "Năng lực tự nhiên";
            else if (type == 3) return "Động lực bên trong";
            else if (type == 4) return "Nhân cách bên ngoài";
        }
    </script>
    <style>
        .col-md-12 > .tab-content {
            padding: 0px;
        }

        .content-wrapper {
            padding-top: 20px;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <div class="navbar-brand brand-logo" style="color: #ff733e; font-weight: 900; font-size: 20px">TRANG QUẢN TRỊ</div>
            <a class="navbar-brand brand-logo-mini"
               href="<?= base_admin_url() ?>"><img
                        src="<?= base_url() ?>vender/img/logo_ad_page.png"
                        alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center"
                    type="button" data-toggle="minimize" id="toggle_menu_minimize" style="color: #C32361; font-weight: 600">
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile">
                    <a class="nav-link" id="update-profile"
                       href="" aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="<?= base_url() ?>vender/img/default_img.png"
                                 alt="image" id="nav-img-admin">
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black" id="nav-name-admin">
                                Admin</p>
                        </div>
                    </a>

                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
                         aria-labelledby="profileDropdown"
                         data-x-placement="bottom-end">
                        <div class="p-3 text-center bg-primary">
                        </div>
                        <div class="p-2">
                            <h5 class="dropdown-header text-uppercase pl-2 text-dark">
                                User Options</h5>
                            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                               href="#">
                                <span>Inbox</span>
                                <span class="p-0">
                      <span class="badge badge-primary">3</span>
                      <i class="mdi mdi-email-open-outline ml-1"></i>
                    </span>
                            </a>
                            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                               href="#">
                                <span>Profile</span>
                                <span class="p-0">
                      <span class="badge badge-success">1</span>
                      <i class="mdi mdi-account-outline ml-1"></i>
                    </span>
                            </a>
                            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                <span>Settings</span>
                                <i class="mdi mdi-settings"></i>
                            </a>
                            <div role="separator"
                                 class="dropdown-divider"></div>
                            <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">
                                Actions</h5>
                            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                               href="#">
                                <span>Lock Account</span>
                                <i class="mdi mdi-lock ml-1"></i>
                            </a>
                            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                               href="#">
                                <span>Log Out</span>
                                <i class="mdi mdi-logout ml-1"></i>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                    type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <!--            <li class="nav-item nav-category">Main</li>-->
                <br>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_admin_url() ?>/listPosts">
                        <span class="icon-bg"><i
                                    class="mdi mdi-calendar-text menu-icon"></i></span>
                        <span class="menu-title">Bài viết</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_admin_url() ?>/listNumerologyPost">
                        <span class="icon-bg"><i
                                    class="mdi mdi-credit-card menu-icon"></i></span>
                        <span class="menu-title">Nội dung Thần số học</span>
                    </a>
                </li>

                <div style="height: 2px; width: 100%; background: #282834; margin: 20px 0px 10px 0px"></div>

                <li class="nav-item sidebar-user-actions">
                    <div class="sidebar-user-menu">
                        <a href="<?= base_admin_url('logout')?>"
                           class="nav-link"><i
                                    class="mdi mdi-logout menu-icon"
                                    style="color: #fc5a5a"></i>
                            <span class="menu-title" style="color: #fc5a5a">Đăng xuất</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
