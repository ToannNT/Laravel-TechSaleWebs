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
        <section class="banner_introduce bg-secondary-subtle p-4">
            <div class="container">Trang chủ / Tài khoản của tôi</div>
        </section>

        <div class="products-card container mt-4">
            <div class="row g-4">
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
                                <h6>thanhtoan297840@gmail.com</h6>
                            </div>
                        </div>
                    </div>

                    <div class="list-group mt-3">
                        <a href="#!myaccount/12" class="fw-semibold list-group-item list-group-item-action"
                            aria-current="true">Hồ sơ cá nhân</a>
                        <a href="#!order/12" class="list-group-item list-group-item-action">Đơn hàng</a>
                        <a href="#" class="list-group-item list-group-item-action">Đăng xuất</a>
                        <!-- <a href="#" class="list-group-item list-group-item-action">Chỉnh sửa</a> -->
                        <!-- <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a> -->
                    </div>
                </div>
                <div class="products-card__list col-md-9">
                    <form name="myForm" ng-submit="Priodut orngu order()" class="row g-3 needs-validation" novalidate>
                        <div class="col-lg-12">
                            <label for="" class="form-label">Họ và tên</label>
                            <input ng-model="fullname" type="text" id=""
                                class="form-control p-2 rounded border-2" style="padding: 12px 0px 12px 10px" id="#"
                                value="" required pattern="[A-Z].{10,}" />
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                            <div class="invalid-feedback">Họ tên phảu có viết hoa và hơn 10 kí tự</div>
                        </div>
                        <div class="col-lg-12">
                            <label for="#" class="form-label">Số điện thoại</label>
                            <input ng-model="phone" type="number" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" pattern="^(0|\+84)\d{9,10}$" required />
                            <div class="invalid-feedback">Ít nhất từ 9 đến 10 số và số điện thoại Việt Nam</div>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                        </div>

                        <div ng-if="!birthday" class="col-lg-6">
                            <label for="date" class="form-label">Ngày sinh</label>
                            <input ng-model="birthday" type="date" id=""
                                class="form-control p-2 rounded border-2" style="padding: 12px 0px 12px 10px"
                                id="#" value="" required />
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                            <div class="invalid-feedback">Họ tên phảu có viết hoa và hơn 10 kí tự</div>
                        </div>
                        <div ng-if="birthday" class="col-lg-6">
                            <label for="date" class="form-label">Ngày sinh</label>
                            <input ng-model="birthday" type="date" id=""
                                class="form-control p-2 rounded border-2" style="padding: 12px 0px 12px 10px"
                                id="#" value="" required />
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                            <div class="invalid-feedback">Họ tên phảu có viết hoa và hơn 10 kí tự</div>
                        </div>

                        <div class="col-lg-6">
                            <label for="gender" class="form-label">Giớ tính</label>
                            <select class="form-select p-2" ng-model="gender" aria-label="Default select example"
                                required>
                                <option value="">Chọn giới tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                            <div class="invalid-feedback">Vui lòng nhập giới tính</div>
                        </div>
                        <div class="col-lg-12">
                            <label for="#" class="form-label">Email</label>
                            <input ng-model="email" type="email" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required />
                            <div class="invalid-feedback">Nhập đúng định dạng email example@gmail.com</div>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                        </div>
                        <div class="col-lg-12">
                            <label for="address" class="form-label">Địa chỉ giao hàng</label>
                            <input ng-model="address" type="text" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" required />
                            <div class="invalid-feedback">Nhập đúng định dạng email example@gmail.com</div>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                        </div>
                        <div class="">
                            <button type="submit" class="w-auto btn btn-danger">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
