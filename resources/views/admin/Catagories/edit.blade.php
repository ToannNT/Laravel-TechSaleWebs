@extends('layout.adminlayout')
@section('content')
    <div class="container-fluid px-2">
        <div class="p-3 rounded border-0 my-3 shadow">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none fw-semibold text-secondary"
                        href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Chỉnh sửa tài khoản</li>
                <li class="breadcrumb-item active">{{ $catagory->ten_dm }}</li>
            </ol>
        </div>

        <div class="border-0 shadow card mb-4">
            <div class="card-body">
                <form action="{{ route('catagories.update', $catagory->id) }}" method="POST" enctype="multipart/form-data"
                    class="row g-3 ">
                    @csrf
                    @method('PUT')

                    <div class="form-group col-md-3">
                        <label class="control-label">Tên danh mục<span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <input type="text" name="ten_dm" class="form-control" value="{{ $catagory->ten_dm }}" />
                        @error('ten_dm')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Thứ tự ưu tiên<span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <input type="text" name="stt" class="form-control" value="{{ $catagory->stt }}" />
                        @error('stt')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Ẩn/Hiện<span style="color: red; font-weight: bold">(*)</span></label>
                        <select class="form-control" name="sethome" id="">
                            <option value="0" {{ $catagory->sethome == 0 ? 'selected' : '' }}>Ẩn</option>
                            <option value="1" {{ $catagory->sethome == 1 ? 'selected' : '' }}>Hiện</option>
                        </select>
                        @error('sethome')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button class="btn btn-warning" type="submit">Lưu</button>
                        <a href="{{ route('catagories.index') }}" class="btn btn-danger">Hủy thay đổi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
