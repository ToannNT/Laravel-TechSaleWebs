@extends('layout.adminlayout')
@section('content')
    <div class="container-fluid px-2">
        <div class="p-3 rounded border-0 my-3 shadow">
            {{-- <h4 class="">Thêm sản phẩm mới</h4> --}}
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none fw-semibold text-secondary" href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Chỉnh sửa sản phẩm </li>
                <li class="breadcrumb-item active">Samsung galaxy s10 ultra </li>

            </ol>
        </div>


        <div class="border-0 shadow card mb-4">
            <div class="card-body">
                <!-- <div class="table-responsive"> -->
                <div class="row">
                    <div class="col-12">
                        <div class="tile">
                            <div class="tile-body">
                                <form name="myForm" ng-submit="addProduct()" enctype="multipart/form-data"
                                    class="row g-3 needs-validation" novalidate>
                                    <div class="form-group col-md-3">
                                        <label for="danhmucsp" class="control-label">Danh mục<span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <select ng-model="catalog" class="form-control" required>
                                            <option value="">--Chọn danh mục--</option>
                                            <!-- 1111111 -->
                                            <option value="1">Điện thoại</option>
                                            <option value="2">iPad</option>
                                            <option value="3">Smart watch</option>
                                            <option value="4">Tai Nghe</option>
                                            <option value="5">Máy Ảnh</option>
                                            <option value="6">Kính thực tế ảo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tensp" class="control-label">Tên sản phẩm <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input type="text" ng-model="nameproduct" class="form-control" required />
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="giabansp" class="control-label">Giá chính<span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input id="giabansp" ng-model="price" class="form-control" type="number"
                                            required />
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="giabansp" class="control-label">Giá giảm</label>
                                        <input id="giabansp" ng-model="reducedPrice" class="form-control" type="number" />
                                    </div>

                                    <!-- Màu  -->
                                    <div class="form-group col-md-3">
                                        <label>Số màu muốn thêm <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <div class="d-flex">
                                            <input type="number" class="w-75 form-control" ng-model="numColors" required />
                                            <button class="btn btn-secondary w-25" ng-click="addColors()">Thêm</button>
                                        </div>
                                        {{-- <div ng-repeat="color in formData">
                                            <label>Xanh đỏ tím vàng</label>
                                            <input type="text" />
                                            <button ng-click="removeColor(color)">Remove</button>
                                        </div> --}}
                                    </div>

                                    <!-- SỐ lượng sản phẩm  -->
                                    <div class="form-group col-md-3">
                                        <label for="giabansp" class="control-label">Số lượng <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input id="giabansp" ng-model="quantity" class="form-control" type="number"
                                            required />
                                    </div>

                                    <!-- ngày nhập sản phẩm  -->
                                    <div class="form-group col-md-3">
                                        <label for="giabansp" class="control-label">Ngày nhập <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input id="giabansp" ng-model="date" class="form-control" type="date"
                                            required />
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="image1">Ảnh sản phẩm 1 <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input type="file" id="image1" class="image-input" accept="image/*"
                                            onchange="previewImage(this)" required />
                                        <!-- <img id="preview1" src="" style="max-width: 200px; max-height: 200px; margin-top: 10px; display: none" /><br /> -->
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="image2">Ảnh sản phẩm 2 <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input type="file" id="image2" class="image-input" accept="image/*"
                                            onchange="previewImage(this)" required />
                                        <!-- <img id="preview2" src="" style="max-width: 200px; max-height: 200px; margin-top: 10px; display: none" /><br /> -->
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="image3">Ảnh sản phẩm 3 <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input type="file" id="image3" class="image-input" accept="image/*"
                                            onchange="previewImage(this)" required />
                                        <!-- <img id="preview3" src="" style="max-width: 200px; max-height: 200px; margin-top: 10px; display: none" /><br /> -->
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="image4">Ảnh sản phẩm 4 <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input type="file" id="image4" class="image-input" accept="image/*"
                                            onchange="previewImage(this)" required />
                                        <!-- <img id="preview4" src="" style="max-width: 200px; max-height: 200px; margin-top: 10px; display: none" /><br /> -->
                                    </div>

                                    <!-- Chi tiết sản phẩm  -->
                                    <div class="form-floating col-md-12">
                                        <textarea class="form-control" ng-model="description" placeholder="Leave a comment here" id="floatingTextarea2"
                                            style="height: 200px"></textarea>
                                        <label for="floatingTextarea2">Mô tả chi tiết sản phẩm</label>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-warning" type="submit">Lưu</button>
                                        <form action="#">
                                            <button class="btn btn-danger" type="submit">Hủy thay đổi</button>
                                        </form>
                                    </div>
                                </form>

                                <ul>
                                    {{-- <li ng-repeat="product in dssp | filter: {id: '7e07'}">
                                        {{ product . name }}
                                        <img ng-repeat="image in product.img" ng-src="{{ image }}"
                                            alt="{{ product . name }}" />
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- DataTales Example -->
