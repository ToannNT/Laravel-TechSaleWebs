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
                                    <a class="nav-link" href="#">
                                        <i class="fa-solid fa-arrow-trend-up"></i>
                                        Phổ biến</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                        Điện thoại</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa-solid fa-laptop"></i>
                                        Máy tính</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa-solid fa-hat-wizard"></i>
                                        Phụ kiện</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa-solid fa-headphones"></i>
                                        Tai nghe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa-regular fa-clock"></i>
                                        Smart Watch</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
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
            <div class="container">Trang chủ / Checkout</div>
        </section>

        <div class="products-card container mt-4">
            <form ng-submit="buyProduct()" name="myForm" class="row g-4 needs-validation" novalidate>
                <div class="products-card__list col-md-7">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input ng-model="userObj.name" type="text" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" id="#" pattern="[A-Z].{10,}" required />
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                            <div class="invalid-feedback">Họ tên phảu có viết hoa và hơn 10 kí tự</div>
                        </div>
                        <div class="col-lg-6">
                            <label for="#" class="form-label">Số điện thoại</label>
                            <input ng-model="userObj.phone" type="text" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" pattern="^(0|\+84)\d{9,10}$" required />
                            <div class="invalid-feedback">Phải đúng 9 đến 10 số</div>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                        </div>

                        <div class="col-lg-6">
                            <label for="birthday" class="form-label">Ngày sinh</label>
                            <input ng-if="userObj.birthday" ng-model="userObj.birthday" type="text" id="birthday"
                                class="form-control p-2 rounded border-2" style="padding: 12px 0px 12px 10px" required />
                            <input ng-if="!userObj.birthday" ng-model="userObj.birthday" type="date" id="birthday"
                                class="form-control p-2 rounded border-2" style="padding: 12px 0px 12px 10px" required />
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                            <div class="invalid-feedback">Vui lòng nhập ngày sinh</div>
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label">Giớ tính</label>
                            <select class="form-select p-2" ng-model="userObj.gender" aria-label="Default select example"
                                required>
                                <option value="">Chọn giới tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                            <div class="invalid-feedback">Vui lòng nhập giới tính</div>
                        </div>
                        <div class="col-lg-6">
                            <label for="#" class="form-label">Email</label>
                            <input ng-model="userObj.email" type="email" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required />
                            <div class="invalid-feedback">Vui lòng nhập email</div>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                        </div>
                        <div class="col-lg-6">
                            <label for="address" class="form-label">Địa chỉ giao hàng</label>
                            <input ng-model="userObj.address" type="text" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" required />
                            <div class="invalid-feedback">Vui lòng nhập địa chỉ giao hàng !</div>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                        </div>
                        <div class="form-floating">
                            <textarea ng-model="userObj.note" id="myTextarea" class="form-control"
                                placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."
                                style="height: 250px"></textarea>
                            <label for="">Ghi chú đơn hàng (tuỳ chọn)</label>
                            <div class="invalid-feedback">Ít nhất 50 kí tự</div>
                        </div>
                    </div>
                </div>
                <div class="products-card-right col-md-5">
                    <div class="card rounded-1 border-0" style="background-color: rgb(246, 246, 246)">
                        <div class="card-body">
                            <h5 class="card-tittle fw-medium mb-2">Đơn hàng</h5>
                            <!-- <div class="row g-1 mb-4">
                                <div class="col-8">
                                  <input class="form-control rounded-1" type="text" placeholder="Nhập mã giảm giá" />
                                </div>
                                <div class="col-4">
                                  <button class="col-4 form-control rounded-1 text-bg-danger" type="submit">Áp dụng</button>
                                </div>
                              </div> -->
                            <table class="table">
                                <thead>
                                    <tr class="p-4">
                                        <th style="background-color: rgb(246, 246, 246); width: 55%" class="text-start">
                                            Sản phẩm</th>
                                        <th style="background-color: rgb(246, 246, 246); width: 20%"
                                            class="col-3 text-center">Số lượng</th>
                                        <th style="background-color: rgb(246, 246, 246); width: 35%"
                                            class="col-3 text-end">Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-if="productBuyNow">
                                        <td style="background-color: rgb(246, 246, 246); width: 55%"
                                            class="col-6 text-start">iPad mini 6 WiFi 64GB | Chính hãng Apple Việt Nam</td>
                                        <td style="background-color: rgb(246, 246, 246); width: 20%" class="text-center">
                                            ×1</td>
                                        <td style="background-color: rgb(246, 246, 246); width: 35%" class="text-end">
                                            12,590,000₫</td>
                                        {{-- <td ng-if="!listItemsPayment.reducedPrice" style="background-color: rgb(246, 246, 246); width: 35%" class="text-end">{{productBuyNow.price | number: '0'}} ₫</td> --}}
                                    </tr>
                                    {{--   
                  <tr ng-if="!productBuyNow" ng-repeat="listItemsPayment in dsCartsAll | filter: {buy: 'true'}">
                    <td style="background-color: rgb(246, 246, 246); width: 55%" class="col-6 text-start">{{listItemsPayment.name}}</td>
                    <td style="background-color: rgb(246, 246, 246); width: 20%" class="text-center">×{{listItemsPayment.quantity}}</td>
                    <td ng-if="listItemsPayment.reducedPrice" style="background-color: rgb(246, 246, 246); width: 35%" class="text-end">{{listItemsPayment.reducedPrice | number: '0'}} ₫</td>
                    <td ng-if="!listItemsPayment.reducedPrice" style="background-color: rgb(246, 246, 246); width: 35%" class="text-end">{{listItemsPayment.price | number: '0'}} ₫</td>
                  </tr> --}}
                                </tbody>
                                <footer>
                                    <tr>
                                        <th style="background-color: rgb(246, 246, 246); width: 50%" class="text-start">
                                            Tổng</th>
                                        <th ng-if="userData" colspan="2"
                                            style="background-color: rgb(246, 246, 246); width: 50%"
                                            class="col-3 text-end">12,590,000đ</th>
                                        {{-- <th ng-if="!userData" colspan="2"
                                            style="background-color: rgb(246, 246, 246); width: 50%"
                                            class="col-3 text-end">0yrty₫</th> --}}
                                    </tr>
                                </footer>
                            </table>

                            <h6 class="fw-semibold my-2">Phương thức thanh toán</h6>

                            <div class="form-check my-3">
                                <input class="form-check-input me-2" ng-model="userObj.pttt" type="radio"
                                    value="1" name="flexRadioDefault" required />
                                <label class="form-check-label fw-medium">Thanh toán khi nhận hàng</label>
                            </div>

                            <div class="form-check my-3">
                                <input class="form-check-input me-2" type="radio" ng-model="userObj.pttt"
                                    value="2" name="flexRadioDefault" />
                                <label class="form-check-label fw-medium">Thanh toán bằng thẻ ngân hàng</label>
                            </div>

                            <div class="form-check my-3">
                                <input class="form-check-input me-2" type="radio" ng-model="userObj.pttt"
                                    value="3" name="flexRadioDefault" />
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
    </main>
    <script>
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
