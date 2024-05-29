{{-- @extends('layout.clientlayout') --}}
@extends('layout.clientlayout')
@section('content')
    <main>
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
            <div class="container">Trang chủ / Liên hệ</div>
        </section>

        <section class="container section_news mt-5">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row g-1 mb-4">
                        <div class="col-12">
                            <h1 class="fs-3">Liên hệ</h1>
                        </div>
                    </div>
                    <form name="myForm" ng-submit="sendContact()" class="row g-3 needs-validation" novalidate>
                        <div class="col-lg-6">
                            <label for="" class="form-label">Họ tên</label>
                            <input ng-model="fullname" type="text" id="" class="form-control rounded border-2"
                                style="padding: 12px 0px 12px 10px" id="#" value="" required
                                pattern="[A-Z].{10,}" />
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                            <div class="invalid-feedback">Họ tên phảu có viết hoa và hơn 10 kí tự</div>
                        </div>

                        <div class="col-lg-6">
                            <label for="#" class="form-label">Email</label>
                            <input ng-model="email" type="email" class="form-control rounded border-2"
                                style="padding: 12px 0px 12px 10px" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required />
                            <div class="invalid-feedback">Nhập đúng định dạng email example@gmail.com</div>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                        </div>
                        <div class="col-lg-6">
                            <label for="#" class="form-label">Số điện thoại</label>
                            <input ng-model="phone" type="text" class="form-control rounded border-2"
                                style="padding: 12px 0px 12px 10px" pattern="^(0|\+84)\d{9,10}$" required />
                            <div class="invalid-feedback">Ít nhất từ 9 đến 10 số và số điện thoại Việt Nam</div>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                        </div>
                        <div class="col-lg-6">
                            <label for="#" class="form-label">Chủ đề</label>
                            <input ng-model="topic" type="text" class="form-control rounded border-2"
                                style="padding: 12px 0px 12px 10px" pattern=".{10,}" required />
                            <div class="invalid-feedback">Ít nhất 10 kí tự</div>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                        </div>

                        <!-- <div class="col-lg-6">
                  <label for="#" class="form-label">Nội dung</label>
                  <input type="text" class="form-control rounded border-2" style="padding: 12px 0px 12px 10px" pattern=".{50,}" required />
                  <div class="invalid-feedback">Ít nhất 50 kí tự</div>
                </div> -->
                        <div class="form-floating">
                            <textarea id="myTextarea" class="form-control" placeholder="Leave a comment here" id=""
                                style="height: 250px" pattern=".{50,}" required></textarea>
                            <label for="">Nội dụng</label>
                            <div class="invalid-feedback">Ít nhất 50 kí tự</div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-danger btn-lg fs-6 px-4 rounded" type="submit">Gửi</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 mb-3">
                    <div class="row g-1 mb-4">
                        <div class="col-12">
                            <h1 class="fs-3">Thông tin liên hệ</h1>
                        </div>
                    </div>
                    <div class="row g-1 mb-4">
                        <div class="card rounded-0 p-2 bg-danger">
                            <div class="card-body">
                                <div class="g-1 d-flex" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2)">
                                    <div class="me-3">
                                        <i class="fa-solid fa-phone bg-warning p-3"></i>
                                    </div>
                                    <div class="">
                                        <p class="fw-mediu fs-6 text-white">Liên hệ</p>
                                        <p class="text-white fs-6 fw-light">(+84)079523123</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="g-1 d-flex" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2)">
                                    <div class="me-3">
                                        <!-- <i class="fa-solid fa-phone "></i> -->
                                        <i class="fa-solid fa-envelope bg-warning p-3"></i>
                                    </div>
                                    <div class="">
                                        <p class="fw-mediu fs-6 text-white">Email</p>
                                        <p class="text-white fs-6 fw-light">toan70858@gmail.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="g-1 d-flex" style="border-bottom: 1px solid rgba(255, 255, 255, 0.2)">
                                    <div class="me-3">
                                        <i class="fa-solid fa-location-dot bg-warning p-3"></i>
                                    </div>
                                    <div class="">
                                        <p class="fw-medium fs-6 text-white">Địa chỉ</p>
                                        <p class="text-white fw-light fs-6">QTSC 9 Building, Tô Ký, Quận 12, Thành phố Hồ
                                            Chí Minh, Việt Nam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0 container-fluid mt-5">
            <iframe class=""
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.444161907923!2d106.62605694340074!3d10.85378292618848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b6c59ba4c97%3A0x535e784068f1558b!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1710945607107!5m2!1svi!2s"
                width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container-fluid banner-support bg-danger p-5">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-12 col-sm-3 d-flex justify-content-start align-item-center">
                            <i class="fa-solid fa-truck-fast fs-3 text-warning me-3" aria-hidden="true"></i>
                            <div class="banner-support__content">
                                <h5 class="title text-white">Miễn phí giao hàng</h5>
                                <p class="text-white">Từ Đơn Hàng Trên 1,000,000 ₫</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3 d-flex justify-content-start align-item-center">
                            <i class="fa-solid fa-headphones fs-3 text-warning me-3" aria-hidden="true"></i>
                            <div class="banner-support__content">
                                <h5 class="title text-white">Hỗ Trợ 24/7</h5>
                                <p class="text-white">Nhận Hỗ Trợ Trực Truyến 24/7</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3 d-flex justify-content-start align-item-center">
                            <i class="fa-solid fa-money-check-dollar fs-3 text-warning me-3" aria-hidden="true"></i>
                            <div class="banner-support__content">
                                <h5 class="title text-white">Hoàn Tiền</h5>
                                <p class="text-white">Hoàn Trả Trong Vòng 15 Ngày</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3 d-flex justify-content-start align-item-center">
                            <i class="fa-solid fa-gift fs-3 text-warning me-3" aria-hidden="true"></i>
                            <div class="banner-support__content">
                                <h5 class="title text-white">Mã Quà Tặng</h5>
                                <p class="text-white">Nhận Mã Khuyến Mãi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
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
