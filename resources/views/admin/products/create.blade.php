@extends('layout.adminlayout')
@section('content')
    <div class="container-fluid px-2">
        <div class="p-3 rounded border-0 my-3 shadow">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none fw-semibold text-secondary"
                        href="{{ route('products.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Thêm sản phẩm</li>
            </ol>
        </div>

        <div class="border-0 shadow card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="tile">
                            <div class="tile-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!</div>
                                @endif
                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
                                    class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="form-group col-md-3">
                                        <label for="catalog_id" class="control-label">Danh mục <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <select id="catalog_id" name="catalog_id" class="form-control" required>
                                            <option value="">--Chọn danh mục--</option>
                                            @foreach ($listCatalog as $catalog)
                                                <option value="{{ $catalog->id }}">{{ $catalog->ten_dm }}</option>
                                            @endforeach
                                        </select>
                                        @error('catalog_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="ten" class="control-label">Tên sản phẩm <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input type="text" id="ten" name="ten" class="form-control" required />
                                        @error('ten')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="gia" class="control-label">Giá chính <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input id="gia" name="gia" class="form-control" type="number" required />
                                        @error('gia')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="giamgia" class="control-label">Giá giảm</label>
                                        <input id="giamgia" name="giamgia" class="form-control" type="number" />
                                        @error('giamgia')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="quantity" class="control-label">Số lượng <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input id="quantity" name="quantity" class="form-control" type="number"
                                            required />
                                        @error('quantity')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="status" class="control-label">Trạng thái <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <select id="status" name="status" class="form-control" required>
                                            <option value="0" selected>Chưa kích hoạt</option>
                                            <option value="1">Kích hoạt</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="numColors">Số màu muốn thêm <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <div class="d-flex">
                                            <input type="number" id="numColors" class="w-75 form-control" required />
                                            <button type="button" class="btn btn-secondary w-25"
                                                onclick="addColors()">Thêm</button>
                                        </div>
                                        <div id="colorContainer"></div>
                                        @error('colors')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="numImages">Số lượng ảnh <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <div class="d-flex">
                                            <input type="number" id="numImages" class="w-75 form-control" required />
                                            <button type="button" class="btn btn-secondary w-25"
                                                onclick="addImages()">Thêm</button>
                                        </div>
                                        <div id="imageContainer"></div>
                                        @error('images')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-floating col-md-12">
                                        <textarea class="form-control" id="motachitiet" name="motachitiet" placeholder="Leave a comment here"
                                            style="height: 200px"></textarea>
                                        <label for="motachitiet">Mô tả chi tiết sản phẩm</label>
                                        @error('motachitiet')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-warning" type="submit">Lưu</button>
                                        <a href="{{ route('products.index') }}" class="btn btn-danger">Hủy thay đổi</a>
                                    </div>
                                </form>
                                @if (session('success'))
                                    <div class="alert alert-success mt-2">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function addColors() {
            var numColors = document.getElementById('numColors').value;
            var container = document.getElementById('colorContainer');
            container.innerHTML = '';
            for (var i = 0; i < numColors; i++) {
                var input = document.createElement('input');
                input.type = 'text';
                input.name = 'colors[]';
                input.placeholder = 'Màu ' + (i + 1);
                input.classList.add('form-control', 'mb-2');
                container.appendChild(input);
            }
        }

        function addImages() {
            var numImages = document.getElementById('numImages').value;
            var container = document.getElementById('imageContainer');
            container.innerHTML = '';
            for (var i = 0; i < numImages; i++) {
                var input = document.createElement('input');
                input.type = 'file';
                input.name = 'images[]';
                input.classList.add('form-control', 'mb-2');
                input.accept = 'image/*';
                container.appendChild(input);
            }
        }
    </script>
@endsection
