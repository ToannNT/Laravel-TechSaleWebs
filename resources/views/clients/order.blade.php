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
            <div class="container">Trang chủ / Tài khoản của tôi</div>
        </section>

        <div class="products-card container mt-4">
            <div class="row g-2">
                <div class="products-card-right col-md-3">
                    <div class="card rounded-1 border-0" style="background-color: rgb(246, 246, 246)">
                        <div class="card-body row d-flex justify-content-center">
                            <!-- <h5 class="card-tittle fw-medium mb-4 text-center">Đơn hàng</h5> -->
                            <div style="width: 100px" class="col-12">
                                <img class="w-100 img-fluid object-fit-contain"
                                    src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png"
                                    alt="" />
                            </div>
                            <div class="col-12 text-center mt-3">
                                <h6>thanhtoan28744@gmail.com</h6>
                            </div>
                        </div>
                    </div>

                    <div class="list-group mt-3">
                        <a href="#!myaccount/12" class="list-group-item list-group-item-action">Hồ sơ cá nhân</a>
                        <a href="#!order/12" class="list-group-item list-group-item-action fw-semibold"
                            aria-current="true">Đơn hàng</a>
                        <a href="#" class="list-group-item list-group-item-action">Đăng xuất</a>
                        <!-- <a href="#" class="list-group-item list-group-item-action">Chỉnh sửa</a> -->
                        <!-- <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a> -->
                    </div>
                </div>
                <div class="products-card__list col-md-9">
                    <!-- <main> -->
                    <div style="margin-top: 0.1%" class="container col-md-12">
                        <p class="h2"></p>
                        <div class="custom-div">
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                            <div class="custom-line"></div>
                        </div>
                        <table style="margin: 0px" class="table table-striped custom-table">
                            <thead>
                                <tr class="tr_th text-center">
                                    <th style="font-size: 0.9rem" scope="col">Mã đơn hàng</th>
                                    <th style="font-size: 0.9rem" scope="col">Ngày đặt</th>
                                    <th style="font-size: 0.9rem" scope="col">Số lượng</th>
                                    <th style="font-size: 0.9rem" scope="col">Thành tiền</th>
                                    <th style="font-size: 0.9rem" scope="col">Tình trạng</th>
                                    <th style="font-size: 0.9rem" class="" scope="col">Xem chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center" ng-repeat="dsorder in listOrder">
                                    <td style="font-size: 0.9rem" scope="row">etech1592024</td>
                                    <!-- <td style="width: 70px" class="tr_td">
                                                    <a href="">
                                                      <img class="img-sp w-100 object-fit-contain" src="../images/product/iPad10WiFi_2.webp" alt="" />
                                                    </a>
                                                  </td> -->
                                    <!-- <td style="font-size: 0.9rem" class="tr_td">Đồng hồ thông minh Apple Watch Ultra GPS</td> -->
                                    <td style="font-size: 0.9rem" class="tr_td">15/05/2024</td>
                                    <!-- <td style="font-size: 0.9rem" class="tr_td">VYXWG2</td> -->
                                    <td style="font-size: 0.9rem" class="tr_td">3</td>
                                    <td style="font-size: 0.9rem" class="tr_td">500.000đ</td>

                                    <td ng-model="status" style="font-size: 0.9rem" class="tr_td">
                                        <span style="color: green; font-weight: bold">
                                            Đã giao
                                        </span>
                                        {{-- <span
                                            ng-style="{'color': dsorder.status === 1 ? 'red' : (dsorder.status === 2 ? 'orange' : (dsorder.status === 3 ? 'green' : 'black'))}">
                                            {{ dsorder . status === 1 ? 'Chờ xử lí' : (dsorder . status === 2 ? 'Đang giao' : (dsorder . status === 3 ? 'Đã giao' : 'Không xác định')) }}
                                        </span> --}}
                                    </td>
                                    <!-- <td style="font-size: 0.9rem" class="tr_td"><span style="color: #5273f9; font-weight: bold" href="#">Đang giao</span></td> -->
                                    <td><a style="font-size: 0.9rem" class="text-decoration-none text-secondary"
                                            href="#!detailorder/etech154123s">Xem</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- </main> -->
                </div>
            </div>
        </div>
    </main>
@endsection
