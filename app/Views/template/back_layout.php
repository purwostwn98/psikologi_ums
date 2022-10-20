<!doctype html>
<html lang="en">
<?php
$session = \Config\Services::session();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="<?= base_url(); ?>" />

    <title>Assessme | Psychology UMS</title>

    <!-- include common vendor stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/node_modules/bootstrap/dist/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/node_modules/@fortawesome/fontawesome-free/css/regular.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/node_modules/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/node_modules/@fortawesome/fontawesome-free/css/solid.css">

    <!-- include vendor stylesheets used in "DataTables" page. see "application/views/default/pages/partials/table-datatables/@vendor-stylesheets.hbs" -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.css">
    <!-- include vendor stylesheets used in "Dashboard 2" page. see "application/views/default/pages/partials/dashboard-2/@vendor-stylesheets.hbs" -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/dist/css/ace-font.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/dist/css/ace.css">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/belakang/assets/favicon.png" />
    <!-- "Dashboard 2" page styles specific to this page for demo purposes -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/belakang/dist/css/ace-themes.css">
    <!-- data table css -->
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">


</head>

<body>
    <div class="body-container">
        <div class="main-container content-bg1">

            <div id="sidebar" class="sidebar sidebar-white sidebar-fixed sidebar-backdrop expandable d-none d-xl-block" data-swipe="true" data-dismiss="true">
                <div class="sidebar-inner">

                    <!-- .navbar-brand inside sidebar, only show in desktop view -->
                    <!-- <div class="d-none d-xl-flex sidebar-section-item m-0 fadeable-left fadeable-top">
                        <div class="fadeinable">
                            <div class="py-2 mx-1 border-b-1 brc-secondary-l1" id="sidebar-header-brand1">
                                <a class="navbar-brand text-140">
                                    <img src="<?= base_url(); ?>/belakang/assets/image/kembang.png" style="max-height: 40px;" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="fadeable w-100 ">
                            <div class="py-2 text-center mx-3 border-b-1 brc-secondary-l1" id="sidebar-header-brand2">

                                <a class="navbar-brand ml-n2 text-140 text-grey-d2" href="#">
                                    <img src="<?= base_url(); ?>/belakang/assets/image/kembang.png" style="max-height: 40px;" alt="">
                                    Lazismu <span>UMS</span>
                                </a>

                            </div>
                        </div>
                    </div> -->
                    <!-- /.sidebar-section-item  -->


                    <div class="pt-2 flex-grow-1 ace-scroll" ace-scroll>
                        <div class="sidebar-section-item mx-0  fadeable-left fadeable-top">
                            <div class="fadeinable">
                                <img src="https://www.ums.ac.id/wp-content/uploads/2021/12/Resmi_Logo_UMS_Color.png" style="max-width: 40px;" class="p-2px border-2 brc-primary-tp2 radius-round" />
                            </div>

                            <div class="fadeable hideable">

                                <div class="py-2 d-flex flex-column align-items-center">
                                    <div>
                                        <img src="https://www.ums.ac.id/wp-content/uploads/2021/12/Resmi_Logo_UMS_Color.png" style="max-height: 70px;" class="p-2px pb-2" />
                                    </div>

                                    <div class="text-center mt-1" id="id-user-info">
                                        <a href="#id-user-menu" class="d-style pos-rel collapsed text-blue accordion-toggle no-underline bgc-h-primary-l2 px-1 py-2px" data-toggle="collapse" aria-expanded="false">
                                            <span class="text-95 font-bolder">Assessme</span>
                                            <i class="fa fa-caret-down text-90 d-collapsed"></i>
                                            <i class="fa fa-caret-up text-90 d-n-collapsed"></i>
                                        </a>
                                        <div class="text-muted text-80">Universitas Muhammadiyah Surakarta</div>
                                    </div><!-- /#id-user-info -->

                                    <div class="collapse" id="id-user-menu">
                                        <div class="mt-3">
                                            <a href="#" class="btn bgc-blue-l2 btn-brc-white btn-h-outline-blue radius-round py-2 px-1 text-center border-2 shadow-sm">
                                                <i class="fa fa-envelope w-4 text-110 text-blue-m1"></i>
                                            </a>

                                            <a href="#" class="btn bgc-purple-l2 btn-brc-white btn-h-outline-purple radius-round py-2 px-1 text-center border-2 shadow-sm">
                                                <i class="fa fa-users w-4 text-110 text-purple-m1"></i>
                                            </a>

                                            <a href="#" class="btn bgc-warning-l2 btn-brc-white btn-h-outline-warning radius-round py-2 px-1 text-center border-2  shadow-sm">
                                                <i class="fa fa-star w-4 text-110 text-orange-m1"></i>
                                            </a>
                                        </div>
                                    </div><!-- /.collapse -->
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="nav flex-column mt-2 has-active-border" role="navigation" aria-label="Main">
                            <!-- Sidebar Admin -->
                            <!-- <li class="nav-item active"> -->
                            <li class="nav-item">
                                <a href="/admin" class="nav-link">
                                    <i class="nav-icon 	fa fa-desktop"></i>
                                    <span class="nav-text fadeable">
                                        <span>Dashboard</span>
                                    </span>
                                </a>
                                <b class="sub-arrow"></b>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/daftar-responden" class="nav-link">
                                    <i class="nav-icon 	fa fa-book"></i>
                                    <span class="nav-text fadeable">
                                        <span>Data Respondent</span>
                                    </span>
                                </a>
                                <b class="sub-arrow"></b>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/data-instrumen" class="nav-link">
                                    <i class="nav-icon 	fa fa-archive" aria-hidden="true"></i>
                                    <span class="nav-text fadeable">
                                        <span>Data Instrument</span>
                                    </span>
                                </a>
                                <b class="sub-arrow"></b>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/manajemen-user" class="nav-link">
                                    <i class="nav-icon 	fa fa-users" aria-hidden="true"></i>
                                    <span class="nav-text fadeable">
                                        <span>User Management</span>
                                    </span>
                                </a>
                                <b class="sub-arrow"></b>
                            </li>
                        </div>
                    </div>
                </div>
            </div>



            <div role="main" class="main-content">
                <nav class="navbar navbar-sm navbar-expand-lg navbar-fixed navbar-white">
                    <div class="navbar-inner">

                        <div class="justify-content-xl-between d-flex h-100 align-items-center">

                            <button type="button" class="btn text-grey-m2 btn-burger burger-arrowed static collapsed ml-2 d-flex d-xl-none" data-toggle-mobile="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
                                <span class="bars"></span>
                            </button>

                            <a class="navbar-brand d-xl-none mx-1 text-grey-d3 text-130" href="#">
                                <img src="https://www.ums.ac.id/wp-content/uploads/2021/12/Resmi_Logo_UMS_Color.png" style="max-height: 50px;" class="p-2px pb-2" />
                            </a>

                            <button type="button" class="btn text-grey-m2 btn-burger align-self-center mx-2 d-none d-xl-flex btn-h-light-primary" data-toggle="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle sidebar">
                                <span class="bars"></span>
                            </button>

                        </div>


                        <!-- .navbar-menu togger -->
                        <button class="navbar-toggler ml-1 mr-2 px-1" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navbar menu">
                            <img class="mx-0 radius-round border-2 brc-primary-tp3 p-1px" src="https://www.ums.ac.id/wp-content/uploads/2021/12/Resmi_Logo_UMS_Color.png" width="36" alt="Jason's Photo">
                        </button>


                        <div class="navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu">
                            <div class="navbar-nav">
                                <ul class="nav has-active-border">
                                    <li class="nav-item dropdown dropdown-mega">
                                        <a class="nav-link dropdown-toggle mr-1px" href="#" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-list-alt mr-2 d-lg-none"></i>
                                            Purwo Setiawan
                                            <i class="caret fa fa-angle-down d-none d-lg-block"></i>
                                            <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                                        </a>
                                        <div class="shadow dropdown-menu dropdown-animated dropdown-sm p-0 brc-primary-m3 border-1 border-b-2 bgc-white">
                                            <div class="tab-content tab-sliding p-0">
                                                <div class="tab-pane mh-none show active px-md-1 pt-1" id="navbar-notif-tab-1" role="tabpanel">
                                                    <a href="/admin/edit_profil" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                        <i class="fa fa-users bgc-blue-tp1 text-white text-110 mr-1 p-2 radius-1"></i>
                                                        <span class="text-muted">Edit Profil</span>
                                                        <!-- <span class="float-right badge badge-danger radius-round text-80">- 4</span> -->
                                                    </a>
                                                    <a href="/iniauth/logout" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                                        <i class="fa fa-times bgc-pink-tp1 text-white text-110 mr-1 p-2 radius-1"></i>
                                                        <span class="text-muted">Logout</span>
                                                        <!-- <span class="float-right badge badge-info radius-round text-80">+12</span> -->
                                                    </a>
                                                </div><!-- .tab-pane : notifications -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- This is CONTENT -->
                <?= $this->renderSection("konten"); ?>


                <footer class="footer d-none d-sm-block">
                    <div class="footer-inner">
                        <div class="h-100 pt-3 border-none border-t-1 brc-default-l1 bgc-white-tp1 shadow">
                            <span class="text-primary-m2 font-bolder text-120">Assessme</span>
                            <span class="text-muted">Psikologi Universitas Muhammadiyah Surakarta &copy; 2022</span>
                            <!-- <span class="mx-3 action-buttons">
                                <a href="#" class="text-blue2-m3 text-140"><i class="fab fa-twitter-square"></i></a>
                                <a href="#" class="text-blue-d1 text-140"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="text-orange text-140"><i class="fa fa-rss-square"></i></a>
                            </span> -->
                        </div>
                    </div><!-- .footer-inner -->
                </footer>

                <div class="footer-tools">
                    <a id="btn-scroll-up" href="#" class="btn-scroll-up btn btn-white brc-black-tp7 btn-smd border-2 radius-round mb-2 mr-2">
                        <i class="fa fa-angle-double-up w-2 h-2"></i>
                    </a>
                </div>
            </div><!-- /main -->

            <div id="id-ace-settings-modal" class="my-1 my-lg-2 modal modal-nb ace-aside aside-right aside-offset aside-below-nav" data-backdrop="false" tabindex="-1" role="dialog" aria-hidden="true">

                <div class="modal-dialog" role="document">
                    <div class="modal-content w-auto flex-grow-1 pb-1px radius-0 radius-l-2 border-y-2 border-l-1 brc-default-m3 bgc-white-tp1 shadow">
                        <div class="modal-header p-0 radius-0 mx-3">
                            <h4 class="modal-title text-blue-m1 pt-2 pl-1">Demo Settings</h4>
                            <button type="button" class="close m-0 mr-n2" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times text-70" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="modal-body mx-md-2" ace-scroll='{"smooth": true, "lock": true}'>
                            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                <h5 class="text-secondary-m1">Zoom</h5>
                                <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                                    <label class="btn btn-sm btn-light-grey btn-h-light-primary btn-a-primary">
                                        90%
                                        <input type="radio" name="zoom-level" value="90" autocomplete="off" />
                                    </label>
                                    <label class="btn btn-sm btn-light-grey btn-h-light-primary btn-a-primary active">
                                        100%
                                        <input type="radio" name="zoom-level" value="none" autocomplete="off" checked />
                                    </label>
                                    <label class="btn btn-sm btn-light-grey btn-h-light-primary btn-a-primary">
                                        110%
                                        <input type="radio" name="zoom-level" value="110" autocomplete="off" />
                                    </label>
                                    <label class="btn btn-sm btn-light-grey btn-h-light-primary btn-a-primary">
                                        120%
                                        <input type="radio" name="zoom-level" value="120" autocomplete="off" />
                                    </label>
                                </div>
                            </div>

                            <hr class="border-double my-md-3" />
                            <h5 class="text-purple-m2">
                                Themes
                            </h5>
                            <div class="bgc-secondary-l3 py-1 radius-1 mb-3 border-1 radius-1 border-l-3 brc-secondary-m3">
                                <label class="mt-1 pr-2 d-flex align-items-center" for="id-auto-match">
                                    <input type="checkbox" class="input-lg mx-15" id="id-auto-match" autocomplete="off" checked />
                                    <div class="pl-0 text-secondary-d1 text-90 font-bolder">Match sidebar &amp; navbar themes</div>
                                </label>
                            </div>
                            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                <h6 class="text-95 pl-1 text-grey-d1">Sidebar:</h6>
                                <div class="btn-group btn-group-toggle align-self-end flex-wrap px-0  col-10 col-sm-7" data-toggle="buttons">
                                    <label class="btn btn-sm btn-outline-default active mb-1">
                                        Default
                                        <input type="radio" name="sidebar-theme" value="default" autocomplete="off" checked />
                                    </label>
                                    <label class="btn btn-sm btn-outline-default mb-1">
                                        Dark
                                        <input type="radio" name="sidebar-theme" value="dark" autocomplete="off" />
                                    </label>
                                    <label class="btn btn-sm btn-outline-default mb-1 ">
                                        Light
                                        <input type="radio" name="sidebar-theme" value="light" autocomplete="off" />
                                    </label>
                                </div>
                            </div>
                            <div>
                                <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-sidebar-themes-dark">
                                    <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-dark d-style active">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="dark" autocomplete="off" checked />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="darkblue" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslategrey d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="darkslategrey" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-cadetblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="cadetblue" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-plum d-style my-1px">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="plum" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkslateblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="darkslateblue" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-purple d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="purple" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-steelblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="steelblue" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-blue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="blue" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-teal d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="teal" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-green d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="green" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-darkcrimson d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="darkcrimson" autocomplete="off" />
                                        </label>
                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient1 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient1" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient2 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient2" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient3 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient3" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient4 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient4" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs sidebar-color border-0 sidebar-gradient5 d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="sidebar-dark" value="gradient5" autocomplete="off" />
                                        </label>

                                    </div>
                                </div><!-- #id-sidebar-themes-dark -->


                                <div class="d-none" id="id-sidebar-themes-light">
                                    <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                                        <div class="d-flex btn-group btn-group-toggle align-self-end flex-wrap justify-content-center mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                                            <label class="active btn btn-xs border-0 sidebar-lightblue d-style my-1px">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="lightblue" autocomplete="off" checked />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-lightpurple d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="lightpurple" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-lightblue2 d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="lightblue2" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-white2 d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="white2" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-white d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="white" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-white3 d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="white3" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 sidebar-light d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="sidebar-light" value="light" autocomplete="off" />
                                            </label>

                                        </div>
                                    </div>
                                </div><!-- #id-sidebar-themes-light -->

                            </div>


                            <hr class="border-dotted" />


                            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                <h6 class="text-95 pl-1 text-grey-d1">Navbar:</h6>

                                <div class="btn-group btn-group-toggle align-self-end flex-wrap px-0 col-10 col-sm-7" data-toggle="buttons">
                                    <label class="btn btn-sm btn-outline-green active mb-1">
                                        Default
                                        <input type="radio" name="navbar-theme" value="default" autocomplete="off" checked />
                                    </label>

                                    <label class="btn btn-sm btn-outline-green mb-1">
                                        Light
                                        <input type="radio" name="navbar-theme" value="light" autocomplete="off" />
                                    </label>

                                    <label class="btn btn-sm btn-outline-green mb-1">
                                        Dark
                                        <input type="radio" name="navbar-theme" value="dark" autocomplete="off" />
                                    </label>
                                </div>

                            </div>

                            <div>

                                <div class="d-none bgc-secondary-l1 radius-1 px-1 mb-3 mt-1 text-center" id="id-navbar-themes-dark">
                                    <div class="btn-group btn-group-toggle align-self-end flex-wrap justify-content-center w-75 mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                                        <label class="btn btn-xs navbar-color border-0 navbar-steelblue d-style active my-1px">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="steelblue" autocomplete="off" checked />
                                        </label>

                                        <label class="btn btn-xs border-0 navbar-blue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="blue" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-teal d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="teal" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-mediumseagreen d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="mediumseagreen" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-cadetblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="cadetblue" autocomplete="off" />
                                        </label>



                                        <label class="btn btn-xs navbar-color border-0 navbar-plum d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="plum" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-purple d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="purple" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-orange d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="orange" autocomplete="off" />
                                        </label>


                                        <label class="btn btn-xs navbar-color border-0 navbar-burlywood d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="burlywood" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-darkseagreen d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="darkseagreen" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs border-0 navbar-skyblue d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="skyblue" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-secondary d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="secondary" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-xs navbar-color border-0 navbar-slategrey d-style">
                                            <i class="fa fa-check text-white v-active"></i>
                                            <input type="radio" name="navbar-dark" value="slategrey" autocomplete="off" />
                                        </label>

                                    </div>
                                </div><!-- #id-navbar-themes-dark -->

                                <div class="d-none" id="id-navbar-themes-light">
                                    <div class="bgc-secondary-tp2 radius-1 py-1 px-1 mb-3 mt-1 text-center">
                                        <div class="d-flex btn-group btn-group-toggle align-self-end flex-wrap justify-content-center mx-auto align-items-center my-2 flex-equal-sm" data-toggle="buttons">

                                            <label class="active btn btn-xs border-0 navbar-lightblue d-style my-1px">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightblue" autocomplete="off" checked />
                                            </label>

                                            <label class=" btn btn-xs border-0 navbar-white d-style my-1px">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="white" autocomplete="off" />
                                            </label>

                                            <label class=" btn btn-xs border-0 navbar-white2 d-style my-1px">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="white2" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-lightpurple d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightpurple" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-lightgreen d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightgreen" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-lightgrey d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightgrey" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-lightyellow d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="lightyellow" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-xs border-0 navbar-khaki d-style">
                                                <i class="fa fa-check text-muted v-active"></i>
                                                <input type="radio" name="navbar-light" value="khaki" autocomplete="off" />
                                            </label>
                                        </div>
                                    </div>
                                </div><!-- #id-navbar-themes-light -->
                            </div>

                            <hr class="border-dotted" />

                            <div class="text-95">
                                <h5 class="text-success-m1">Layout</h5>

                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <label for="id-navbar-fixed" class="pl-1 text-grey-d1">Fixed Navbar</label>
                                    <input type="checkbox" class="ace-switch" id="id-navbar-fixed" checked autocomplete="off" />
                                </div>

                                <div class="mt-2 d-flex justify-content-between align-items-center">
                                    <label for="id-sidebar-fixed" class="pl-1 text-grey-d1">Fixed Sidebar</label>
                                    <input type="checkbox" class="ace-switch" id="id-sidebar-fixed" checked autocomplete="off" />
                                </div>

                                <div class="mt-2 d-flex justify-content-between align-items-center">
                                    <label for="id-footer-fixed" class="pl-1 text-grey-d1">Fixed Footer</label>
                                    <input type="checkbox" class="ace-switch" id="id-footer-fixed" autocomplete="off" />
                                </div>

                                <div class="mt-2 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                    <div class="pl-1 text-grey-d1">Boxed Layout</div>

                                    <div class="w-50 btn-group btn-group-toggle flex-row flex-wrap fl1ex-md-nowrap" data-toggle="buttons">
                                        <label class="btn btn-sm btn-outline-info rounded-0 mx-0">
                                            None
                                            <input type="radio" name="boxed-layout" value="none" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-sm btn-outline-info mx-0">
                                            All
                                            <input type="radio" name="boxed-layout" value="all" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-sm btn-outline-info mx-0">
                                            Not Navbar
                                            <input type="radio" name="boxed-layout" value="not-navbar" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-sm btn-outline-info rounded-0 mx-0 mt-n1px active">
                                            Only Content
                                            <input type="radio" name="boxed-layout" value="only-content" autocomplete="off" checked />
                                        </label>
                                    </div>
                                </div>

                                <div id="id-body-bg" class="collapse">
                                    <div class="mt-3 d-none d-xl-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                        <h6 class="text-95 pl-1 text-grey-d1">Body Background:</h6>

                                        <div class="btn-group btn-group-toggle align-self-end" data-toggle="buttons">
                                            <label class="btn btn-sm btn-outline-purple active  mb-1">
                                                Auto
                                                <input type="radio" name="body-theme" value="auto" autocomplete="off" checked />
                                            </label>

                                            <label class="btn btn-sm btn-outline-purple mb-1">
                                                Image 1
                                                <input type="radio" name="body-theme" value="img1" autocomplete="off" />
                                            </label>

                                            <label class="btn btn-sm btn-outline-purple mb-1">
                                                Image 2
                                                <input type="radio" name="body-theme" value="img2" autocomplete="off" />
                                            </label>
                                        </div>
                                    </div>
                                </div>



                                <hr class="border-dotted my-2" />

                                <div class="mt-1 d-flex justify-content-between align-items-center">
                                    <label for="id-rtl" class="pl-1 text-grey-d1">RTL (right to left)</label>

                                    <input type="checkbox" class="ace-switch" id="id-rtl" autocomplete="off" />
                                </div>


                            </div>

                            <hr class="border-double my-md-4" />

                            <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                                <h5 class="text-info">Font</h5>

                                <div class="align-self-end w-75">
                                    <select autocomplete="off" id="id-change-font" class="ace-select radius-round w-100 text-grey brc-h-info-m2">
                                        <option value="lato">Lato</option>
                                        <option value="montserrat">Montserrat</option>
                                        <option value="noto-sans">Noto Sans</option>
                                        <option value="open-sans" selected>Open Sans</option>
                                        <option value="poppins">Poppins</option>
                                        <option value="raleway">Raleway</option>
                                        <option value="roboto" class="text-primary-d2 text-600">Roboto (popular)</option>
                                        <option value="">----</option>
                                        <option value="markazi">Markazi (for RTL languages)</option>
                                    </select>
                                </div>
                            </div>


                            <hr class="border-double my-md-4" />

                            <div class="text-95">
                                <h5 class="text-warning-d1 ml-n2px">Sidebar</h5>

                                <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                                    <label for="id-sidebar-compact" class="pl-1 text-grey-d2">Compact</label>

                                    <div class="custom-control custom-switch d-inline-block">
                                        <input type="checkbox" class="custom-control-input" id="id-sidebar-compact" autocomplete="off" />
                                        <label class="custom-control-label" for="id-sidebar-compact"></label>
                                    </div>
                                </div>

                                <div class="mt-2 d-none d-xl-flex justify-content-between align-items-center">
                                    <label for="id-sidebar-hover" class="pl-1 text-grey-d2">Submenu on Hover</label>

                                    <div class="custom-control custom-switch d-inline-block">
                                        <input type="checkbox" class="custom-control-input" id="id-sidebar-hover" autocomplete="off" />
                                        <label class="custom-control-label" for="id-sidebar-hover"></label>
                                    </div>
                                </div>


                                <div class="mt-2 d-none d-xl-flex justify-content-between align-items-center">
                                    <div class="pl-1 text-grey-d1">Collapsed Mode</div>

                                    <div class="btn-group btn-group-toggle flex-row" data-toggle="buttons">
                                        <label class="btn btn-sm btn-outline-red active mx-0">
                                            Expand
                                            <input type="radio" name="sidebar-collapsed" value="expandable" autocomplete="off" checked />
                                        </label>

                                        <label class="btn btn-sm btn-outline-red mx-0">
                                            Popup
                                            <input type="radio" name="sidebar-collapsed" value="hoverable" autocomplete="off" />
                                        </label>

                                        <label class="btn btn-sm btn-outline-red mx-0">
                                            Hide
                                            <input type="radio" name="sidebar-collapsed" value="hideable" autocomplete="off" />
                                        </label>
                                    </div>
                                </div>

                                <div class="mt-3 d-none d-xl-flex justify-content-between align-items-center">
                                    <label for="id-sidebar-hover" class="pl-1 text-grey-d1">Submenu on Hover</label>

                                    <label>
                                        <input type="checkbox" class="ace-switch" id="id-sidebar-hover" autocomplete="off" />
                                    </label>
                                </div>

                                <div class="mt-2 d-flex d-xl-none justify-content-between align-items-center">
                                    <label for="id-push-content" class="pl-1 text-grey-d1">Push Content</label>

                                    <label>
                                        <input type="checkbox" class="ace-switch" id="id-push-content" autocomplete="off" />
                                    </label>
                                </div>

                            </div>

                            <div class="my-1"></div>

                        </div>

                        <div class="modal-footer d-none justify-content-center">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times mr-1"></i>
                                Close
                            </button>
                            <button type="button" class="btn btn-info">
                                <i class="fa fa-check mr-1"></i>
                                Keep changes
                            </button>
                        </div>

                    </div><!-- .modal-content -->

                    <div class="aside-header align-self-start mt-1 mt-md-5 text-right">
                        <button type="button" class="btn btn-warning btn-lg shadow-sm pl-2 radius-l-2" data-toggle="modal" data-target="#id-ace-settings-modal">
                            <i class="fa fa-cog text-110 ml-1"></i>
                        </button>
                    </div>
                </div><!-- .modal-dialog -->
            </div><!-- .modal-aside -->
        </div><!-- /.main-container -->


        <!-- include common vendor scripts used in demo pages -->
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/popper.js/dist/umd/popper.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/bootstrap/dist/js/bootstrap.js"></script>


        <!-- include vendor scripts used in "Dashboard 2" page. see "application/views/default/pages/partials/dashboard-2/@vendor-scripts.hbs" -->
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/chart.js/dist/Chart.js"></script>


        <!-- include Ace script -->
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/dist/js/ace.js"></script>


        <script type="text/javascript" src="<?= base_url(); ?>/belakang/assets/js/demo.js"></script>
        <!-- this is only for Ace's demo and you don't need it -->

        <!-- "Dashboard 2" page script to enable its demo functionality -->
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/application/views/default/pages/partials/dashboard-2/@page-script.js"></script>

        <!-- include vendor scripts used in "DataTables" page. see "application/views/default/pages/partials/table-datatables/@vendor-scripts.hbs" -->
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/datatables/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/datatables.net-colreorder/js/dataTables.colReorder.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/datatables.net-select/js/dataTables.select.js"></script>


        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/datatables.net-buttons/js/dataTables.buttons.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/datatables.net-buttons/js/buttons.html5.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/datatables.net-buttons/js/buttons.print.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/datatables.net-buttons/js/buttons.colVis.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- "DataTables" page script to enable its demo functionality -->
        <!-- <script type="text/javascript" src="<?= base_url(); ?>/belakang/application/views/default/pages/partials/table-datatables/@page-script2.js"></script> -->
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/application/views/default/pages/partials/table-datatables/@page-script.js"></script>
        <!-- Form Element -->
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/application/views/default/pages/partials/form-elements/@page-script.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/autosize/dist/autosize.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>/belakang/node_modules/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    </div><!-- /.body-container -->
</body>

</html>