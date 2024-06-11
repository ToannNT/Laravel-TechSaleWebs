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
                                    src="{{ $user->profile_picture ? asset('images/user/' . $user->profile_picture) : asset('images/user/defaultImageUser.png') }}"
                                    alt="" />
                            </div>
                            <div class="col-12 text-center mt-3">
                                <h6>{{ $user->email }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="list-group mt-3">
                        <a href="{{ route('profile') }}" class="list-group-item list-group-item-action">Hồ sơ cá nhân</a>
                        <a href="{{ route('order') }}" class="list-group-item list-group-item-action fw-semibold"
                            aria-current="true">Đơn hàng</a>
                        <form action="{{ route('logout.submit') }}" method="post">
                            @csrf
                            <button type="submit" class="list-group-item list-group-item-action">Đăng
                                xuất</button>
                        </form>
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
                                    <th style="font-size: 0.9rem" class="" scope="col">Xem chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listBillByUser as $index => $item)
                                    <tr class="text-center">
                                        <td style="font-size: 0.9rem" scope="row">{{ $item->ma_hoadon }}</td>
                                        <td style="font-size: 0.9rem" class="tr_td">
                                            {{ $item->created_at->format('d-m-Y') }}</td>
                                        @php
                                            $orderDetailCount = $item->orderDetails->count();
                                        @endphp
                                        <td style="font-size: 0.9rem" class="tr_td">{{ $orderDetailCount }}</td>
                                        <td style="font-size: 0.9rem" class="tr_td">
                                            {{ number_format($item->tong, 0, ',', '.') }}đ</td>
                                        <!-- <td style="font-size: 0.9rem" class="tr_td"><span style="color: #5273f9; font-weight: bold" href="#">Đang giao</span></td> -->
                                        <td>
                                            <a style="font-size: 0.9rem" class="text-decoration-none text-secondary"
                                                href="{{ route('orderdetail', ['bill_id' => $item->id]) }}">Xem</a>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- </main> -->
                </div>
            </div>
        </div>
    </main>
@endsection
