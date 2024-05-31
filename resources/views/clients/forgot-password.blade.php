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
            <div class="container">Trang chủ / Quên mật khẩu</div>
        </section>

        <section class="container login-wrapper mt-4">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-sm-8 col-lg-4">
                    <form method="POST" action="{{ route('forgot-password.submit') }}">
                        @csrf
                        <h2 class="fs-3 fw-medium mb-4 text text-center">Quên mật khẩu</h2>



                        <label for="email" class="form-label">Email:</label>
                        <input id="email" name="email" type="email"
                            class="w-100 form-control bg-secondary-subtle p-2 mb-3" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        @if (session('status'))
                            <div class="mb-3 alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="fs-6 w-100 m-0 btn btn-danger btn-lg">Gửi xác nhận</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
