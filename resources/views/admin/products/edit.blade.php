@extends('layout.adminlayout')
@section('content')
    @if (session('successUpdateProduct'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-success">{{ session('successUpdateProduct') }}</div>
        </div>
    @endif
    <div class="container-fluid px-2">
        <div class="p-3 rounded border-0 my-3 shadow">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none fw-semibold text-secondary"
                        href="{{ route('products.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Chỉnh sửa sản phẩm</li>
                <li class="breadcrumb-item active">{{ $product->ten }}</li>
            </ol>
        </div>

        <div class="border-0 shadow card mb-4">
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
                    class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="form-group col-md-3">
                        <label for="danhmucsp" class="control-label">Danh mục<span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <select name="catalog_id" class="form-control" required>
                            <option value="">--Chọn danh mục--</option>
                            @foreach ($catalogs as $catalog)
                                <option value="{{ $catalog->id }}" @if ($product->catalog_id == $catalog->id) selected @endif>
                                    {{ $catalog->ten_dm }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="tensp" class="control-label">Tên sản phẩm <span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <input type="text" name="ten" class="form-control" value="{{ $product->ten }}" required />
                    </div>

                    <div class="form-group col-md-3">
                        <label for="giabansp" class="control-label">Giá chính<span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <input id="giabansp" name="gia" class="form-control" type="number" value="{{ $product->gia }}"
                            required />
                    </div>

                    <div class="form-group col-md-3">
                        <label for="giabansp" class="control-label">Giá giảm</label>
                        <input id="giabansp" name="giamgia" class="form-control" type="number"
                            value="{{ $product->giamgia }}" />
                    </div>

                    <div class="form-group col-md-3">
                        <label for="giabansp" class="control-label">Số lượng <span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <input id="giabansp" name="quantity" class="form-control" type="number"
                            value="{{ $product->quantity }}" required />
                    </div>

                    <div class="form-group col-md-3">
                        <label for="status" class="control-label">Trạng thái <span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <select name="status" class="form-control" required>
                            <option value="0" @if ($product->status == 0) selected @endif>Chưa kích hoạt</option>
                            <option value="1" @if ($product->status == 1) selected @endif>Kích hoạt</option>
                        </select>
                    </div>

                    <!-- Màu sắc sản phẩm hiện tại -->
                    <div class="form-group col-md-12">
                        <label>Các màu hiện tại</label>
                        <div id="colorsContainer">
                            @foreach ($product->colors as $color)
                                <div class="d-flex mb-2">
                                    <input type="text" name="colors[]" class="form-control me-2"
                                        value="{{ $color->color }}" />
                                    <button type="button" class="btn btn-danger" onclick="removeColor(this)">Xóa</button>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Số màu mới muốn thêm</label>
                        <div class="d-flex">
                            <input type="number" class="w-75 form-control" id="numColors" value="0" />
                            <button type="button" class="btn btn-secondary w-25" onclick="addColors()">Thêm</button>
                        </div>
                    </div>

                    <div id="newColorsContainer" class="form-group col-md-12"></div>

                    <!-- Hình ảnh sản phẩm hiện tại -->
                    <div class="form-group col-md-12">
                        <label>Các hình ảnh hiện tại</label>
                        <div id="imagesContainer" class="row">
                            @foreach ($product->images as $image)
                                <div class="col-md-3 d-flex flex-column align-items-center mb-3">
                                    <img src="{{ asset('storage/' . $image->url) }}" class="img-thumbnail mb-2"
                                        alt="Product Image">
                                    <button type="button" class="btn btn-danger"
                                        onclick="removeImage(this, '{{ $image->url }}')">Xóa</button>
                                    <input type="hidden" name="existing_images[]" value="{{ $image->url }}">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label>Số ảnh mới muốn thêm</label>
                        <div class="d-flex">
                            <input type="number" class="w-75 form-control" id="numImages" value="0" />
                            <button type="button" class="btn btn-secondary w-25" onclick="addImages()">Thêm</button>
                        </div>
                    </div>

                    <div id="newImagesContainer" class="form-group col-md-12"></div>

                    <div class="form-floating col-md-12">
                        <textarea class="form-control" name="motachitiet" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 200px">{{ $product->motachitiet }}</textarea>
                        <label for="floatingTextarea2">Mô tả chi tiết sản phẩm</label>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-warning" type="submit">Lưu</button>
                        <a href="{{ route('products.index') }}" class="btn btn-danger">Hủy thay đổi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function addColors() {
            const numColors = document.getElementById('numColors').value;
            const container = document.getElementById('newColorsContainer');
            container.innerHTML = '';
            for (let i = 0; i < numColors; i++) {
                const colorInput = document.createElement('div');
                colorInput.classList.add('d-flex', 'mb-2');
                colorInput.innerHTML = `<input type="text" name="new_colors[]" class="form-control me-2" required />
                                <button type="button" class="btn btn-danger" onclick="removeColor(this)">Xóa</button>`;
                container.appendChild(colorInput);
            }
        }

        function removeColor(element) {
            element.parentNode.remove();
        }

        function addImages() {
            const numImages = document.getElementById('numImages').value;
            const container = document.getElementById('newImagesContainer');
            container.innerHTML = '';
            for (let i = 0; i < numImages; i++) {
                const imageInput = document.createElement('div');
                imageInput.classList.add('mb-2');
                imageInput.innerHTML =
                    `<input type="file" name="images[]" class="image-input form-control" accept="image/*" required />`;
                container.appendChild(imageInput);
            }
        }

        function removeImage(element, imageUrl) {
            const container = document.getElementById('imagesContainer');
            const deleteImagesInput = document.createElement('input');
            deleteImagesInput.type = 'hidden';
            deleteImagesInput.name = 'delete_images[]';
            deleteImagesInput.value = imageUrl;
            container.appendChild(deleteImagesInput);
            element.closest('.col-md-3').remove();
        }

        function previewImage(input) {
            const file = input.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('img-thumbnail', 'mt-2');
                const nextSibling = input.nextElementSibling;
                if (nextSibling && nextSibling.tagName === 'IMG') {
                    nextSibling.src = e.target.result;
                } else {
                    input.parentNode.appendChild(img);
                }
            }
            reader.readAsDataURL(file);
        }
    </script>
@endsection
