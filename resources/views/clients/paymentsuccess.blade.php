{{-- @extends('layout.clientlayout') --}}
@extends('layout.clientlayout')
@section('content')
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
            <div class="row g-4 text-center">
                <!-- <h4>Thông tin thanh toán</h4> -->
                <div class="products-card-right col-md-6">
                    <div class="card rounded-2 border-0" style="background-color: rgb(246, 246, 246)">
                        <div class="card-body">
                            <h5 class="card-tittle text-center">
                                Đặt hàng thành công
                                <img style="width: 30px" class="img-fluid object-fit-contain"
                                    src="{{ asset('clients/images/logo/status_success.png') }}" alt="" />
                            </h5>
                            <ul class="list-group">
                                <li class="list-group-item border-0">Mã đơn hàng: <strong>etech7504</strong></li>
                                <li class="list-group-item border-0">Ngày đặt hàng: <strong>15-05-2024</strong></li>
                                <li class="list-group-item border-0">Tồng tiển: <strong>12,590,000đ</strong></li>
                                <li class="list-group-item border-0">
                                    Phương thức thanh toán:
                                    <strong>Thanh toán khi nhận hàng</strong>

                                    {{-- <strong> {{ orderInfor[0].pttt == 1 ? 'Thanh toán khi nhận hàng' : (orderInfor[0].pttt == 2 ? 'Thanh toán bằng thẻ ngân hàng' : (orderInfor[0].pttt == 3 ? 'Thanh toán bằng MoMo' : 'Không xác định')) }}</strong> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="products-card__list col-md-6">
                    <table class="table">
                        <thead>
                            <tr class="p-4">
                                <th style="background-color: rgb(246, 246, 246); width: 55%" class="text-start">Sản phẩm
                                </th>
                                <th style="background-color: rgb(246, 246, 246); width: 20%" class="col-3 text-center">Số
                                    lượng</th>
                                <th style="background-color: rgb(246, 246, 246); width: 20%" class="col-3 text-center">Giá
                                </th>
                                <th style="background-color: rgb(246, 246, 246); width: 35%" class="col-3 text-end">Tổng phụ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="dssp in orderInfor[0].products_order">
                                <td style="background-color: rgb(246, 246, 246); width: 55%" class="col-6 text-start">iPad
                                    mini 6 WiFi 64GB | Chính hãng Apple Việt Nam</td>
                                <td style="background-color: rgb(246, 246, 246); width: 20%" class="text-center">×1</td>
                                <td style="background-color: rgb(246, 246, 246); width: 35%" class="text-end">12,590,000₫
                                </td>
                                <td ng-if="dssp.reducedPrice" style="background-color: rgb(246, 246, 246); width: 35%"
                                    class="text-end">12,590,000₫</td>
                                {{-- <td ng-if="!dssp.reducedPrice" style="background-color: rgb(246, 246, 246); width: 35%"
                                    class="text-end">12,590,000₫
                                </td> --}}
                            </tr>
                        </tbody>
                        <footer>
                            <tr>
                                <th style="background-color: rgb(246, 246, 246); width: 50%" class="text-start">Tổng</th>
                                <th colspan="3" style="background-color: rgb(246, 246, 246); width: 50%"
                                    class="col-3 text-end">12,590,000₫</th>
                            </tr>
                        </footer>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
