{{-- @extends('layout.clientlayout') --}}
@extends('layout.clientlayout')
@section('content')
    @if (session('success'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-success">{{ session('success') }}</div>
        </div>
    @endif
    <main>
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
        <section class="banner_introduce bg-secondary-subtle p-4">
            <div class="container">Trang chủ / Đặt hàng thành công</div>
        </section>

        <div class="products-card container mt-4">
            <div class="d-flex justify-content-center">
                <!-- <h4>Thông tin thanh toán</h4> -->
                <div class="products-card-right col-md-6 text-center">
                    <div class="card rounded-2 border-0" style="background-color: rgb(246, 246, 246)">
                        <div class="card-body">
                            <h5 class="card-tittle text-center">
                                Đặt hàng thành công
                                <img style="width: 30px" class="img-fluid object-fit-contain"
                                    src="{{ asset('clients/images/logo/status_success.png') }}" alt="" />
                            </h5>
                            <ul class="list-group">
                                <li class="list-group-item border-0">Mã đơn hàng:
                                    <strong>{{ $billPaymentSuccess->ma_hoadon }}</strong>
                                </li>
                                <li class="list-group-item border-0">Ngày đặt hàng:
                                    <strong>{{ $billPaymentSuccess->created_at->format('d-m-Y') }}</strong>
                                </li>
                                <li class="list-group-item border-0">Tồng tiển:
                                    <strong>{{ number_format($billPaymentSuccess->total, 0, ',', '.') }}đ</strong>
                                </li>
                                <li class="list-group-item border-0">
                                    Phương thức thanh toán:
                                    <strong>
                                        @if ($billPaymentSuccess->pttt == 0)
                                            Thanh toán khi nhận hàng
                                        @elseif($billPaymentSuccess->pttt == 1)
                                            Thanh toán bằng thẻ ngân hàng
                                        @elseif($billPaymentSuccess->pttt == 2)
                                            Thanh toán bằng MoMo
                                        @else
                                            Không xác định
                                        @endif
                                    </strong>
                                    {{-- <strong> {{ orderInfor[0].pttt == 1 ? 'Thanh toán khi nhận hàng' : (orderInfor[0].pttt == 2 ? 'Thanh toán bằng thẻ ngân hàng' : (orderInfor[0].pttt == 3 ? 'Thanh toán bằng MoMo' : 'Không xác định')) }}</strong> --}}
                                </li>
                                <li class="list-group-item border-0">
                                    {{-- Chi tiết đơn hàng: --}}
                                    <a class="text-black fw-bold" href="#">Xem chi tiết đơn hàng</a>

                                    {{-- <strong> {{ orderInfor[0].pttt == 1 ? 'Thanh toán khi nhận hàng' : (orderInfor[0].pttt == 2 ? 'Thanh toán bằng thẻ ngân hàng' : (orderInfor[0].pttt == 3 ? 'Thanh toán bằng MoMo' : 'Không xác định')) }}</strong> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
