{{-- @extends('layout.clientlayout') --}}
@extends('layout.clientlayout')
@section('content')
    <main>

        <style>
            .page-link {
                color: black;
                /* Màu chữ mặc định */
            }

            .page-link.active {
                border: none;
                background-color: #dc3545;
                /* Màu nền đỏ khi active */
                color: white !important;
                /* Màu chữ trắng khi active */
            }
        </style>
        <!-- </nav> -->
        <nav class="d-none d-lg-block border-top border-bottom">
            <div class="container border-primary-subtle">
                <div class="row">
                    <div class="col-md-10">
                        <div class="navbar navbar-expand-lg bg-white">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-arrow-trend-up"></i>
                                        Phổ biến</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
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
                                    <a class="nav-link" href="#">
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
        <section class="banner_introduce bg-secondary-subtle p-3">
            <div class="container">Trang chủ / Sản phẩm</div>
        </section>

        <section class="container product-all mt-5">
            <div class="row product-all__filter">
                <!-- <div class="col-md-3 mb-3 mb-md-0">Đang hiển thị 1–12 trong tổng số 23 kết quả</div> -->
                <div class="col-md-6 mb-3 mb-md-0">
                    @if (request('search'))
                        Kết quả tìm kiếm với từ khóa:
                        <strong>{{ request('search') }}</strong>
                        {{-- <button class="ms-2 btn btn-warning btn-sm">Bỏ tìm kiếm</button> --}}
                        <a href="{{ route('product') }}" class="ms-2 btn btn-warning btn-sm">Bỏ tìm kiếm</a>
                    @endif
                </div>


                <div class="col-md-6 d-flex justify-content-end">
                    <form action="{{ route('product') }}" method="GET" class="row g-2">
                        <div class="col-6">
                            <select name="catalog" class="form-select" onchange="this.form.submit()">
                                <option value="">Tất cả danh mục</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ request('catalog') == $category->id ? 'selected' : '' }}>
                                        {{ $category->ten_dm }}
                                    </option>
                                @endforeach
                                {{-- <option value="1">Điện thoại</option>
                                <option value="2">iPad</option>
                                <option value="3">Smart watch</option>
                                <option value="4">Tai nghe</option>
                                <option value="5">Máy ảnh</option>
                                <option value="6">Kính thực tế ảo</option> --}}
                            </select>
                        </div>

                        {{-- </form> --}}

                        {{-- <form action="{{ route('product') }}" method="GET" class="col-6"> --}}
                        <div class="col-6">
                            <select name="sortBy" class="form-select" onchange="this.form.submit()">
                                <option value="">Lọc theo giá và tên</option>
                                <option value="price" {{ request('sortBy') == 'price' ? 'selected' : '' }}>
                                    Thứ tự theo giá:thấp đến cao
                                </option>
                                <option value="-price" {{ request('sortBy') == '-price' ? 'selected' : '' }}>
                                    Thứ tự theo giá:cao đến thấp
                                </option>
                                <option value="name" {{ request('sortBy') == 'name' ? 'selected' : '' }}>
                                    Thứ tự theo tên: A-Z
                                </option>
                                <option value="-name" {{ request('sortBy') == '-name' ? 'selected' : '' }}>
                                    Thứ tự theo tên: Z-A
                                </option>
                            </select>
                        </div>

                        <!-- Ẩn các trường tìm kiếm hiện tại trong form này -->
                        <input type="hidden" name="search" value="{{ request('search') }}">

                        {{-- <div class="col-2">
                            <button type="submit" class="btn btn-secondary">Lọc</button>
                        </div> --}}

                        {{-- Lọc sản phẩm
                        <div class="mt-3">
                            <input type="text" name="search" class="form-control" placeholder="Tìm kiếm sản phẩm"
                                value="{{ request('search') }}">
                        </div> --}}


                    </form>
                </div>
            </div>
            <!-- <input type="text" class="form-control border-3" ng-model="keyword" placeholder="Tìm kiếm" /> -->

            <div class="row g-4 mt-1 product-all__content">
                @foreach ($products as $item)
                    <div class="col-6 col-sm-4 col-lg-3">
                        <div class="card card-product position-relative">
                            {{-- <span style="top: 1%; left: 2%" class="position-absolute badge rounded-1 p-2 bg-dark"> -5%
                            </span> --}}


                            @if ($item->sold > 100)
                                <span style="top: 0%; left: 0%"
                                    class="position-absolute text-bg-danger badge rounded-1  p-2 ">
                                    Hot
                                </span>
                            @endif

                            @if ($item->giamgia > 0)
                                <span style="top: 0%; right: 0%"
                                    class="position-absolute badge text-bg-warning rounded-1 p-2">
                                    -50%
                                </span>
                            @endif


                            @if ($item->images->isNotEmpty())
                                <a href="{{ route('productdetail', $item->id) }}">
                                    <img src="{{ asset($item->images->first()->url) }}" style="width: 100%; height: 20rem"
                                        class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." />
                                </a>
                            @else
                                <a href="{{ route('productdetail', $item->id) }}">
                                    <img src="{{ asset('images/imageImage.webp') }}" style="width: 100%; height: 20rem"
                                        class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." />
                                </a>
                            @endif

                            {{-- <img src="{{ $item->hinh }}" style="width: 100%; height: 20rem"
                                class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." /> --}}
                            <div class="card-body">
                                <p class="card-product_type mb-1" style="font-size: 14px;">{{ $item->catalog->ten_dm }}</p>
                                <a style="display: -webkit-box; max-height: 3.7rem;  -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                    href="{{ route('productdetail', ['id' => $item->id]) }}"
                                    class="card-product__tittle fs-5 card-title text-decoration-none fw-medium">
                                    {{ $item->ten }}
                                </a>
                                <p class="card-product__star">
                                    <i class="fa-solid fa-star" style="color: #eaea14"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14"></i>
                                </p>
                                <p class="card-product__quantity">Có sẵn: <span
                                        style="letter-spacing: 5px; font-weight: 600; font-size: 1.1rem"
                                        class="text-danger">{{ $item->quantity }}</span>
                                </p>
                                <hr class="border border-danger border-2 opacity-100" />

                                @if ($item->giamgia > 0)
                                    <p class="mt-3 mb-0">
                                        <span class="card-price fw-medium fs-5">
                                            {{ number_format($item->giamgia, 0, ',', ',') }}đ
                                        </span>
                                        &nbsp;
                                        <del class="opacity-50">
                                            {{ number_format($item->gia, 0, ',', ',') }}đ
                                        </del>
                                    </p>
                                @else
                                    <p class="mt-3 mb-0">
                                        <span
                                            class="card-price fw-medium fs-5">{{ number_format($item->gia, 0, ',', ',') }}đ</span>
                                        &nbsp;
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- mẫu
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="card card-product position-relative">
                        <span style="top: 1%; left: 2%" class="position-absolute badge rounded-1 p-2 bg-dark"> -5% </span>
                        <span style="top: 1%; right: 2%" class="position-absolute badge rounded-1 p-2 bg-danger"> -5%
                        </span>
                        <img src="{{ asset('clients/images/prod_2.png') }}" style="width: 100%; height: 20rem"
                            class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." />
                        <div class="card-body">
                            <p class="card-product_type">Chuột máy tính</p>
                            <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                href="#"
                                class="card-product__tittle fs-5 card-title text-decoration-none fw-medium">
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
                                    class="text-danger">0</span>
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

                {{-- 
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination d-flex justify-content-center">
                            <li class="page-item"><a class="page-link text-dark fw-medium" href="#">Trước</a></li>
                            <li class="page-item"><a class="page-link text-dark fw-medium" href="#">1</a></li>
                            <li class="page-item"><a class="page-link text-dark fw-medium" href="#">2</a></li>
                            <li class="page-item"><a class="page-link text-dark fw-medium" href="#">3</a></li>
                            <li class="page-item"><a class="page-link text-dark fw-medium" href="#">Sau</a></li>
                        </ul>
                    </nav>
                </div> --}}

                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination d-flex justify-content-center">
                            {{ $products->links('vendor.pagination.custom') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </main>

    <script>
        // AOS.init();

        $(document).ready(function() {
            $(".carousel-related__products").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 4,
                    },
                },
            });
        });
    </script>
@endsection
