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
                                    <a class="fs-6 nav-link" href="#!product/all">
                                        <i class="fa-solid fa-arrow-trend-up"></i>
                                        Phổ biến</a>
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
        <section class="banner_introduce bg-secondary-subtle p-3">
            <div class="container">Trang chủ / Cart</div>
        </section>

        <div class="products-card container mt-4">
            <div class="row g-4">
                <div class="products-card__list col-md-8">
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Tác vụ</th>
                                <th scope="col">Hình</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="dsCart in dsCartsAll">
                                <td><input type="checkbox" class="form-check-input" ng-model="dsCart.buy"
                                        ng-change="updateBuyStatus(dsCart)" /></td>
                                <td>
                                    <img style="width: 70px" class="img-fluid object-fit-cover"
                                        src="{{ asset('clients/images/product/ipadmini64_1.webp') }}" alt="" />
                                </td>
                                <td class="fw-medium">iPad mini 6 WiFi 64GB | Chính hãng Apple Việt Nam</td>
                                <td ng-if="dsCart.reducedPrice" style="color: rgb(255, 149, 21)" class="fw-bold">12,590,000
                                    ₫</td>
                                {{-- <td ng-if="!dsCart.reducedPrice" style="color: rgb(255, 149, 21)" class="fw-bold">{{dsCart.price| number: '0'}} ₫</td> --}}

                                <td class="text-center">
                                    <!-- <input class="form-control" type="text" value="-" /> -->
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="">
                                            <button ng-click="giamSoLuongItem(dsCart)" class="form-control fw-medium"
                                                type="text">-</button>
                                        </div>
                                        <div class="">
                                            <!-- <input   class="form-control text-center" min="1" max="200" value="12" type="number" /> -->
                                            <button ng-model="dsCart.quantity"
                                                class="form-control text-center px-3">13</button>
                                        </div>
                                        <div class="">
                                            <button ng-click="tangSoLuongItem(dsCart)" class="form-control fw-medium"
                                                type="text">+</button>
                                        </div>
                                    </div>
                                </td>
                                <td><span ng-click="deleItemCart(dsCart.id)" style="cursor: pointer"
                                        class="text-decoration-none text-dark fw-medium" href="#">Xóa</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="products-card-right col-md-4">
                    <div class="card rounded border-0" style="background-color: rgb(246, 246, 246)">
                        <div class="card-body">
                            <h4 class="card-tittle fw-medium mb-4">Tổng Số Giỏ Hàng</h4>
                            <div class="row g-1 mb-4">
                                <div class="col-8">
                                    <input class="form-control rounded" type="text" placeholder="Nhập mã giảm giá" />
                                </div>
                                <div class="col-4">
                                    <button class="col-4 form-control rounded text-bg-danger" type="submit">Áp
                                        dụng</button>
                                </div>
                            </div>
                            <div class="row mb-4 border-bottom pb-4">
                                <div class="col-6">Tổng phụ</div>
                                <div class="col-6 text-end">12,590,000 ₫</div>
                            </div>
                            <div class="row mb-4 border-bottom pb-4">
                                <div class="col-6">voucher</div>
                                <div class="col-6 text-end">-0₫</div>
                            </div>
                            <div class="row fw-bold mb-4">
                                <div class="col-6">Tổng</div>
                                <div class="col-6 text-end">12,590,000 ₫ ₫</div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#!payment" style="background-color: rgb(255, 149, 21)"
                                        class="w-100 btn text-white rounded">Tiến hành thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
