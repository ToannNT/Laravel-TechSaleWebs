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
            <div class="container">Trang chủ / Tin tức</div>
        </section>

        <section class="container section_news">
            <div class="col-12 mt-4">
                <p class="fs-5 text-danger mb-0">ĐỌC TIN TỨC MỚI NHẤT</p>
                <h2 class="fs-2 fw-semibold">Tin Tức Mới Nhất</h2>
            </div>
            <div class="row">
                <div class="col-lg-9 mt-4">
                    <div class="row g-4">
                        <div class="col-12 col-sm-6">
                            <a href="#!detailnews/33">
                                <img class="w-100 object-fit-cover rounded-3 rounded-bottom-0" style="height: 300px"
                                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/05/dien-thoai-tot-cho-sinh-vien-xtmobile.jpg"
                                    alt="" />
                            </a>
                            <div class="row news__describe p-3 rounded-3 m-0 shadow" style="background-color: #f8f8f8">
                                <a href="#!" class="text-dark text-decoration-none col-4 mb-3 opacity-75">
                                    <i class="fa-solid fa-rug opacity-75"></i>
                                    Điện thoại
                                </a>
                                <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                                    <i class="fa-regular fa-comment-dots opacity-75"></i>
                                    Bình luận
                                </a>
                                <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                                    <i class="fa-regular fa-clock opacity-75"></i>
                                    14/05/2024
                                </a>

                                <a href="#!detailnews/12"
                                    style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden"
                                    class="text-decoration-none fs-4 fw-medium text-dark mb-3 title">Điện thoại Android tốt
                                    nhất cho sinh viên năm 2024</a>
                                <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                    class="decription-pro mb-2">Top điện thoại tốt nhất 2024 phù hợp với học sinh,
                                    sinh viên.</p>
                                <a href="#!detailnews/3" class="btn col-6 fs-5 fw-medium opacity-50 text-start">Đọc
                                    ngay<span class="ms-2"><i class="fa-solid fa-arrow-right" style="color: #9c9b9b"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a href="#!detailnews/33">
                                <img class="w-100 object-fit-cover rounded-3 rounded-bottom-0" style="height: 300px"
                                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/05/dien-thoai-tot-cho-sinh-vien-xtmobile.jpg"
                                    alt="" />
                            </a>
                            <div class="row news__describe p-3 rounded-3 m-0 shadow" style="background-color: #f8f8f8">
                                <a href="#!" class="text-dark text-decoration-none col-4 mb-3 opacity-75">
                                    <i class="fa-solid fa-rug opacity-75"></i>
                                    Điện thoại
                                </a>
                                <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                                    <i class="fa-regular fa-comment-dots opacity-75"></i>
                                    Bình luận
                                </a>
                                <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                                    <i class="fa-regular fa-clock opacity-75"></i>
                                    14/05/2024
                                </a>

                                <a href="#!detailnews/12"
                                    style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden"
                                    class="text-decoration-none fs-4 fw-medium text-dark mb-3 title">Điện thoại Android tốt
                                    nhất cho sinh viên năm 2024</a>
                                <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                    class="decription-pro mb-2">Top điện thoại tốt nhất 2024 phù hợp với học sinh,
                                    sinh viên.</p>
                                <a href="#!detailnews/3" class="btn col-6 fs-5 fw-medium opacity-50 text-start">Đọc
                                    ngay<span class="ms-2"><i class="fa-solid fa-arrow-right" style="color: #9c9b9b"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a href="#!detailnews/33">
                                <img class="w-100 object-fit-cover rounded-3 rounded-bottom-0" style="height: 300px"
                                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/05/dien-thoai-tot-cho-sinh-vien-xtmobile.jpg"
                                    alt="" />
                            </a>
                            <div class="row news__describe p-3 rounded-3 m-0 shadow" style="background-color: #f8f8f8">
                                <a href="#!" class="text-dark text-decoration-none col-4 mb-3 opacity-75">
                                    <i class="fa-solid fa-rug opacity-75"></i>
                                    Điện thoại
                                </a>
                                <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                                    <i class="fa-regular fa-comment-dots opacity-75"></i>
                                    Bình luận
                                </a>
                                <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                                    <i class="fa-regular fa-clock opacity-75"></i>
                                    14/05/2024
                                </a>

                                <a href="#!detailnews/12"
                                    style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden"
                                    class="text-decoration-none fs-4 fw-medium text-dark mb-3 title">Điện thoại Android tốt
                                    nhất cho sinh viên năm 2024</a>
                                <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                    class="decription-pro mb-2">Top điện thoại tốt nhất 2024 phù hợp với học sinh,
                                    sinh viên.</p>
                                <a href="#!detailnews/3" class="btn col-6 fs-5 fw-medium opacity-50 text-start">Đọc
                                    ngay<span class="ms-2"><i class="fa-solid fa-arrow-right" style="color: #9c9b9b"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <a href="#!detailnews/33">
                                <img class="w-100 object-fit-cover rounded-3 rounded-bottom-0" style="height: 300px"
                                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/05/dien-thoai-tot-cho-sinh-vien-xtmobile.jpg"
                                    alt="" />
                            </a>
                            <div class="row news__describe p-3 rounded-3 m-0 shadow" style="background-color: #f8f8f8">
                                <a href="#!" class="text-dark text-decoration-none col-4 mb-3 opacity-75">
                                    <i class="fa-solid fa-rug opacity-75"></i>
                                    Điện thoại
                                </a>
                                <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                                    <i class="fa-regular fa-comment-dots opacity-75"></i>
                                    Bình luận
                                </a>
                                <a href="#" class="text-dark text-decoration-none col-4 opacity-75">
                                    <i class="fa-regular fa-clock opacity-75"></i>
                                    14/05/2024
                                </a>

                                <a href="#!detailnews/12"
                                    style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden"
                                    class="text-decoration-none fs-4 fw-medium text-dark mb-3 title">Điện thoại Android tốt
                                    nhất cho sinh viên năm 2024</a>
                                <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                    class="decription-pro mb-2">Top điện thoại tốt nhất 2024 phù hợp với học sinh,
                                    sinh viên.</p>
                                <a href="#!detailnews/3" class="btn col-6 fs-5 fw-medium opacity-50 text-start">Đọc
                                    ngay<span class="ms-2"><i class="fa-solid fa-arrow-right" style="color: #9c9b9b"
                                            aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination d-flex justify-content-center">
                                    <li class="page-item"><a class="page-link text-dark fw-medium"
                                            href="#">Trước</a>
                                    </li>
                                    <li class="page-item"><a class="page-link text-dark fw-medium" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link text-dark fw-medium" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link text-dark fw-medium" href="#">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link text-dark fw-medium" href="#">Sau</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="d-flex justify-content-around mb-3">
                        <div class="">
                            <input class="form-control rounded p-2" type="text" placeholder="Tên bài viết" />
                        </div>
                        <div class="">
                            <input type="submit" class="form-control rounded text-bg-danger p-2" value="Tìm kiếm" />
                        </div>
                    </div>

                    <div class="row g-1 mb-4">
                        <h4>Bài viết liên quan</h4>
                        <hr class="border border-danger border-2 opacity-50" />
                    </div>
                    <div class="row g-2 border-bottom pb-3 mb-4">
                        <div class="col-3">
                            <a href="#!detailnews/12">
                                <img style="width: 100%; height: 80px"
                                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/05/dien-thoai-tot-cho-sinh-vien-xtmobile.jpg"
                                    alt="" class="w-100 img-fluid object-fit-cover" />
                            </a>
                        </div>

                        <div class="col-8 d-flex flex-column justify-content-between">
                            <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                href="#!detailnews/12" class="text-decoration-none text-dark fw-medium">Điện thoại Android
                                tốt nhất cho sinh viên năm 2024</a>
                            <div>
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    16/05/2024
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 border-bottom pb-3 mb-4">
                        <div class="col-3">
                            <a href="#!detailnews/12">
                                <img style="width: 100%; height: 80px"
                                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/05/dien-thoai-tot-cho-sinh-vien-xtmobile.jpg"
                                    alt="" class="w-100 img-fluid object-fit-cover" />
                            </a>
                        </div>

                        <div class="col-8 d-flex flex-column justify-content-between">
                            <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                href="#!detailnews/12" class="text-decoration-none text-dark fw-medium">Điện thoại Android
                                tốt nhất cho sinh viên năm 2024</a>
                            <div>
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    16/05/2024
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 border-bottom pb-3 mb-4">
                        <div class="col-3">
                            <a href="#!detailnews/12">
                                <img style="width: 100%; height: 80px"
                                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/05/dien-thoai-tot-cho-sinh-vien-xtmobile.jpg"
                                    alt="" class="w-100 img-fluid object-fit-cover" />
                            </a>
                        </div>

                        <div class="col-8 d-flex flex-column justify-content-between">
                            <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                href="#!detailnews/12" class="text-decoration-none text-dark fw-medium">Điện thoại Android
                                tốt nhất cho sinh viên năm 2024</a>
                            <div>
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    16/05/2024
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 border-bottom pb-3 mb-4">
                        <div class="col-3">
                            <a href="#!detailnews/12">
                                <img style="width: 100%; height: 80px"
                                    src="https://cdn.xtmobile.vn/vnt_upload/news/04_2024/05/dien-thoai-tot-cho-sinh-vien-xtmobile.jpg"
                                    alt="" class="w-100 img-fluid object-fit-cover" />
                            </a>
                        </div>

                        <div class="col-8 d-flex flex-column justify-content-between">
                            <a style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                href="#!detailnews/12" class="text-decoration-none text-dark fw-medium">Điện thoại Android
                                tốt nhất cho sinh viên năm 2024</a>
                            <div>
                                <span>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    16/05/2024
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row category_hot row g-1 my-4">
                        <h4>Danh mục nổi bật</h4>
                        <hr class="border border-danger border-2 opacity-50" />
                        <div class="d-flex justify-content-between mb-3">
                            <div class="">
                                <a class="text-decoration-none text-dark fw-medium" href="#!news/12">Điện thoại</a>
                            </div>
                            <div class="text-end">(4)</div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="">
                                <a class="text-decoration-none text-dark fw-medium" href="#!news/12">Ipad</a>
                            </div>
                            <div class="text-end">(2)</div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="">
                                <a class="text-decoration-none text-dark fw-medium" href="#!news/12">Smart Watch</a>
                            </div>
                            <div class="text-end">(4)</div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="">
                                <a class="text-decoration-none text-dark fw-medium" href="#!news/12">Tai Nghe</a>
                            </div>
                            <div class="text-end">(4)</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <script>
        // AOS.init();
        $(".carousel-related__products").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 4,
                },
            },
        });
    </script>
@endsection
