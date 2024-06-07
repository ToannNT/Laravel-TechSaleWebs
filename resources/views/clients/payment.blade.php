@extends('layout.clientlayout')

@section('content')
    <nav class="d-none d-lg-block border-top border-bottom">
        <div class="container border-primary-subtle">
            <div class="row">
                <div class="col-md-10">
                    <div class="navbar navbar-expand-lg bg-white">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="fs-6 nav-link" href="#!product/all">
                                    <i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i>
                                    Phổ biến</a>
                            </li>
                            <li class="nav-item">
                                <a class="fs-6 nav-link" href="#!product/1">
                                    <i class="fa-solid fa-mobile-screen-button" aria-hidden="true"></i>
                                    Điện thoại</a>
                            </li>
                            <li class="nav-item">
                                <a class="fs-6 nav-link" href="#">
                                    <i class="fa-solid fa-laptop" aria-hidden="true"></i>
                                    Máy tính</a>
                            </li>
                            <li class="nav-item">
                                <a class="fs-6 nav-link" href="#">
                                    <i class="fa-solid fa-hat-wizard" aria-hidden="true"></i>
                                    Phụ kiện</a>
                            </li>
                            <li class="nav-item">
                                <a class="fs-6 nav-link" href="#">
                                    <i class="fa-solid fa-headphones" aria-hidden="true"></i>
                                    Tai nghe</a>
                            </li>
                            <li class="nav-item">
                                <a class="fs-6 nav-link" href="#">
                                    <i class="fa-regular fa-clock" aria-hidden="true"></i>
                                    Smart Watch</a>
                            </li>
                            <li class="nav-item">
                                <a class="fs-6 nav-link" href="#">
                                    <i class="fa-solid fa-camera" aria-hidden="true"></i>
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
                                    <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
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
        <div class="container">Trang chủ / Thanh toán</div>
    </section>
    <main>
        @extends('layout.clientlayout')

    @section('content')
        <nav class="d-none d-lg-block border-top border-bottom">
            <div class="container border-primary-subtle">
                <div class="row">
                    <div class="col-md-10">
                        <div class="navbar navbar-expand-lg bg-white">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#!product/all">
                                        <i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i>
                                        Phổ biến</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#!product/1">
                                        <i class="fa-solid fa-mobile-screen-button" aria-hidden="true"></i>
                                        Điện thoại</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-laptop" aria-hidden="true"></i>
                                        Máy tính</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-hat-wizard" aria-hidden="true"></i>
                                        Phụ kiện</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-headphones" aria-hidden="true"></i>
                                        Tai nghe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-regular fa-clock" aria-hidden="true"></i>
                                        Smart Watch</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-camera" aria-hidden="true"></i>
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
                                        <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
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
            <div class="container">Trang chủ / Thanh toán</div>
        </section>
        <div class="products-card container my-4">
            <form action="{{ route('payment.submit') }}" method="POST" class="row g-4 ">
                @csrf
                <div class="products-card__list col-md-7">
                    <h4 style="color: rgb(255, 149, 21)" class="card-title fw-medium my-4">Thông tin giao hàng</h4>
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input name="name" type="text" class="form-control p-2 rounded border-2"
                                value="{{ $user->name }}" style="padding: 12px 0px 12px 10px" />
                            @error('name')
                                <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input name="phone" type="text" class="form-control p-2 rounded border-2"
                                value="{{ $user->phone }}" style="padding: 12px 0px 12px 10px" />
                            @error('phone')
                                <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control p-2 rounded border-2"
                                value="{{ $user->email }}" style="padding: 12px 0px 12px 10px" />
                            @error('email')
                                <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="address" class="form-label">Địa chỉ giao hàng</label>
                            <input name="address" type="text" class="form-control p-2 rounded border-2"
                                value="{{ $user->address }}" style="padding: 12px 0px 12px 10px" />
                            @error('address')
                                <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea name="note" id="myTextarea" class="form-control"
                                placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."
                                style="height: 250px">{{ old('note') }}</textarea>
                            <label for="myTextarea">Ghi chú đơn hàng (tuỳ chọn)</label>
                        </div>
                    </div>
                </div>
                <div class="products-card-right col-md-5">
                    <div class="card rounded-1 border-0" style="background-color: rgb(246, 246, 246)">
                        <div class="card-body">
                            <h5 class="card-title fw-medium mb-2">Đơn hàng</h5>
                            <div class="row g-1 mb-3">
                                <div class="col-8">
                                    <input class="form-control rounded" type="text" placeholder="Nhập mã giảm giá">
                                </div>
                                <div class="col-4">
                                    <button class="col-4 form-control rounded text-bg-danger" type="submit">Áp
                                        dụng</button>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr class="p-4">
                                        <th class="text-start">Sản phẩm</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-end">Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0; @endphp
                                    @foreach ($listPaymentItems as $item)
                                        <tr>
                                            <td class="text-start">{{ $item->ten }}</td>
                                            <td class="text-center">×{{ $item->soluong }}</td>
                                            <td class="text-end">
                                                {{ number_format($item->gia, 0, ',', '.') }}₫</td>
                                        </tr>
                                        @php $total += $item->gia * $item->soluong; @endphp
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-start">Tổng</th>
                                        <th colspan="2" class="text-end">{{ number_format($total, 0, ',', '.') }}₫
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>

                            <h6 class="fw-semibold my-2">Phương thức thanh toán</h6>

                            <div class="form-check my-3">
                                <input class="form-check-input me-2" name="pttt" type="radio" value="0"
                                    checked />
                                <label class="form-check-label fw-medium">Thanh toán khi nhận hàng</label>
                            </div>

                            <div class="form-check my-3">
                                <input class="form-check-input me-2" type="radio" name="pttt" value="1" />
                                <label class="form-check-label fw-medium">Thanh toán bằng thẻ ngân hàng</label>
                            </div>

                            <div class="form-check my-3">
                                <input class="form-check-input me-2" type="radio" name="pttt" value="2" />
                                <label class="form-check-label fw-medium">Thanh toán bằng MoMo</label>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" style="background-color: rgb(255, 149, 21)"
                                        class="w-100 btn text-white rounded-0">Tiến hành thanh toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endsection

</main>
@endsection
