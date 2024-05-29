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
            <div class="container">Trang chủ / Chi tiết đơn hàng</div>
        </section>

        <div class="products-card container mt-4">
            <div class="row g-2 text-center">
                <!-- <h4>Thông tin thanh toán</h4> -->
                <div class="products-card-right col-md-3">
                    <div class="card rounded-2 border-0" style="background-color: rgb(246, 246, 246)">
                        <div class="card-body">
                            <h5 class="card-tittle text-start">Thông tin chi tiết đơn hàng</h5>
                            <ul class="list-group">
                                <li class="list-group-item border-0 text-start">Mã đơn hàng: <strong>etech8178</strong></li>
                                <li class="list-group-item border-0 text-start">Ngày đặt hàng: <strong>17-05-2024 </strong>
                                </li>
                                <li class="list-group-item border-0 text-start">
                                    Phương thức thanh toán:
                                    <strong> Thanh toán khi nhận hàng </strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="products-card__list col-md-9">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="">
                                <th style="background-color: rgb(246, 246, 246)" class="text-start">Sản phẩm</th>
                                <th style="background-color: rgb(246, 246, 246)" class="text-start">Hình</th>
                                <th style="background-color: rgb(246, 246, 246)" class="text-center">Số lượng</th>
                                <th style="background-color: rgb(246, 246, 246)" class="text-center">Giá</th>
                                <th style="background-color: rgb(246, 246, 246)" class="text-end">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="dssp in orderInfor[0].products_order">
                                <td class="text-start">Máy Ảnh FUJI INSTAX MINI 8</td>
                                <td class="text-start">
                                    <img style="width: 70px"
                                        src="{{ asset('clients/images/product/fuji-instax-mini8_1.jpg') }}"
                                        alt="" />
                                </td>
                                <td class="text-center">×3</td>
                                <td class="text-end">1,990,000₫</td>

                                <td style="font-size: 0.9rem" class="tr_td">
                                    <span style="color: red">
                                        Chờ xử lí
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        <footer>
                            <tr>
                                <th class="text-start">Tổng</th>
                                <th colspan="4" class="text-end">21,560,000₫</th>
                            </tr>
                        </footer>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
