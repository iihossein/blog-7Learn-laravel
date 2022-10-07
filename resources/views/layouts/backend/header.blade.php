<!DOCTYPE html>
<html lang="fa">
<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Apr 2022 09:00:00 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <title>ادمین پنل ونوس گالری</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="/admin-assets/assets/images/favicon.ico" />

    <!-- DataTables -->
    <link href="/admin-assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin-assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/admin-assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    <!-- morris css -->
    <link rel="stylesheet" href="/admin-assets/plugins/morris/morris.css" />

    <!-- Summernote css -->
    <link href="/admin-assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" />

    <link href="/admin-assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin-assets/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/admin-assets/assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="fixed-left">
    
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="mdi mdi-close"></i>
            </button>

            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center">
                    <a href="index.html" class="logo"><img src="/admin-assets/assets/images/logo_dark.png" height="20"
                            alt="logo" /></a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">اصلی</li>

                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="dripicons-home"></i>
                                <span>
                                    داشبورد
                                    <span class="badge badge-success badge-pill float-right">3</span></span>
                            </a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i>
                                <span>مدیریت محصولات</span>
                                <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="add-product.html">افزودن محصول جدید</a></li>
                                <li><a href="Payments-list.html">لیست محصولات</a></li>
                                <li><a href="category-list.html">دسته بندی ها</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i>
                                <span>مدیریت کابران</span>
                                <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="add-user.html">افزودن</a></li>
                                <li><a href="users-list.html">لیست</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="suggestions-list.html" class="waves-effect"><i
                                    class="dripicons-calendar"></i><span>سفارشات</span></a>
                        </li>
                        <li>
                            <a href="Payments-list.html" class="waves-effect"><i class="dripicons-calendar"></i><span>پرداخت
                                    ها</span></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Top Bar Start -->
                <div class="topbar">
                    <div class="topbar-left d-none d-lg-block">
                        <div class="text-center">
                            <a href="index.html" class="logo"><img src="/admin-assets/assets/images/logo1.png" height="22"
                                    alt="logo" /></a>
                        </div>
                    </div>

                    <nav class="navbar-custom">
                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="جستجو" />
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                                    <i class="mdi mdi-magnify noti-icon"></i>
                                </a>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                    <span class="badge badge-danger badge-pill noti-icon-badge">3</span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>اعلانات (3)</h5>
                                    </div>

                                    <div class="slimscroll-noti">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </div>
                                            <p class="notify-details">
                                                <b>سفارش شما قرار داده شده است</b><span class="text-muted">لورم ایپسوم
                                                    متن ساختگی با تولید سادگی نامفهوم از
                                                    صنعت چاپ و با استفاده از طراحان گرافیک است.</span>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger">
                                                <i class="mdi mdi-message-text-outline"></i>
                                            </div>
                                            <p class="notify-details">
                                                <b>پیام جدید دریافت شد</b><span class="text-muted">شما 87 پیام خوانده
                                                    نشده دارید</span>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-filter-outline"></i>
                                            </div>
                                            <p class="notify-details">
                                                <b>مورد شما حمل می شود</b><span class="text-muted">این یک واقعیت طولانی
                                                    است که خواننده خواهد بود</span>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success">
                                                <i class="mdi mdi-message-text-outline"></i>
                                            </div>
                                            <p class="notify-details">
                                                <b>پیام جدید دریافت شد</b><span class="text-muted">شما 87 پیام خوانده
                                                    نشده دارید</span>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </div>
                                            <p class="notify-details">
                                                <b>سفارش شما قرار داده شده است</b><span class="text-muted">لورم ایپسوم
                                                    متن ساختگی با تولید سادگی نامفهوم از
                                                    صنعت چاپ و با استفاده از طراحان گرافیک است.</span>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-all">
                                        مشاهده همه
                                    </a>
                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list nav-user">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" />
                                    <span class="d-none d-md-inline-block ml-1">آقای جعفر عباسی <i
                                            class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i>
                                        پروفایل</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> کیف
                                        پول من</a>
                                    <a class="dropdown-item" href="#"><span
                                            class="badge badge-success float-right m-t-5">5</span><i
                                            class="dripicons-gear text-muted"></i> تنظیمات</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> قفل
                                        صفحه</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> خروج</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item dropdown notification-list d-none d-sm-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    ایجاد جدید ترین <i class="mdi mdi-plus"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated">
                                    <a class="dropdown-item" href="#">عملیات</a>
                                    <a class="dropdown-item" href="#">اقدام دیگری</a>
                                    <a class="dropdown-item" href="#">چیز های دیگر</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">پیوند جدا شده</a>
                                </div>
                            </li>
                            <li class="list-inline-item notification-list d-none d-sm-inline-block">
                                <a href="#" class="nav-link waves-effect">
                                    فعالیت
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Top Bar End -->