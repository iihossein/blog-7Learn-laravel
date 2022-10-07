@extends('layouts.backend.master')
@section('content')
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">داشبورد</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="ti-settings mr-1"></i> تنظیمات
                                    </button>
                                    <div
                                        class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">عملیات</a>
                                        <a class="dropdown-item" href="#">اقدام دیگر</a>
                                        <a class="dropdown-item" href="#">چیز های دیگر</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">پیوند جدا شده</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">
                                سفارشات جدید
                            </h6>
                            <h4 class="mb-0 mt-0 float-right">1,587</h4>
                        </div>
                    </div>
                    <a href="#" class="text-white-50">
                        <div class="p-3">
                            <div class="float-right">
                                <i class="mdi mdi-cube-outline h5"></i>
                            </div>
                            <p class="font-14 m-0">اطلاعات بیشتر</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-info mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">
                                دسته بندی ها
                            </h6>
                            <h4 class="mb-0 mt-0 float-right">46,785 تومان</h4>
                        </div>
                    </div>
                    <a href="#" class="text-white-50">
                        <div class="p-3">
                            <div class="float-right">
                                <i class="mdi mdi-buffer h5"></i>
                            </div>
                            <p class="font-14 m-0">اطلاعات بیشتر</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-pink mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">
                                محصول
                            </h6>
                            <h4 class="mb-0 mt-0 float-right">15.9</h4>
                        </div>
                    </div>
                    <a href="#" class="text-white-50">
                        <div class="p-3">
                            <div class="float-right">
                                <i class="mdi mdi-tag-text-outline h5"></i>
                            </div>
                            <p class="font-14 m-0">اطلاعات بیشتر</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-success mini-stat text-white">
                    <div class="p-3 mini-stat-desc">
                        <div class="clearfix">
                            <h6 class="text-uppercase mt-0 float-left text-white-50">
                                کاربر
                            </h6>
                            <h4 class="mb-0 mt-0 float-right">1890</h4>
                        </div>
                    </div>
                    <a href="#" class="text-white-50">
                        <div class="p-3">
                            <div class="float-right">
                                <i class="mdi mdi-briefcase-check h5"></i>
                            </div>
                            <p class="font-14 m-0">اطلاعات بیشتر</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">گزارش فروش ها</h4>
                        <div class="row">
                            <div class="col-lg-8">
                                <div id="morris-line-example" class="morris-chart"
                                    style="height: 300px"></div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <h5 class="font-14 mb-5">گزارش فروش</h5>

                                    <div>
                                        <h5 class="mb-3">2018 : 19523 تومان</h5>
                                        <p class="text-muted mb-4">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                            صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </p>
                                        <a href="#" class="btn btn-primary btn-sm">ادامه مطلب
                                            <i class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">آخرین پیام ها</h4>
                        <div class="latest-massage">
                            <a href="#" class="latest-message-list">
                                <div class="border-bottom position-relative">
                                    <div class="float-left user mr-3">
                                        <h5
                                            class="bg-primary text-center rounded-circle text-white mt-0">
                                            v
                                        </h5>
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">هم اکنون</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">جعفر عباسی</h5>
                                        <p class="text-muted">
                                            سلام، من اومدم به پنل مدیریت...
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5
                                            class="bg-success text-center rounded-circle text-white mt-0">
                                            p
                                        </h5>
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">2 دقیقه. پیش</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">مجتبی خان</h5>
                                        <p class="text-muted">
                                            دوستان، من پروژه ها رو حل کردم!
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <img src="assets/images/users/avatar-3.jpg" alt=""
                                            class="rounded-circle mb-3" />
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">6 دقیقه. پیش</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">رضا</h5>
                                        <p class="text-muted">
                                            یک قالب بسیار حرفه ای و زیبا!
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="latest-message-list">
                                <div class="border-bottom mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <h5 class="bg-pink text-center rounded-circle text-white mt-0">
                                            b
                                        </h5>
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">01:34 بعد ظهر</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">راست چین</h5>
                                        <p class="text-muted">
                                            یک قالب مدیریتی چند منظوره ریسپانسیو
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="latest-message-list">
                                <div class="mt-3 position-relative">
                                    <div class="float-left user mr-3">
                                        <img src="assets/images/users/avatar-4.jpg" alt=""
                                            class="rounded-circle mb-3" />
                                    </div>
                                    <div class="message-time">
                                        <p class="m-0 text-muted">02:05 بعد از ظهر</p>
                                    </div>
                                    <div class="massage-desc">
                                        <h5 class="font-14 mt-0 text-dark">فرشید خان</h5>
                                        <p class="text-muted">
                                            این یک دیدگاه تستی است...
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">آخرین معامله</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">آی دی.</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">تارخ</th>
                                        <th scope="col">قیمت</th>
                                        <th scope="col">تعداد</th>
                                        <th scope="col">وضعیت</th>
                                        <th scope="col">میزان</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">#14567</th>
                                        <td>جعفر عباسی</td>
                                        <td>14 خرداد</td>
                                        <td>74 تومان</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 89%" aria-valuenow="89"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14568</th>
                                        <td>طاهر نصیری</td>
                                        <td>15 خرداد</td>
                                        <td>74 تومان</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 64%" aria-valuenow="64"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14569</th>
                                        <td>طاهر نصیری</td>
                                        <td>16 خرداد</td>
                                        <td>74 تومان</td>
                                        <td>1</td>
                                        <td>
                                            <div class="progress" style="height: 5px">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 25%" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14570</th>
                                        <td>طاهر نصیری</td>
                                        <td>17 خرداد</td>
                                        <td>111 تومان</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 64%" aria-valuenow="64"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">#14571</th>
                                        <td>جعفر عباسی</td>
                                        <td>18 خرداد</td>
                                        <td>111 تومان</td>
                                        <td>2</td>
                                        <td>
                                            <div class="progress" style="height: 5px">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 25%" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>111 تومان</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container fluid -->
</div>
<!-- Page content Wrapper -->
</div>
<!-- content -->
</div>
<!-- End Right content here -->
</div>
<!-- END wrapper -->

<!-- jQuery  -->
<script src="/admin-assets/assets/js/jquery.min.js"></script>
<script src="/admin-assets/assets/js/bootstrap.bundle.min.js"></script>
<script src="/admin-assets/assets/js/modernizr.min.js"></script>
<script src="/admin-assets/assets/js/detect.js"></script>
<script src="/admin-assets/assets/js/fastclick.js"></script>
<script src="/admin-assets/assets/js/jquery.slimscroll.js"></script>
<script src="/admin-assets/assets/js/jquery.blockUI.js"></script>
<script src="/admin-assets/assets/js/waves.js"></script>
<script src="/admin-assets/assets/js/jquery.nicescroll.js"></script>
<script src="/admin-assets/assets/js/jquery.scrollTo.min.js"></script>

<!--Morris Chart-->
<script src="/admin-assets/plugins/morris/morris.min.js"></script>
<script src="/admin-assets/plugins/raphael/raphael.min.js"></script>

<!-- dashboard js -->
<script src="/admin-assets/assets/pages/dashboard.int.js"></script>

<!-- App js -->
<script src="/admin-assets/assets/js/app.js"></script>
</body>

<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Apr 2022 09:00:28 GMT -->

</html>
@endsection
