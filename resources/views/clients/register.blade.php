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
            <div class="container">Trang chủ / Đăng ký</div>
        </section>

        <section class="container login-wrapper mt-4">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-sm-8 col-lg-4">
                    <form action="{{ route('register.submit') }}" method="POST">
                        @csrf
                        <h2 class="fs-3 fw-medium mb-4 text text-center">Đăng ký</h2>

                        <div class="row">
                            <div class="col-12">
                                <label class="form-label">Tên*:</label>
                                <input name="name" value="{{ old('name') }}" placeholder="Nhập tên"
                                    class="w-100 form-control bg-secondary-subtle p-2 mb-3" type="text" />
                                @error('name')
                                    <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label class="form-label">Email*:</label>
                                <input name="email" value="{{ old('email') }}" placeholder="example@gmail.com"
                                    class="w-100 form-control bg-secondary-subtle p-2 mb-3" type="email" />
                                @error('email')
                                    <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label class="form-label">Mật khẩu*:</label>
                                <input name="password" placeholder="ví dụ: Password@123" type="password"
                                    class="w-100 form-control bg-secondary-subtle p-2 mb-3" />
                                @error('password')
                                    <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label class="form-label">Nhập lại mật khẩu*:</label>
                                <input name="password_confirmation" type="password" placeholder="Nhập lại mật khẩu"
                                    class="w-100 form-control bg-secondary-subtle p-2 mb-3" />
                                @error('password_confirmation')
                                    <div class="invalid-feedback d-block mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="fs-6 w-100 m-0 btn btn-danger btn-lg">Đăng ký</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <input type="hidden" class="btn btn-primary" ng-click="showToast()" id="liveToastBtn" />
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="text-bg-success rounded toast-body">Chúc mừng bạn đã đăng ký thành công</div>
        </div>
    </div>

    <script>
        // const toastTrigger = document.getElementById("liveToastBtn");
        // const toastLiveExample = document.getElementById("liveToast");

        // if (toastTrigger) {
        //   const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        //   toastTrigger.addEventListener("click", () => {
        //     toastBootstrap.show();
        //     // Tự động tắt toast sau 2 giây
        //     setTimeout(() => {
        //       toastBootstrap.hide();
        //     }, 3000);
        //   });
        // }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            "use strict";

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll(".needs-validation");

            // Loop over them and prevent submission
            Array.from(forms).forEach((form) => {
                form.addEventListener(
                    "submit",
                    (event) => {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add("was-validated");
                    },
                    false
                );
            });
        })();
    </script>
@endsection
