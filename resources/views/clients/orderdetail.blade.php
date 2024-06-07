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
                                <li class="list-group-item border-0 text-start">Thông tin người nhận:
                                    <strong>{{ $informationDetailBill->ten_nguoidat }}
                                        ,{{ $informationDetailBill->diachi_nguoidat }}
                                        ,{{ $informationDetailBill->sdt_nguoidat }}</strong>
                                </li>

                                <li class="list-group-item border-0 text-start">Mã đơn hàng:
                                    <strong>{{ $informationDetailBill->ma_hoadon }}</strong>
                                </li>
                                <li class="list-group-item border-0 text-start">Ngày đặt hàng:
                                    <strong>{{ $informationDetailBill->created_at->format('d-m-Y') }} </strong>
                                </li>
                                <li class="list-group-item border-0 text-start">
                                    Phương thức thanh toán:
                                    @if ($informationDetailBill->pttt == 0)
                                        <strong> Thanh toán khi nhận hàng </strong>
                                    @elseif ($informationDetailBill->pttt == 1)
                                        <span class="text-warning fw-bold">
                                            Thẻ ngân hàng
                                        </span>
                                    @elseif ($informationDetailBill->pttt == 2)
                                        <span class="text-success fw-bold">
                                            MoMo
                                        </span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="products-card__list col-md-9">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="">
                                <th style="background-color: rgb(246, 246, 246)">Mã đơn hàng</th>
                                <th style="background-color: rgb(246, 246, 246)">Sản phẩm</th>
                                <th style="background-color: rgb(246, 246, 246)">Hình</th>
                                <th style="background-color: rgb(246, 246, 246)">Màu</th>
                                <th style="background-color: rgb(246, 246, 246)">Số lượng</th>
                                <th style="background-color: rgb(246, 246, 246)">Giá</th>
                                <th style="background-color: rgb(246, 246, 246)">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listOrderdByUser as $key => $item)
                                <tr>
                                    <td class="align-middle">{{ $item->madh }}</td>
                                    <td class="align-middle">{{ $item->ten }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div style="width: 100px">
                                            <img style="width: 100%; object-git: cover;" src="{{ asset($item->hinh) }}"
                                                alt="" />
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">{{ $item->mau }}</td>
                                    <td class="align-middle text-center">×{{ $item->soluong }}</td>
                                    <td class="align-middle text-center">{{ number_format($item->gia, 0, ',', '.') }}₫</td>

                                    <td class="align-middle text-center" style="font-size: 0.9rem">
                                        @if ($item->status == 0)
                                            <span class="color-red fw-bold">
                                                Đang xử lí
                                            </span>
                                        @elseif ($item->status == 1)
                                            <span class="text-warning fw-bold">
                                                Đang vận chuyển
                                            </span>
                                        @elseif ($item->status == 2)
                                            <span class="text-success fw-bold">
                                                Đã nhận được hàng
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <footer>
                            <tr>
                                <th class="align-middle text-center">Tổng</th>
                                <th colspan="6" class="text-center">
                                    {{ number_format($informationDetailBill->total, 0, ',', '.') }}₫</th>
                            </tr>
                        </footer>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
