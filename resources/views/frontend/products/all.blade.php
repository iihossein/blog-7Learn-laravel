@extends('layouts.frontend.master')


@section('content')
{{-- product --}}
<div>
    <a href="#"
    class="bg-danger text-dark d-flex back-to-top rounded-circle justify-content-center align-items-center position-fixed opacity-85"
    style="right:10px; bottom:10px; width: 54px; height: 54px;z-index: 10000;">
    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor"
      class="bi bi-arrow-up-circle text-white" viewBox="0 0 16 16">
      <path fill-rule="evenodd"
        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
    </svg>
    </a>
    <div class="py-4">
    <header class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2 class="display-4 mb-4">با فروشگاه <i class="bi bi-check2 text-blue"></i> <i><b><span
                  class="text-orange">ابزار</span><span class="text-blue">چـه</span></i></b> سریع ابزارتو بخر!</h2>
          <p class="lead text-muted mb-4">فروشگاهی متفاوت از تمام آن ها که دیده اید مکانی برای رسیدن به خواسته هایتان
            سریع ، ارزان، امن، با ضمانت</p>
          <div class="text-center text-md-start">
            <a href="#shop" class="btn bg-p">بزن بریم فروشگاه</a>
          </div>
        </div>
        <div class="col-md-6">
          <img src="/img/Maintenance-cuate2.png" class="img-fluid">
        </div>
      </div>
    </header>
    </div>
    
    <div id="shop"></div>
    <!-- ads -->
    <main class="container-fluid mb-5">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/ads/4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/ads/3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/ads/2.gif" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </main>
    <main class="container">
    <div class="row gb-2 ">
      <div class="col-md-12 mb-5 rounded-4 shadow  p-4  bg-light ">
        <h4 class="display-6">محصولات ویژه با <span class="text-danger">تخفیف</span></h4>
        <hr class="my-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
          <div class="col">
            <div class="card h-100 border shadow-sm rounded-3 bg-w shadow-hover">
              <img src="/img/card-images/1.webp" class="card-img-top p-2  rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">آچار فرانسه مدل V2</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-box-arrow-in-down text-sky-blue"></i> موجود در
                  انبار</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">۳۳۶,۷۰۰ تومان <span
                    class="badge bg-primary fs-7">۹%</span></p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">۳۷۱,۰۰۰ تومان</p>
                <a href="detail.html"><button type="button"
                    class="btn btn-primary  text-light text-light w-100">خرید</button></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border shadow-sm rounded-3 bg-opacity-10 bg-w shadow-hover">
              <img src="/img/card-images/2.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">آچار فرانسه مدل V5</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-box-arrow-in-down text-sky-blue"></i> موجود در
                  انبار</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">۸۰,۰۰۰ تومان</p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">۸۰,۰۰۰ تومان</p>
                <a href="detail.html"><button type="button"
                    class="btn btn-primary  text-light text-light w-100">خرید</button></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border shadow-sm rounded-3 bg-opacity-10 bg-w shadow-hover">
              <img src="/img/card-images/3.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">آچار مدل X2</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-exclamation-circle text-danger"></i> تنها ۴
                  عدد باقی مانده</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">۴۵۵,۰۰۰ تومان</p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">۵۰۰,۰۰۰ تومان</p>
                <a href="detail.html"><button type="button"
                    class="btn btn-primary  text-light text-light w-100">خرید</button></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border shadow-sm rounded-3 bg-opacity-10 bg-w shadow-hover">
              <img src="/img/card-images/4.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">آچار مدل Z1</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-x-circle"></i> اتمام موجودی</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">نامشخص</p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">بدون تخفیف</p>
                <button type="button" class="btn btn-secondary w-100" disabled>ناموجود</button>
              </div>
            </div>
          </div>
    
        </div>
      </div>
    </div>
    </main>
    <div class="py-4 mb-5">
    <main class="container">
      <div class="row g-3">
        <div class="col-6 col-md-3 category-hover">
          <a href="#"><img src="/img/category/1.webp" alt="" class="img-fluid rounded-4 shadow p-2"></a>
        </div>
        <div class="col-6 col-md-3 category-hover">
          <a href="#"><img src="/img/category/2.webp" alt="" class="img-fluid rounded-4 shadow  p-2"></a>
        </div>
        <div class="col-6 col-md-3 category-hover">
          <a href="#"><img src="/img/category/3.webp" alt="" class="img-fluid rounded-4 shadow  p-2"></a>
        </div>
        <div class="col-6 col-md-3 category-hover">
          <a href="#"><img src="/img/category/4.webp" alt="" class="img-fluid rounded-4 shadow  p-2"></a>
        </div>
      </div>
    </main>
    </div>
    <main class="container">
    <div class="row gb-2 mb-5">
      <div class="col-md-12 mb-5 rounded-4 p-4 shadow bg-p opacity-90">
        <h4 class="display-6">آخرین <span class="text-primary">محصولات</span></h4>
        <hr class="my-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
          <div class="col mb-3">
            <div class="card h-100 border rounded-3 bg-opacity-10 bg-w shadow-hover">
              <img src="/img/card-images/1.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">آچار فرانسه مدل V2</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-box-arrow-in-down text-sky-blue"></i> موجود در
                  انبار</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">۳۳۶,۷۰۰ تومان <span class="badge bg-danger fs-7">۹%</span>
                </p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">۳۷۱,۰۰۰ تومان</p>
                <a href="detail.html"><button type="button"
                    class="btn btn-primary  text-light text-light w-100">خرید</button></a>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card h-100 border rounded-3 bg-opacity-10 bg-w shadow-hover">
              <img src="/img/card-images/2.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">آچار فرانسه مدل V5</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-box-arrow-in-down text-sky-blue"></i> موجود در
                  انبار</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">۸۰,۰۰۰ تومان</p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">۸۰,۰۰۰ تومان</p>
                <a href="detail.html"><button type="button"
                    class="btn btn-primary  text-light text-light w-100">خرید</button></a>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card h-100 border shadow-sm rounded-3 bg-opacity-10 bg-w shadow-hover">
              <img src="/img/card-images/3.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">آچار مدل X2</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-exclamation-circle text-danger"></i> تنها ۴
                  عدد باقی مانده</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">۴۵۵,۰۰۰ تومان</p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">۵۰۰,۰۰۰ تومان</p>
                <a href="detail.html"><button type="button"
                    class="btn btn-primary  text-light text-light w-100">خرید</button></a>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card h-100 border rounded-3 bg-opacity-10 bg-w shadow-hover">
              <img src="/img/card-images/4.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">آچار مدل Z1</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-x-circle"></i> اتمام موجودی</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">نامشخص</p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">بدون تخفیف</p>
                <button type="button" class="btn btn-secondary w-100" disabled>ناموجود</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border shadow rounded-3">
              <img src="/img/card-images/5.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">دم باریک</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-box-arrow-in-down text-sky-blue"></i> موجود در
                  انبار</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">۴۲,۵۰۰ تومان <span class="badge bg-danger fs-7">۱۵%</span>
                </p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">۵۰,۰۰۰ تومان </span></p>
                <a href="detail.html"><button type="button" class="btn btn-danger w-100">خرید</button></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border shadow rounded-3">
              <img src="/img/card-images/6.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">سیم چین مدل y80</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-box-arrow-in-down text-sky-blue"></i> موجود در
                  انبار</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">۴۵,۵۰۰ تومان <span class="badge bg-danger fs-7">۹%</span>
                </p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">۵۰,۰۰۰ تومان </span></p>
                <a href="detail.html"><button type="button" class="btn btn-danger w-100">خرید</button></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border shadow rounded-3">
              <img src="/img/card-images/7.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">سیم چین</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-x-circle"></i> اتمام موجودی</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">نامشخص</p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">بدون تخفیف</p>
                <button type="button" class="btn btn-secondary w-100" disabled>ناموجود</button>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100 border shadow rounded-3">
              <img src="/img/card-images/10.webp" class="card-img-top p-2 rounded-4" alt="...">
              <div class="card-body">
                <h4 class="card-title mb-4">دستگاه جوش</h4>
                <p class="card-text ps-3 text-muted fs-6"><i class="bi bi-box-arrow-in-down text-sky-blue"></i> موجود در
                  انبار</p>
                <p class="card-text ps-3 text-dark fs-5 mb-0">۴۷۵,۰۰۰ تومان <span class="badge bg-danger fs-7">۵%</span>
                </p>
                <p class="card-text ps-3 text-dark fs-6 text-decoration-line-through mb-4">۵۰۰,۰۰۰ تومان </span></p>
                <a href="detail.html"><button type="button" class="btn btn-danger w-100">خرید</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
</div>

@endsection

