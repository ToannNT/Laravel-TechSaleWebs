{{-- @extends('layout.clientlayout') --}}
@extends('layout.clientlayout')
@section('content')
    <main class="container">
        <!-- </nav> -->
        <nav class="d-none d-lg-block border-top border-bottom mb-4">
            <div class="container border-primary-subtle">
                <div class="row">
                    <div class="col-md-10">
                        <div class="navbar navbar-expand-lg bg-white">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#!product/all">
                                        <i class="fa-solid fa-arrow-trend-up"></i>
                                        Phổ biến

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#!product/1">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                        Điện thoại</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-laptop"></i>
                                        Máy tính</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-hat-wizard"></i>
                                        Phụ kiện</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-headphones"></i>
                                        Tai nghe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-regular fa-clock"></i>
                                        Smart Watch</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-camera"></i>
                                        Web Cam</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-end">
                        <div class="navbar bg-white">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-phone-volume"></i>
                                        0313728397
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section class="row g-4">
            <div style="min-height: 390px" class="col-lg-6">
                <div class="card w-100 h-100 position-relative border-0">
                    <img class="rounded-3 w-100 h-100 object-fit-cover"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/banner-1.jpg"
                        alt="Error" />
                    <div class="col-6 infomation infomation_lg position-absolute">
                        <p class="text-danger fs-5 fw-medium">Mua chỉ với 6,000,000 ₫</p>
                        <h2 class="fw-bold mb-3">Samsung Galaxy Tab A8</h2>
                        <p class="mb-4">Samsung Galaxy Tab A8 64GB WiFi Grey là máy tính bảng tầm trung</p>
                        <a href="/shop/" class="btn btn-danger shadow btn-lg">Mua ngay <span class="ms-2"><i
                                    class="fa-solid fa-arrow-right" style="color: #ffffff"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div style="min-height: 390px" class="col-lg-6">
                <div class="card w-100 h-100 position-relative border-0">
                    <img class="rounded-3 w-100 h-100 object-fit-cover"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/banner-2.jpg"
                        alt="Error" />
                    <div class="col-6 infomation infomation_lg position-absolute">
                        <p style="background-color: rgb(255, 214, 18)" class="p-2 text-center rounded-1 fs-5 fw-medium">Mua
                            ngay
                            chỉ với 4,990,000 ₫</p>
                        <h2 class="fw-bold mb-3">Meta Quest 2 256GB</h2>
                        <p class="mb-4">Meta là cái tên mới thay thế Oculus</p>
                        <a href="#" class="btn btn-light shadow btn-lg">Mua ngay <span class="ms-2"><i
                                    class="fa-solid fa-arrow-right" style="color: #000000"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div style="min-height: 390px" class="col-lg-3">
                <div class="card w-100 h-100 position-relative border-0">
                    <img class="rounded-3 w-100 h-100 object-fit-cover"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/banner-3.jpg"
                        alt="Error" />
                    <div style="top: 45%; left: 50%; transform: translateX(-50%)"
                        class="text-center col-10 infomation position-absolute">
                        <!-- <p class="rounded-2 fw-bold">Hàng mới về</p> -->
                        <!-- <span class="fw-medium bg-secondary text-light p-1 fw-bold rounded-2">Hàng mới về</span> -->
                        <span class="text-danger fs-6 fw-medium">Hàng mới về</span>

                        <h2 class="fs-3 fw-semibold mb-3">Apple AirPods Max Space Orange</h2>
                        <a href="/shop/" class="btn btn-outline-danger btn-lg shadow">Mua ngay <span class="ms-2"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div style="min-height: 390px" class="col-lg-6">
                <div class="card w-100 h-100 position-relative border-0">
                    <img class="rounded-3 w-100 h-100 object-fit-cover"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/banner-5.jpg"
                        alt="Error" />
                    <div style="top: 50%; left: 5%; transform: translateY(-50%)" class="col-6 infomation position-absolute">
                        <p style="background-color: #1fc157"
                            class="fw-medium fs-5 w-auto text-center text-white p-2 rounded-2 mb-md-3">Ưu đãi hấp dẫn</p>
                        <h2 class="fw-semibold fs-1 mb4">Apple Smart Watch Pro</h2>
                        <p class="mb-sm-4">Samsung Galaxy Tab A8 64GB WiFi Grey là máy tính bảng tầm trung</p>
                        <a href="/shop/" class="btn btn-dark btn-lg shadow">Mua ngay <span class="ms-2"><i
                                    class="fa-solid fa-arrow-right" style="color: #ffffff"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div style="min-height: 390px" class="col-lg-3">
                <div class="card w-100 h-100 position-relative border-0">
                    <img class="rounded-3 w-100 h-100 object-fit-cover"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/banner-4.jpg"
                        alt="Error" />
                    <div style="top: 58%; left: 50%; transform: translateX(-50%)"
                        class="text-center col-10 infomation position-absolute">
                        <!-- <p class="rounded-2 fw-bold">Hàng mới về</p> -->
                        <!-- <span class="fw-medium bg-secondary text-light p-1 fw-bold rounded-2">Hàng mới về</span> -->
                        <span class="text-danger fs-6 fw-medium">Hàng mới về</span>

                        <h2 class="fs-3 fw-semibold mb-3">Máy ảnh lấy liền Fujifilm</h2>
                        <a href="/shop/" class="btn btn-outline-warning shadow btn-lg">Mua ngay <span
                                class="ms-2"></span> </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="row my-5 polular_categories">
            <div class="col-lg-5 polular_categories__left d-flex align-items-center">
                <div class="polular_categories__left--tittle mb-5">
                    <span class="fs-5 text-uppercase text-danger fw-semibold d-block mb-1">DANH MỤC HÀNG ĐẦU</span>
                    <h2 class="mb-4 fw-semibold fs-1">Danh mục phổ biến</h2>
                    <p class="mb-4 wow animate__fadeInLeft">Các danh mục có số lượng truy cập nhiều nhất.</p>
                    <a href="/shop/" class="btn btn-danger shadow btn-lg">Khám phá ngay <span class="ms-2"><i
                                class="fa-solid fa-arrow-right" style="color: #ffffff"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 polular_categories__right">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <a href="#" class="w-100 btn btn-outline-danger border-0 shadow">
                            <span class="rounded-5 bg-secondary-subtle p-3">
                                <i class="fa-solid fa-computer-mouse my-4" style="color: #d73333"></i>
                            </span>
                            <h6 class="mb-1 mt-4">Chuột điều khiển</h6>
                            <p class="">2 sản phẩm</p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="w-100 btn btn-outline-danger border-0 shadow">
                            <span class="rounded-5 bg-secondary-subtle p-3">
                                <i class="fa-solid fa-computer-mouse my-4" style="color: #d73333"></i>
                            </span>
                            <h6 class="mb-1 mt-4">Chuột điều khiển</h6>
                            <p class="">2 sản phẩm</p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="w-100 btn btn-outline-danger border-0 shadow">
                            <span class="rounded-5 bg-secondary-subtle p-3">
                                <i class="fa-solid fa-computer-mouse my-4" style="color: #d73333"></i>
                            </span>
                            <h6 class="mb-1 mt-4">Chuột điều khiển</h6>
                            <p class="">2 sản phẩm</p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="w-100 btn btn-outline-danger border-0 shadow">
                            <span class="rounded-5 bg-secondary-subtle p-3">
                                <i class="fa-solid fa-computer-mouse my-4" style="color: #d73333"></i>
                            </span>
                            <h6 class="mb-1 mt-4">Chuột điều khiển</h6>
                            <p class="">2 sản phẩm</p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="w-100 btn btn-outline-danger border-0 shadow">
                            <span class="rounded-5 bg-secondary-subtle p-3">
                                <i class="fa-solid fa-computer-mouse my-4" style="color: #d73333"></i>
                            </span>
                            <h6 class="mb-1 mt-4">Chuột điều khiển</h6>
                            <p class="">2 sản phẩm</p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="w-100 btn btn-outline-danger border-0 shadow">
                            <span class="rounded-5 bg-secondary-subtle p-3">
                                <i class="fa-solid fa-computer-mouse my-4" style="color: #d73333"></i>
                            </span>
                            <h6 class="mb-1 mt-4">Chuột điều khiển</h6>
                            <p class="">2 sản phẩm</p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="w-100 btn btn-outline-danger border-0 shadow">
                            <span class="rounded-5 bg-secondary-subtle p-3">
                                <i class="fa-solid fa-computer-mouse my-4" style="color: #d73333"></i>
                            </span>
                            <h6 class="mb-1 mt-4">Chuột điều khiển</h6>
                            <p class="">2 sản phẩm</p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="w-100 btn btn-outline-danger border-0 shadow">
                            <span class="rounded-5 bg-secondary-subtle p-3">
                                <i class="fa-solid fa-computer-mouse my-4" style="color: #d73333"></i>
                            </span>
                            <h6 class="mb-1 mt-4">Chuột điều khiển</h6>
                            <p class="">2 sản phẩm</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="row g-3 banner_promosion">
            <div class="col-sm-7 position-relative">
                <div style="top: 50%; left: 5%; transform: translateY(-50%)"
                    class="col-5 section_promosion__content position-absolute">
                    <p class="text-center fw-medium text-bg-danger mb-2 p-2 rounded">Khuyến mãi lên đến 60%</p>
                    <h2 class="fw-semibold text-white mb-4 fs-1">Sản phẩm công nghệ đa dạng</h2>
                    <p class="text-white fw-medium fs-4">26,000,000 ₫ <del class="fs-5 opacity-25">30,000,000 ₫</del></p>
                    <a href="/shop/" class="btn btn-warning shadow btn-lg">Mua ngay <span class="ms-2"><i
                                class="fa-solid fa-arrow-right" style="color: #000000"></i></span>
                    </a>
                </div>
                <img style="height: 500px" class="border-0 rounded-3 img-thumbnail object-fit-cover"
                    src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/banner-6.jpg"
                    alt="" />
            </div>
            <div class="col-sm-5 position-relative d-flex justify-content-center align-items-center">
                <div class="text-center section_promosion__content position-absolute">
                    <h2 class="text-center fw-medium text-dark mb-5">Tai nghe thịnh hành</h2>

                    <a href="/shop/" class="btn btn-danger shadow btn-lg">Mua ngay <span class="ms-2"><i
                                class="fa-solid fa-arrow-right" style="color: #ffffff"></i></span>
                    </a>
                </div>
                <img style="height: 500px" class="border-0 rounded-3 img-thumbnail object-fit-cover"
                    src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/banner-7.jpg"
                    alt="" />
            </div>
        </section>

        <section class="product-trending mt-3">
            <div class="row product-trending__tittle">
                <div class="col-12">
                    <p class="fs-5 text-danger">Khuyến mãi lớn</p>
                    <h3 class="mb-3 fs-3 fw-semibold">Sản phẩm nổi bật</h3>
                </div>
            </div>
            <div class="row g-4 product-trending__content">
                @foreach ($hotProduct as $product)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card card-product position-relative">

                            @if ($product->sold > 100)
                                <span style="top: -5%; left: -9%" class="position-absolute badge  p-2 ">
                                    {{-- New --}}
                                    <img style="width: 90px" class="img-fluid"
                                        src="{{ asset('clients/images/logo/hot-deal-2.png') }}" alt="">
                                </span>
                            @endif

                            @if ($product->created_at->diffInDays(now()) <= 30)
                                <span style="top: -4%; right: -5%" class="position-absolute badge rounded-1 p-2">
                                    <img style="width: 50px" class="img-fluid"
                                        src="{{ asset('clients/images/logo/hot-new-2.png') }}" alt="">
                                </span>
                            @endif

                            @if ($product->images->isNotEmpty())
                                <img src="{{ $product->images->first()->url }}" style="width: 100%; height: 20rem"
                                    class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." />
                            @endif

                            <div class="card-body">
                                <p class="card-product_type mb-1" style="font-size: 14px;">{{ $product->catalog->ten_dm }}
                                </p>
                                <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; max-height: 3.7rem; font-size: 18px;"
                                    href="{{ route('productdetail', ['id' => $product->id]) }}"
                                    class="card-product__tittle card-title text-decoration-none fw-medium">
                                    {{ $product->ten }}
                                </a>
                                <p class="card-product__star">
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                </p>
                                <p class="card-product__quantity">Có sẵn: <span
                                        style="letter-spacing: 5px; font-weight: 600; font-size: 1.1rem"
                                        class="text-danger">{{ $product->quantity }}/145</span>
                                </p>
                                <hr class="border border-danger border-2 opacity-100" />

                                @if ($product->giamgia > 0)
                                    <p class="mt-3">
                                        <span class="card-price fw-medium fs-5">
                                            {{ number_format($product->giamgia, 0, ',', ',') }}đ
                                        </span>
                                        &nbsp;
                                        <del class="opacity-50">
                                            {{ number_format($product->gia, 0, ',', ',') }}đ
                                        </del>
                                    </p>
                                @else
                                    <p class="mt-3">
                                        <span
                                            class="card-price fw-medium fs-5">{{ number_format($product->gia, 0, ',', ',') }}đ</span>
                                        &nbsp;
                                    </p>
                                @endif
                                {{-- <p class="mt-3">
                                    <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                    <del class="opacity-50"> 1,505,000₫ </del>
                                </p> --}}
                                <div class="card-product__btn">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <a href="#" class="col-12 btn btn-warning">Mua</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="col-12 btn btn-danger">Thêm</a>
                                        </div>
                                        <!-- <a href="#" class="col-6 btn btn-primary">Thêm</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card card-product position-relative">
                        <span style="top: 1%; left: 2%" class="position-absolute badge rounded-1 p-2 bg-dark"> Sale
                        </span>

                        <span style="top: 1%; right: 2%" class="position-absolute badge rounded-1 p-2 bg-danger"> Hot
                        </span>
                        <img src="{{ asset('clients/images/prod_2.png') }}" style="width: 100%; height: 20rem"
                            class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." />
                        <div class="card-body">
                            <p class="card-product_type mb-1" style="font-size: 14px;">Chuột máy tínd</p>
                            <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 3.7rem; font-size: 18px;"
                                href="./detailproduct.html"
                                class="card-product__tittle card-title text-decoration-none fw-medium">
                                Sony PlayStation VR2 Approx. 110°, Communication​ With PS5
                            </a>
                            <p class="card-product__star">
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                            </p>
                            <p class="card-product__quantity">Có sẵn: <span
                                    style="letter-spacing: 5px; font-weight: 600; font-size: 1.1rem"
                                    class="text-danger">0/145</span>
                            </p>
                            <hr class="border border-danger border-2 opacity-100" />
                            <p class="mt-3">
                                <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                <del class="opacity-50"> 1,505,000₫ </del>
                            </p>
                            <div class="card-product__btn">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <a href="#" class="col-12 btn btn-warning">Mua</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="col-12 btn btn-danger">Thêm</a>
                                    </div>
                                    <!-- <a href="#" class="col-6 btn btn-primary">Thêm</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

        </section>
        <section class="product-trending mt-5">
            <div class="row product-trending__tittle">
                <div class="col-12">
                    <p class="fs-5 text-danger">Nhiều ưu đãi tặng kèm</p>
                    <h3 class="mb-3 fs-3 fw-semibold">Sản phẩm mới ra mắt</h3>
                </div>
            </div>
            <div class="row g-4 product-trending__content">
                @foreach ($newProduct as $product)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card card-product position-relative">
                            {{-- <span style="top: 1%; left: 2%" class="position-absolute badge rounded-1 p-2 bg-dark"> Sale
                        </span> --}}
                            @if ($product->sold > 100)
                                <span style="top: -5%; left: -9%" class="position-absolute badge  p-2 ">
                                    {{-- New --}}
                                    <img style="width: 90px" class="img-fluid"
                                        src="{{ asset('clients/images/logo/hot-deal-2.png') }}" alt="">
                                </span>
                            @endif

                            @if ($product->created_at->diffInDays(now()) <= 30)
                                <span style="top: -4%; right: -5%" class="position-absolute badge rounded-1 p-2">
                                    <img style="width: 50px" class="img-fluid"
                                        src="{{ asset('clients/images/logo/hot-new-2.png') }}" alt="">
                                </span>
                            @endif

                            {{-- {{ asset('storage/' . $image->url) }} --}}
                            @if ($product->images->isNotEmpty())
                                <img src="{{ 'storage/' . $product->images->first()->url }}"
                                    style="width: 100%; height: 20rem"
                                    class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." />
                            @endif

                            <div class="card-body">
                                <p class="card-product_type mb-1" style="font-size: 14px;">
                                    {{ $product->catalog->ten_dm }}
                                </p>
                                <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; max-height: 3.7rem; font-size: 18px;"
                                    href="{{ route('productdetail', ['id' => $product->id]) }}"
                                    class="card-product__tittle card-title text-decoration-none fw-medium">
                                    {{ $product->ten }}
                                </a>
                                <p class="card-product__star">
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                    <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                </p>
                                <p class="card-product__quantity">Có sẵn: <span
                                        style="letter-spacing: 5px; font-weight: 600; font-size: 1.1rem"
                                        class="text-danger">{{ $product->quantity }}/145</span>
                                </p>
                                <hr class="border border-danger border-2 opacity-100" />

                                @if ($product->giamgia > 0)
                                    <p class="mt-3">
                                        <span class="card-price fw-medium fs-5">
                                            {{ number_format($product->giamgia, 0, ',', ',') }}đ
                                        </span>
                                        &nbsp;
                                        <del class="opacity-50">
                                            {{ number_format($product->gia, 0, ',', ',') }}đ
                                        </del>
                                    </p>
                                @else
                                    <p class="mt-3">
                                        <span
                                            class="card-price fw-medium fs-5">{{ number_format($product->gia, 0, ',', ',') }}đ</span>
                                        &nbsp;
                                    </p>
                                @endif

                                {{-- <p class="mt-3">
                                    <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                    <del class="opacity-50"> 1,505,000₫ </del>
                                </p> --}}
                                <div class="card-product__btn">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <a href="#" class="col-12 btn btn-warning">Mua</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="col-12 btn btn-danger">Thêm</a>
                                        </div>
                                        <!-- <a href="#" class="col-6 btn btn-primary">Thêm</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card card-product position-relative">
                        <span style="top: 1%; left: 2%" class="position-absolute badge rounded-1 p-2 bg-dark"> Sale
                        </span>

                        <span style="top: 1%; right: 2%" class="position-absolute badge rounded-1 p-2 bg-danger"> Hot
                        </span>
                        <img src="{{ asset('clients/images/prod_2.png') }}" style="width: 100%; height: 20rem"
                            class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." />
                        <div class="card-body">
                            <p class="card-product_type mb-1" style="font-size: 14px;">Chuột máy tínd</p>
                            <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 3.7rem; font-size: 18px;"
                                href="./detailproduct.html"
                                class="card-product__tittle card-title text-decoration-none fw-medium">
                                Sony PlayStation VR2 Approx. 110°, Communication​ With PS5
                            </a>
                            <p class="card-product__star">
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                                <i class="fa-solid fa-star" style="color: #bcbec2"></i>
                            </p>
                            <p class="card-product__quantity">Có sẵn: <span
                                    style="letter-spacing: 5px; font-weight: 600; font-size: 1.1rem"
                                    class="text-danger">0/145</span>
                            </p>
                            <hr class="border border-danger border-2 opacity-100" />
                            <p class="mt-3">
                                <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                <del class="opacity-50"> 1,505,000₫ </del>
                            </p>
                            <div class="card-product__btn">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <a href="#" class="col-12 btn btn-warning">Mua</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="col-12 btn btn-danger">Thêm</a>
                                    </div>
                                    <!-- <a href="#" class="col-6 btn btn-primary">Thêm</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-12 text-center mt-3">
                <a href="{{ route('product') }}" class="btn btn-danger shadow btn-lg">Xem tất cả <span class="ms-2"><i
                            class="fa-solid fa-arrow-right" style="color: #ffffff"></i></span>
                </a>
            </div>
        </section>
        <section class="row banner_promosion bg-light my-5">
            <div class="col-12 position-relative d-flex justify-content-center align-items-center">
                <div class="text-center section_promosion__content position-absolute">
                    <h2 class="fw-semibold text-black mb-4 fs-2">Super Friendly Electronics Store</h2>
                    <a href="/shop/" class="btn btn-dark shadow btn-lg">Mua ngay <span class="ms-2"><i
                                class="fa-solid fa-arrow-right" style="color: #ffffff"></i></span>
                    </a>
                </div>
                <img style="height: 15rem" class="w-100 rounded-3 img-thumbnail object-fit-cover border-0"
                    src="{{ asset('clients/images/banner/banner_side.png') }}" alt="" />
            </div>
        </section>

        <section class="row g-3 product-hot">
            <div class="col-sm-4 position-relative">
                <div style="top: 35%; left: 10%; transform: translateY(-50%)"
                    class="col-10 text-center product-hot__content position-absolute">
                    <p class="fw-medium text-warning mb-2 rounded fs-4">Hàng mới về</p>
                    <h2 class="fw-semibold text-white mb-4 fs-1">Apple AirPod Max Space Orange</h2>
                    <a href="/shop/" class="btn btn-warning shadow btn-lg">Khám phá ngay <span class="ms-2"><i
                                class="fa-solid fa-arrow-right" style="color: #000000"></i></span>
                    </a>
                </div>
                <img class="w-100 h-100 border-0 rounded-3 img-thumbnail object-fit-cover"
                    src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/banner-8.jpg"
                    alt="" />
            </div>
            <div class="col-lg-8 product-hot__right">
                <div class="row g-4">
                    <div class="col-lg-6 product-hot__right-trend">
                        <h2 class="mb-4 fw-medium">Sản phẩm nổi bật</h2>
                        <hr class="border border-secondary-subtle border-1 opacity-25" />
                        <a href="#" style="border: 1px solid rgb(234, 234, 234)"
                            class="text-decoration-none card mb-3">
                            <div class="row g-0">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('clients/images/prod_1.png') }}" class="w-75 img-fluid p-2"
                                        alt="..." />
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis"
                                            class="card-title">Sony
                                            PlayStation VR2 Approx. 110°, Communication​ with PS5</h5>
                                        <p class="card-text m-0">
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                        </p>
                                        <p>
                                            <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                            <del class="opacity-50 text-warning"> 1,505,000₫ </del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" style="border: 1px solid rgb(234, 234, 234)"
                            class="text-decoration-none card mb-3">
                            <div class="row g-0">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('clients/images/prod_1.png') }}" class="w-75 img-fluid p-2"
                                        alt="..." />
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis"
                                            class="card-title">Sony
                                            PlayStation VR2 Approx. 110°, Communication​ with PS5</h5>
                                        <p class="card-text m-0">
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                        </p>
                                        <p>
                                            <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                            <del class="opacity-50 text-warning"> 1,505,000₫ </del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" style="border: 1px solid rgb(234, 234, 234)"
                            class="text-decoration-none card mb-3">
                            <div class="row g-0">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('clients/images/prod_1.png') }}" class="w-75 img-fluid p-2"
                                        alt="..." />
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis"
                                            class="card-title">Sony
                                            PlayStation VR2 Approx. 110°, Communication​ with PS5</h5>
                                        <p class="card-text m-0">
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                        </p>
                                        <p>
                                            <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                            <del class="opacity-50 text-warning"> 1,505,000₫ </del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 product-hot__right-promotion">
                        <h2 class="mb-4 fw-medium">Khuyến mãi</h2>
                        <hr class="border border-secondary-subtle border-1 opacity-25" />
                        <a href="#" style="border: 1px solid rgb(234, 234, 234)"
                            class="text-decoration-none card mb-3">
                            <div class="row g-0">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('clients/images/prod_1.png') }}" class="w-75 img-fluid p-2"
                                        alt="..." />
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis"
                                            class="card-title">Sony
                                            PlayStation VR2 Approx. 110°, Communication​ with PS5</h5>
                                        <p class="card-text m-0">
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                        </p>
                                        <p>
                                            <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                            <del class="opacity-50 text-warning"> 1,505,000₫ </del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" style="border: 1px solid rgb(234, 234, 234)"
                            class="text-decoration-none card mb-3">
                            <div class="row g-0">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('clients/images/prod_1.png') }}" class="w-75 img-fluid p-2"
                                        alt="..." />
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis"
                                            class="card-title">Sony
                                            PlayStation VR2 Approx. 110°, Communication​ with PS5</h5>
                                        <p class="card-text m-0">
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                        </p>
                                        <p>
                                            <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                            <del class="opacity-50 text-warning"> 1,505,000₫ </del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" style="border: 1px solid rgb(234, 234, 234)"
                            class="text-decoration-none card mb-3">
                            <div class="row g-0">
                                <div class="col-4 d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('clients/images/prod_1.png') }}" class="w-75 img-fluid p-2"
                                        alt="..." />
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis"
                                            class="card-title">Sony
                                            PlayStation VR2 Approx. 110°, Communication​ with PS5</h5>
                                        <p class="card-text m-0">
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                            <i class="fa-solid fa-star" style="color: #bfbfc0"></i>
                                        </p>
                                        <p>
                                            <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                            <del class="opacity-50 text-warning"> 1,505,000₫ </del>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="product_sponsor">
            <div class="row g-4 mt-3 bg-gradient">
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-1-2.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-2-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-3-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-4-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-5-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-6-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-7-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-8-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-9-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-10-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-10-1.svg"
                        alt="Erro img" />
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <img class="w-100 border p-4"
                        src="https://electio.ecom.themepreview.xyz/home-two/wp-content/uploads/sites/5/2023/10/brand-10-1.svg"
                        alt="Erro img" />
                </div>
            </div>
        </section>
    </main>
    <section class="banner-sale position-relative mt-5">
        <div class="col-6 col-sm-4 banner-sale__content position-absolute"
            style="top: 50%; right: 0%; transform: translateY(-50%)">
            <span class="fs-5 text-uppercase text-danger fw-semibold d-block mb-1">KHÁM PHÁ MỚI MẺ</span>
            <h2 style="font-size: 3.3rem" class="mb-4 fw-semibold">Tai nghe</h2>
            <p class="mb-4 wow animate__fadeInLeft">Như cầu sử dụng của người dùng tai nghe tăng mạnh trong các năm gần
                đây
            </p>
            <a href="/shop/" class="btn btn-danger shadow btn-lg">Khám phá ngay <span class="ms-2"><i
                        class="fa-solid fa-arrow-right" style="color: #ffffff" aria-hidden="true"></i></span>
            </a>
        </div>
        <img style="height: 650px" class="w-100 object-fit-cover"
            src="{{ asset('clients/images/banner/banner_sale.png') }}" alt="" />
    </section>
    <section class="container-fluid banner-support bg-danger p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-sm-3 d-flex justify-content-start align-item-center">
                    <i class="fa-solid fa-truck-fast fs-3 text-warning me-3"></i>
                    <div class="banner-support__content">
                        <h4 class="title text-white">Miễn phí giao hàng</h4>
                        <p class="text-white">Từ Đơn Hàng Trên 1,000,000 ₫</p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 d-flex justify-content-start align-item-center">
                    <i class="fa-solid fa-headphones fs-3 text-warning me-3"></i>
                    <div class="banner-support__content">
                        <h4 class="title text-white">Hỗ Trợ 24/7</h4>
                        <p class="text-white">Nhận Hỗ Trợ Trực Truyến 24/7</p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 d-flex justify-content-start align-item-center">
                    <i class="fa-solid fa-money-check-dollar fs-3 text-warning me-3"></i>
                    <div class="banner-support__content">
                        <h4 class="title text-white">Hoàn Tiền</h4>
                        <p class="text-white">Hoàn Trả Trong Vòng 15 Ngày</p>
                    </div>
                </div>
                <div class="col-12 col-sm-3 d-flex justify-content-start align-item-center">
                    <i class="fa-solid fa-gift fs-3 text-warning me-3"></i>
                    <div class="banner-support__content">
                        <h4 class="title text-white">Mã Quà Tặng</h4>
                        <p class="text-white">Nhận Mã Khuyến Mãi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_news container mt-5">
        <div class="col-12 mb-4">
            <p class="fs-5 text-danger mb-0">ĐỌC TIN TỨC MỚI NHẤT</p>
            <h2 class="fs-2 fw-semibold">Tin Tức Mới Nhất</h2>
        </div>
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-4 position-relative">
                <img class="w-100 object-fit-cover rounded-3 rounded-bottom-0" style="height: 300px"
                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/05/dien-thoai-tot-cho-sinh-vien-xtmobile.jpg"
                    alt="" />
                <div class="row news__describe p-3 rounded-3 m-0 shadow" style="background-color: #f8f8f8">
                    <a href="#" class="text-dark text-decoration-none col-4 mb-3 opacity-75">
                        <i class="fa-solid fa-rug opacity-75"></i>
                        Điện tử
                    </a>
                    <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                        <i class="fa-regular fa-comment-dots opacity-75"></i>
                        Bình luận
                    </a>
                    <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                        <i class="fa-regular fa-clock opacity-75"></i>
                        Min read
                    </a>

                    <a href="#"
                        style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden"
                        class="text-decoration-none fs-5 fw-medium text-dark mb-3 title">Điện thoại Android tốt nhất cho
                        sinh viên năm 2024</a>
                    <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                        class="decription-pro mb-2">
                        Điện thoại Android tốt nhất cho sinh viên năm 2024
                    </p>
                    <a href="/shop/" class="btn col-6 fs-5 fw-medium opacity-50 text-start">Đọc ngay<span
                            class="ms-2"><i class="fa-solid fa-arrow-right" style="color: #9c9b9b"
                                aria-hidden="true"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 position-relative">
                <img class="w-100 object-fit-cover rounded-3 rounded-bottom-0" style="height: 300px"
                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/04/samsung-galaxy-z-fold-6-xtmobile.jpg"
                    alt="" />
                <div class="row news__describe p-3 rounded-3 m-0 shadow" style="background-color: #f8f8f8">
                    <a href="#" class="text-dark text-decoration-none col-4 mb-3 opacity-75">
                        <i class="fa-solid fa-rug opacity-75"></i>
                        Điện tử
                    </a>
                    <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                        <i class="fa-regular fa-comment-dots opacity-75"></i>
                        Bình luận
                    </a>
                    <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                        <i class="fa-regular fa-clock opacity-75"></i>
                        Min read
                    </a>

                    <a href="#"
                        style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden"
                        class="text-decoration-none fs-5 fw-medium text-dark mb-3 title">Điện thoại Android tốt nhất cho
                        sinh viên năm 2024</a>
                    <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                        class="decription-pro mb-2">
                        Điện thoại Android tốt nhất cho sinh viên năm 2024
                    </p>
                    <a href="/shop/" class="btn col-6 fs-5 fw-medium opacity-50 text-start">Đọc ngay<span
                            class="ms-2"><i class="fa-solid fa-arrow-right" style="color: #9c9b9b"
                                aria-hidden="true"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 position-relative">
                <img class="w-100 object-fit-cover rounded-3 rounded-bottom-0" style="height: 300px"
                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/04/iphone-16-pro-max-gia-bao-nhieu-xtmobile.jpg"
                    alt="" />
                <div class="row news__describe p-3 rounded-3 m-0 shadow" style="background-color: #f8f8f8">
                    <a href="#" class="text-dark text-decoration-none col-4 mb-3 opacity-75">
                        <i class="fa-solid fa-rug opacity-75"></i>
                        Điện tử
                    </a>
                    <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                        <i class="fa-regular fa-comment-dots opacity-75"></i>
                        Bình luận
                    </a>
                    <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                        <i class="fa-regular fa-clock opacity-75"></i>
                        Min read
                    </a>

                    <a href="#"
                        style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden"
                        class="text-decoration-none fs-5 fw-medium text-dark mb-3 title">Điện thoại Android tốt nhất cho
                        sinh viên năm 2024</a>
                    <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                        class="decription-pro mb-2">
                        Điện thoại Android tốt nhất cho sinh viên năm 2024
                    </p>
                    <a href="/shop/" class="btn col-6 fs-5 fw-medium opacity-50 text-start">Đọc ngay<span
                            class="ms-2"><i class="fa-solid fa-arrow-right" style="color: #9c9b9b"
                                aria-hidden="true"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-12 text-end">
                <a href="/shop/" class="btn btn-lg fw-medium text-bg-dark opacity-50">Xem tất cả<span class="ms-2"><i
                            class="fa-solid fa-arrow-right" style="color: #ffffff" aria-hidden="true"></i></span>
                </a>
            </div>
        </div>
    </section>

    <section class="news-notification bg-body-secondary mt-5">
        <div class="container">
            <div class="row" style="height: 440px">
                <div class="col-sm-7 news-notification__images d-flex align-items-center">
                    <img class="w-100 object-fit-cover"
                        src="https://e-tech.monamedia.net/wp-content/uploads/2023/10/drone-1-1.png" alt="" />
                </div>
                <div class="col-sm-5 news-notification__content d-sm-flex flex-column justify-content-center">
                    <h5 class="fs-1 mb-4 fw-semibold">Nhận Mọi Cập Nhật</h5>
                    <p class="mb-4 wow animate__fadeInLeft">Become a premium member and get 20% off your next purchase!
                    </p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-regular fa-envelope"></i>
                        </span>
                        <input type="text" class="p-3 form-control" placeholder="Nhập email..." aria-label="Username"
                            aria-describedby="basic-addon1" />
                    </div>
                    <a href="/shop/" class="btn btn-warning btn-lg shadow">Đăng ký ngay <span class="ms-2"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
