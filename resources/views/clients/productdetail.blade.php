{{-- @extends('layout.clientlayout') --}}
@extends('layout.clientlayout')
@section('content')
    <main>
        <style>
            .chose-productColor.active {
                background-color: rgb(213, 44, 44);
            }
        </style>
        <section class="banner_introduce bg-secondary-subtle p-4">
            <div class="container">Trang chủ / Sản phẩm / Tai nghe AirPods Max</div>
        </section>

        <section class="container detail-product-wrapper mt-5">
            <div class="row">
                <div class="detail-product-wrapper__left col-12 col-sm-5">
                    <div class="owl-carousel carousel-product__images owl-theme">
                        @foreach ($oneProduct->images as $image)
                            <div class="item">
                                <img style="max-height: 500px" class="p-4 w-100 img-fluid object-fit-contain"
                                    src="{{ $image->url }}" alt="" />
                            </div>
                        @endforeach

                        {{-- <div class="item">
                            <img style="max-height: 500px" class="w-100 img-fluid object-fit-contain"
                                src="{{ $oneProduct->hinh }}" alt="" />
                        </div>
                        <div class="item">
                            <img style="max-height: 500px" class="w-100 img-fluid object-fit-contain"
                                src="{{ $oneProduct->hinh }}" alt="" />
                        </div>
                        <div class="item">
                            <img style="max-height: 500px" class="w-100 img-fluid object-fit-contain"
                                src="{{ $oneProduct->hinh }}" alt="" />
                        </div> --}}
                    </div>
                    <div class="g-2 row detail-product__images mt-1 ">
                        @foreach ($oneProduct->images as $index => $image)
                            <a class="item_thumb col text-white" href="#{{ $index }}">
                                <img class="w-100 img-fluid object-fit-contain" src="{{ asset('storage/' . $image->url) }}"
                                    alt="" />
                            </a>
                        @endforeach
                        {{-- <div class="owl-carousel carousel-related__products owl-theme">
                            @foreach ($oneProduct->images as $index => $image)
                                <div class="item">
                                    <a class="item_thumb col-3 text-white" href="#{{ $index }}">
                                        <img style="max-height: 110px" class="w-100 img-fluid object-fit-contain"
                                            src="{{ $image->url }}" alt="" />
                                    </a>
                                </div>
                            @endforeach
                        </div> --}}
                        {{-- <a class="item_thumb col-3 text-white" href="#0">
                            <img style="max-height: 110px" class="w-100 img-fluid object-fit-contain"
                                src="{{ $oneProduct->hinh }}" alt="" />
                        </a>
                        <a class="item_thumb col-3 text-white" href="#zero">
                            <img style="max-height: 110px" class="w-100 img-fluid object-fit-contain"
                                src="{{ $oneProduct->hinh }}" alt="" />
                        </a>
                        <a class="item_thumb col-3 text-white" href="#two">
                            <img style="max-height: 110px" class="w-100 img-fluid object-fit-contain"
                                src="{{ $oneProduct->hinh }}" alt="" />
                        </a>
                        <a class="item_thumb col-3 text-white" href="#three">
                            <img style="max-height: 110px" class="w-100 img-fluid object-fit-contain"
                                src="{{ $oneProduct->hinh }}" alt="" />
                        </a> --}}
                    </div>

                    {{-- <div class="owl-carousel carousel-product__images owl-theme">
                        <div class="item">
                            <img style="max-height: 450px" class="p-4 w-100 img-fluid object-fit-contain"
                                src="{{ asset('clients/images/product/airpodsmax_1.png') }}" alt="" />
                        </div>
                        <div class="item">
                            <img style="max-height: 500px" class="w-100 img-fluid object-fit-contain"
                                src="{{ asset('clients/images/product/airpodsmax_2.png') }}" alt="" />
                        </div>
                        <div class="item">
                            <img style="max-height: 500px" class="w-100 img-fluid object-fit-contain"
                                src="{{ asset('clients/images/product/airpodsmax_3.png') }}" alt="" />
                        </div>
                        <div class="item">
                            <img style="max-height: 500px" class="w-100 img-fluid object-fit-contain"
                                src="{{ asset('clients/images/product/airpodsmax_4.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="g-2 row detail-product__images mt-1">
                        <a class="item_thumb col-3 text-white" href="#zero">
                            <img style="max-height: 110px" class="w-100 img-fluid object-fit-contain"
                                src="{{ asset('clients/images/product/airpodsmax_1.png') }}" alt="" />
                        </a>
                        <a class="item_thumb col-3 text-white" href="#two">
                            <img style="max-height: 110px" class="w-100 img-fluid object-fit-contain"
                                src="{{ asset('clients/images/product/airpodsmax_2.png') }}" alt="" />
                        </a>
                        <a class="item_thumb col-3 text-white" href="#three">
                            <img style="max-height: 110px" class="w-100 img-fluid object-fit-contain"
                                src="{{ asset('clients/images/product/airpodsmax_3.png') }}" alt="" />
                        </a>
                        <a class="item_thumb col-3 text-white" href="#four">
                            <img style="max-height: 110px" class="w-100 img-fluid object-fit-contain"
                                src="{{ asset('clients/images/product/airpodsmax_4.png') }}" alt="" />
                        </a>
                    </div> --}}


                </div>
                <div class="detail-product-wrapper__right col-12 col-sm-7">
                    <!-- name product  -->
                    <h4 class="title mb-3">{{ $oneProduct->ten }}</h4>

                    <!-- price  -->

                    @if ($oneProduct->giamgia > 0)
                        <div class="detail-product_price mb-3">
                            <span class="text-danger fw-bold fs-4">{{ number_format($oneProduct->giamgia, 0, ',', ',') }}đ
                                <strike class="fs-5">{{ number_format($oneProduct->gia, 0, ',', ',') }}đ</strike>
                            </span>
                            <span class="fs-6 fw-normal text-dark opacity-75">(+Đã bao gồm 15% VAT)</span>
                        </div>
                    @else
                        <div class="detail-product_price mb-3">
                            <span class="text-danger fw-bold fs-4">{{ number_format($oneProduct->gia, 0, ',', ',') }}đ
                            </span>
                            <span class="fs-6 fw-normal text-dark opacity-75">(+Đã bao gồm 15% VAT)</span>
                        </div>
                    @endif
                    {{-- mẫu 
                    <div class="detail-product_price mb-3">
                        <span ng-if="dsDetailPro.reducedPrice" class="text-danger fw-bold fs-4">12,999,000đ
                            <strike class="fs-5">14,900,000đ</strike>
                        </span>
                        <span class="fs-6 fw-normal text-dark opacity-75">(+Đã bao gồm 15% VAT)</span>
                    </div> --}}

                    <!-- describe  -->
                    <!-- <p class="fs-5">This Bluetooth speaker has various features such as water resistance, long battery life, built-in microphones for hands-free cTất cảing, and more.</p> -->
                    <div class="row g-1" style="flex-direction: unset">
                        @foreach ($oneProduct->colors as $index => $color)
                            <div class="col-2">
                                <input type="radio" class="btn-check " name="options" id="option{{ $index }}"
                                    autocomplete="off">
                                <label class="btn btn-outline-secondary btn-sm w-100"
                                    for="option{{ $index }}">{{ $color->color }}</label>
                            </div>
                        @endforeach
                        {{-- <div class="col-2">
                            <input type="radio" class="btn-check " name="options" id="option1" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm w-100" for="option1">Màu đỏ</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" class="btn-check " name="options" id="option2" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm w-100" for="option2">Màu đỏ</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" class="btn-check " name="options" id="option3" autocomplete="off">
                            <label class="btn btn-outline-secondary btn-sm w-100" for="option3">Màu đỏ</label>
                        </div> --}}


                    </div>
                    <p class="mt-3 card-product__star">
                        <i class="fa-solid fa-star" style="color: #ecf000"></i>

                        <i class="fa-solid fa-star" style="color: #ecf000"></i>
                        <i class="fa-solid fa-star" style="color: #ecf000"></i>
                        <i class="fa-solid fa-star" style="color: #ecf000"></i>
                        <i class="fa-solid fa-star" style="color: #ecf000"></i>
                    </p>
                    <!-- config  -->
                    <ul class="list-group-item">
                        <li class="list-group-item">
                            <img class="fea-icon"
                                src="https://electio.ecom.themepreview.xyz/home-one/wp-content/uploads/sites/2/2023/10/svgviewer-output-6.svg"
                                alt="" />
                            <span class="fea-txt">Model: UB7OM</span>
                        </li>
                        <li class="list-group-item">
                            <img class="fea-icon"
                                src="https://electio.ecom.themepreview.xyz/home-one/wp-content/uploads/sites/2/2023/10/svgviewer-output-6.svg"
                                alt="" />

                            <span class="fea-txt">Dynamic Bass Boost Drivers and Dual Passive Radiators</span>
                        </li>
                        <li class="list-group-item">
                            <img class="fea-icon"
                                src="https://electio.ecom.themepreview.xyz/home-one/wp-content/uploads/sites/2/2023/10/svgviewer-output-6.svg"
                                alt="" />

                            <span class="fea-txt">2 x 14W Output Power</span>
                        </li>
                        <li class="list-group-item">
                            <img class="fea-icon"
                                src="https://electio.ecom.themepreview.xyz/home-one/wp-content/uploads/sites/2/2023/10/svgviewer-output-6.svg"
                                alt="" />

                            <span class="fea-txt">IP67 Dustproof &amp; Waterproof</span>
                        </li>
                        <li class="list-group-item">
                            <img class="fea-icon"
                                src="https://electio.ecom.themepreview.xyz/home-one/wp-content/uploads/sites/2/2023/10/svgviewer-output-6.svg"
                                alt="" />

                            <span class="fea-txt">Convenient Hands-Free Tất cảing</span>
                        </li>
                    </ul>

                    <!-- btn  -->
                    <div class="btn-product mb-3">
                        <input class="btn bg-secondary-subtle col-2 col-sm-2 col-lg-1 py-2 rounded" type="text"
                            value="-" ng-click="decrementQuantity()" />
                        <!-- <input class="btn bg-secondary-subtle col-3 col-sm-3 col-lg-1 py-2 rounded" type="number" min="1" max="200" ng-model="valueQuantity" /> -->
                        <button class="btn bg-secondary-subtle col-3 col-sm-3 col-lg-1 py-2 rounded">1</button>
                        <input class="btn bg-secondary-subtle col-2 col-sm-2 col-lg-1 py-2 rounded" type="text"
                            value="+" ng-click="incrementQuantity()" />
                    </div>
                    <div class="btn_buy">
                        <input class="btn col-4 col-lg-3 py-2 btn-warning rounded" type="submmit" value="Mua ngay" />
                        <input ng-click="addCartDetail(dsDetailPro)" class="btn btn-danger col-4 col-lg-3 py-2 rounded"
                            type="submmit" value="Thêm giỏ hàng" />
                    </div>

                    <p class="mt-3 fs-6">
                        <i class="fa-solid fa-location-dot"></i>
                        Đơn hàng giao hàng miễn phí trong vòng 30/05/2024 - 03/06/2024 &amp; đối với tất cả các đơn hàng
                        trên 1,000,000 ₫
                    </p>
                </div>
            </div>
        </section>

        <section class="detail-product__information container mt-5">
            <nav>
                <div class="ps-0 nav nav-tabs border-0 mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link nav-link__btn-detail border-0 fs-5 active" id="nav-home-tab"
                        data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                        aria-controls="nav-home" aria-selected="true">Mô tả</button>
                    <button class="nav-link nav-link__btn-detail border-0 fs-5" id="nav-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                        aria-selected="false">
                        Đánh giá (0)
                    </button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="wrapper-infor" ng-bind-html="dsDetailPro.description | trustHtml"></div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    <div class="row g-4 mt-3">
                        <div class="col-sm-6">
                            <div class="card rounded-0">
                                <div class="card-body card__star">
                                    <h3 class="card-title">
                                        0.00
                                        <span class="fs-5 opacity-75"> ( 0 đánh giá) </span>
                                    </h3>
                                    <div class="row g-2 card__star">
                                        <p class="col-auto">
                                            5
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                        </p>

                                        <div class="col-8 d-flex align-items-center">
                                            <p class="w-100 col-8 bg-secondary-subtle" style="height: 10px"></p>
                                        </div>

                                        <p class="col-auto">0%</p>
                                    </div>
                                    <div class="row g-2 card__star">
                                        <p class="col-auto">
                                            4
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                        </p>

                                        <div class="col-8 d-flex align-items-center">
                                            <p class="w-100 col-8 bg-secondary-subtle" style="height: 10px"></p>
                                        </div>

                                        <p class="col-auto">0%</p>
                                    </div>
                                    <div class="row g-2 card__star">
                                        <p class="col-auto">
                                            3
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                        </p>

                                        <div class="col-8 d-flex align-items-center">
                                            <p class="w-100 col-8 bg-secondary-subtle" style="height: 10px"></p>
                                        </div>

                                        <p class="col-auto">0%</p>
                                    </div>
                                    <div class="row g-2 card__star">
                                        <p class="col-auto">
                                            2
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                        </p>

                                        <div class="col-8 d-flex align-items-center">
                                            <p class="w-100 col-8 bg-secondary-subtle" style="height: 10px"></p>
                                        </div>

                                        <p class="col-auto">0%</p>
                                    </div>
                                    <div class="row g-2 card__star">
                                        <p class="col-auto">
                                            1
                                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                        </p>

                                        <div class="col-8 d-flex align-items-center">
                                            <p class="w-100 col-8 bg-secondary-subtle" style="height: 10px"></p>
                                        </div>

                                        <p class="col-auto">0%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning rounded-0 mt-3" role="alert">Hiện tại không có đánh giá nào.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h1>Review This Product</h1>
                            <form class="row g-2" action="#">
                                <div class="col-6">
                                    <label for="#" class="form-label fw-medium">Tên*:</label>
                                    <input type="text" class="rounded-0 form-control p-3" placeholder="Tên của bạn.."
                                        required />
                                </div>
                                <div class="col-6">
                                    <label for="#" class="form-label fw-medium">Email*:</label>
                                    <input type="email" class="rounded-0 form-control p-3"
                                        placeholder="Nhập email của bạn.." required />
                                </div>
                                <div class="fs-4 col-12 product-review my-3">
                                    Đánh giá sao:
                                    <span><a href="#"><i class="fa-solid fa-star"
                                                style="color: #d6d6d6"></i></a></span>
                                    <span><a href="#"><i class="fa-solid fa-star"
                                                style="color: #d6d6d6"></i></a></span>
                                    <span><a href="#"><i class="fa-solid fa-star"
                                                style="color: #d6d6d6"></i></a></span>
                                    <span><a href="#"><i class="fa-solid fa-star"
                                                style="color: #d6d6d6"></i></a></span>
                                    <span><a href="#"><i class="fa-solid fa-star"
                                                style="color: #d6d6d6"></i></a></span>
                                </div>
                                <label for="#" class="fs-5 fw-medium form-label fw-medium">Chia sẽ thêm về cảm nhận
                                    của bạn:</label>
                                <div class="form-floating">
                                    <textarea class="rounded-0 form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                        style="height: 150px"></textarea>
                                    <label for="floatingTextarea2">Chia sẻ</label>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-danger btn-lg rounded-0" type="submit">Gửi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container product-trending mt-5">
            <div data-aos-once="true" data-aos="fade-right" class="row product-trending__tittle">
                <div class="col-12">
                    <h2 class="fs-3 mb-3 fw-semibold">Sản phẩm liên quan</h2>
                </div>
            </div>
            <div class="owl-carousel carousel-related__products owl-theme">
                @foreach ($listProductByCatalog as $item)
                    <div class="item">

                        <div class="col-12">
                            <div class="card card-product position-relative">
                                {{-- <span style="top: 1%; left: 2%" class="position-absolute badge rounded-1 p-2 bg-dark"> -5%
                            </span> --}}
                                <span style="top: 1%; right: 2%" class="position-absolute badge rounded-1 p-2 bg-danger">
                                    -5%
                                </span>

                                @if ($item->images->isNotEmpty())
                                    <img src="{{ $item->images->first()->url }}" style="width: 100%; height: 20rem"
                                        class="card-product__img card-img-top img-fluid object-fit-cover"
                                        alt="..." />
                                @endif

                                {{-- <img src="{{ $item->hinh }}" style="width: 100%; height: 20rem"
                                    class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." /> --}}
                                <div class="card-body">
                                    <p class="card-product_type mb-1" style="font-size: 14px;">
                                        {{ $item->catalog->ten_dm }}</p>
                                    <a style="display: -webkit-box; max-height: 3.7rem;  -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                        href="{{ route('productdetail', ['id' => $item->id]) }}"
                                        class="card-product__tittle fs-5 card-title text-decoration-none fw-medium">
                                        {{ $item->ten }}
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

                                    @if ($item->giamgia > 0)
                                        <p class="mt-3">
                                            <span class="card-price fw-medium fs-5">
                                                {{ number_format($item->giamgia, 0, ',', ',') }}đ
                                            </span>
                                            &nbsp;
                                            <del class="opacity-50">
                                                {{ number_format($item->gia, 0, ',', ',') }}đ
                                            </del>
                                        </p>
                                    @else
                                        <p class="mt-3">
                                            <span
                                                class="card-price fw-medium fs-5">{{ number_format($item->gia, 0, ',', ',') }}đ</span>
                                            &nbsp;
                                        </p>
                                    @endif

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
                        {{-- <div class="col-12">
                        <div class="card card-product position-relative">
                            <span style="top: 1%; left: 2%" class="position-absolute badge rounded-1 p-2 bg-danger"> -5%
                            </span>
                            <a href="detailproduct/3">
                                <img src="{{ asset('clients/images/product/airpodsmax_1.png') }}"
                                    style="width: 100%; height: 20rem"
                                    class="card-product__img card-img-top img-fluid object-fit-cover" alt="..." />
                            </a>
                            <div class="card-body">
                                <p class="card-product_type">Tai nghe AirPods Max</p>
                                <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 3.7rem"
                                    href="detailproduct/12"
                                    class="card-product__tittle fs-5 card-title text-decoration-none fw-medium">
                                    Sony PlayStation VR2 Approx. 110°, Communication​ With PS5
                                </a>
                                <p class="card-product__star">
                                    <i class="me-2 fa-solid fa-star" style="color: #ecf000"></i>
                                    <i class="fa-solid fa-star" style="color: #ecf000"></i>
                                    <i class="fa-solid fa-star" style="color: #ecf000"></i>
                                    <i class="fa-solid fa-star" style="color: #ecf000"></i>
                                    <i class="fa-solid fa-star" style="color: #ecf000"></i>
                                </p>
                                <p class="card-product__quantity">Có sẵn: <span
                                        style="letter-spacing: 5px; font-weight: 600; font-size: 1.1rem"
                                        class="text-danger">0/145</span></p>
                                <hr class="border border-danger border-2 opacity-100" />
                                <p class="mt-3">
                                    <span class="card-price fw-medium fs-5">1,150,000₫</span> &nbsp;
                                    <del class="opacity-50"> 1,505,000₫ </del>
                                </p>
                                <div class="card-product__btn">
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <a href="payment/12" class="col-12 btn btn-warning">Mua</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="cart/12" class="col-12 btn btn-danger">Thêm</a>
                                        </div>
                                        <!-- <a href="#" class="col-6 btn btn-primary">Thêm</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    </div>
                @endforeach

            </div>
        </section>
    </main>
@endsection

@section('js-directly')
    <script>
        // Sự kiện click trên thumb để chuyển slide trong carousel chính
        //   var item = $(".carousel-product__images .item_thumb");
        //   console.log(item);
        $(".item_thumb").on("click", function(e) {
            e.preventDefault();
            var index = $(this).index();
            $(".carousel-product__images").trigger("to.owl.carousel", index);
        });

        $(document).ready(function() {
            $(".carousel-product__images").owlCarousel({
                items: 1,
                loop: false,
                center: true,
                margin: 10,
                URLhashListener: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 2000,
                autoplayHoverPause: true,
                startPosition: "URLHash",
            });

            $(".carousel-related__products").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                items: 4, // Số lượng sản phẩm trên mỗi slide

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