@extends('layouts.backend.master')
@section('content')
    
        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">جدول داده</h4>
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
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                

                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>آیدی</th>
                                            <th>نام و نام خانوادگی</th>
                                            <th>ایمیل</th>
                                            <th>موبایل</th>
                                            <th>نقش کاربری</th>
                                            <th>سن</th>
                                            <th>تاریخ عضویت</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td style="width: 50px;">1</td>
                                            <td>حسین نظری</td>
                                            <td>hnzry343@gmail.com</td>
                                            <td>0990123343</td>
                                            <td>کاربر عادی</td>
                                            <td style="width: 50px;">24</td>
                                            <td style="width: 80px;">2011/04/25</td>
                                            <td style="width: 180px;">
                                                <a href=""><button  type="button" class="btn btn-outline-danger waves-effect waves-light">حذف</button></a>
                                                <a href=""><button  type="button" class="btn btn-outline-success waves-effect waves-light">ویراش اطلاعات</button></a>                                     
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>صیدار مایکل</td>
                                            <td>حسابدار</td>
                                            <td>توکیو</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>جعفر خان</td>
                                            <td>مهندس</td>
                                            <td>ارومیه</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مجتبی خان</td>
                                            <td>توسعه دهنده وردپرس</td>
                                            <td>ادینبورگ</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>122,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>فرشید ولی پور</td>
                                            <td>حسابدار</td>
                                            <td>توکیو</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>122,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مجتبی</td>
                                            <td>طراح وب</td>
                                            <td>نیویورک</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>امیر علی</td>
                                            <td>مدیر فروش</td>
                                            <td>ارومیه</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>علی شروعی</td>
                                            <td>طراح وب</td>
                                            <td>توکیو</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>علی دایی</td>
                                            <td>توسعه دهنده جاوا</td>
                                            <td>ارومیه</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>سونیا</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>ادینبورگ</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>صبا صیدر</td>
                                            <td>مدیر دفتر</td>
                                            <td>لندن</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>معصومه عباسی</td>
                                            <td>مدیر واحد</td>
                                            <td>ادینبورگ</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>جعفر عباسی</td>
                                            <td>توسعه وب</td>
                                            <td>ارومیه</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>هندی یار</td>
                                            <td>مدیر بازار یاب</td>
                                            <td>لندن</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>رضا علی پور</td>
                                            <td>توسعه وب</td>
                                            <td>لندن</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>لندن</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>طراح وب)</td>
                                            <td>نیویورک</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>جعفر عباسی</td>
                                            <td>طراح وب</td>
                                            <td>نیویورک</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>جعفر عباسی</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>لندن</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>رسول</td>
                                            <td>طراح وب</td>
                                            <td>ادینبورگ</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>روسول منفرد</td>
                                            <td>طراح وب</td>
                                            <td>نیویورک</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>حسین</td>
                                            <td>طراح وب</td>
                                            <td>نیویورک</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>محمد رضا</td>
                                            <td>طراح وب</td>
                                            <td>نیویورک</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>علی یاری</td>
                                            <td>مدیر فروش</td>
                                            <td>سیدنی</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>جعفر</td>
                                            <td>طراح وب</td>
                                            <td>لندن</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مجتبی</td>
                                            <td>طراح وب</td>
                                            <td>ادینبورگ</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>فرشید</td>
                                            <td>توسعه وب</td>
                                            <td>ایران</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>ارومیه</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>ارومیه</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مسئول وب</td>
                                            <td>توکیو</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>سیدنی</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>لندن</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>لندن</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>ارومیه</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>ادینبورگ</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>ارومیه</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مدیر دفتر</td>
                                            <td>ارومیه</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>شاهین دژ</td>
                                            <td>ارومیه</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مدیر مالی</td>
                                            <td>ارومیه</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مدیر دفتر</td>
                                            <td>لندن</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مسئول سایت</td>
                                            <td>نیویورک</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مدیر مالی</td>
                                            <td>ایران</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>لندن</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مدیر مالی</td>
                                            <td>توکیو</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>نیویورک</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مدیر مالی</td>
                                            <td>ارومیه</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مدیر مالی</td>
                                            <td>ایران</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>نیویورک</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مهندس نرم افزار</td>
                                            <td>ارومیه</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>توسعه دهنده جاوا</td>
                                            <td>ادینبورگ</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>مدیر فروش</td>
                                            <td>نیویورک</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>توسعه وب</td>
                                            <td>لندن</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>لندن</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>طراح وب</td>
                                            <td>ارومیه</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>توسعه وب</td>
                                            <td>ادینبورگ</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>توسعه دهنده جاوا</td>
                                            <td>ایران</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td>مایکل صیدرا</td>
                                            <td>پشتیبان مشتری</td>
                                            <td>نیویورک</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>86,000 تومان</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div><!-- container fluid -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->

    <footer class="footer">
        © 1398 زینزر <span class="d-none d-md-inline-block"> - طراحی با <i
                class="mdi mdi-heart text-danger"></i> فارسی سازی توسط جعفر عباسی.</span>
    </footer>

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

<!-- Required datatable js -->
<script src="/admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin-assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="/admin-assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="/admin-assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="/admin-assets/plugins/datatables/jszip.min.js"></script>
<script src="/admin-assets/plugins/datatables/pdfmake.min.js"></script>
<script src="/admin-assets/plugins/datatables/vfs_fonts.js"></script>
<script src="/admin-assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="/admin-assets/plugins/datatables/buttons.print.min.js"></script>
<script src="/admin-assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="/admin-assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="/admin-assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="/admin-assets/assets/pages/datatables.init.js"></script>

<!-- App js -->
<script src="/admin-assets/assets/js/app.js"></script>

</body>


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Apr 2022 09:04:38 GMT -->


</html>
@endsection