@extends('layout.adminlayout')
@section('content')
    @if (session('success'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-success">{{ session('success') }}</div>
        </div>
    @endif
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
                                <form action="{{ route('catagories.store') }}" method="POST" enctype="multipart/form-data"
                                    class="row g-3 needs-validation" novalidate>
                                    @csrf
                                    <div class="form-group col-md-3">
                                        <label for="ten_dm" class="control-label">Tên danh mục<span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input type="text" id="ten_dm" name="ten_dm" class="form-control" required />
                                        @error('ten_dm')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="stt" class="control-label">Thứ tự ưu tiên <span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <input type="text" id="stt" name="stt" class="form-control" required />
                                        @error('stt')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="sethome" class="control-label">Ẩn hiện<span
                                                style="color: red; font-weight: bold">(*)</span></label>
                                        <select class="form-control" name="sethome" id="">
                                            <option value="0">Ẩn danh mục
                                            </option>
                                            <option selected value="1">Hiện danh mục
                                            </option>
                                        </select>
                                        @error('sethome')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-warning" type="submit">Thêm</button>
                                        <a href="{{ route('catagories.index') }}" class="btn btn-danger">Hủy thay đổi</a>
                                    </div>
                                </form>

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
