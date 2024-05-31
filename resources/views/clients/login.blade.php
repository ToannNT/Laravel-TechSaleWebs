{{-- @extends('layout.clientlayout') --}}
@extends('layout.clientlayout')
@section('content')
    @if (session('success'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-success">{{ session('success') }}</div>
        </div>
    @endif
    @if (session('resetpassword-success'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-success">{{ session('resetpassword-success') }}</div>
        </div>
    @endif

    {{-- @if (session('notauthentic'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-danger">{{ session('notauthentic') }}</div>
        </div>
    @endif --}}

    @if ($errors->has('notauthentic'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-danger">{{ $errors->first('notauthentic') }}</div>
        </div>
    @elseif($errors->has('resetpassword-failed'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-danger">{{ $errors->first('resetpassword-failed') }}</div>
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
            <div class="container">Trang chủ / Đăng nhập</div>
        </section>

        <section class="container login-wrapper mt-4">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-sm-8 col-lg-4">
                    <form method="POST" action="{{ route('login.submit') }}" class="needs-validation">
                        @csrf
                        <h2 class="fs-3 fw-medium mb-4 text text-center">Đăng nhập</h2>
                        <label for="email" class="form-label">Tên đăng nhập emai*:</label>
                        <input id="email" name="email" type="email"
                            class="w-100 form-control bg-secondary-subtle p-2 mb-3" />
                        @error('email')
                            <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                        @enderror

                        <label for="password" class="form-label">Mật khẩu*:</label>
                        <input id="password" name="password" type="password"
                            class="w-100 form-control bg-secondary-subtle p-2 mb-3" />
                        @error('password')
                            <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                        @enderror

                        <div class="row mb-3">
                            <div class="col-6 d-flex">
                                <input class="form-check me-2" type="checkbox" name="remember" />
                                <span>Ghi nhớ</span>
                            </div>
                            <div class="col-6 text-end">
                                <a class="text-decoration-none text-dark" href="{{ route('forgot-password') }}">Quên mật
                                    khẩu</a>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="fs-6 w-100 m-0 btn btn-danger btn-lg">Đăng nhập</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p>
                                    Bạn chưa có tài khoản ?
                                    <a class="fw-semibold text-dark" href="{{ route('register') }}">Đăng ký</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-sm-6"></div> -->
            </div>
        </section>
    </main>
@endsection
