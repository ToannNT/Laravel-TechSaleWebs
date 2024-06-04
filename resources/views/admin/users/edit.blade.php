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
                        href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Chỉnh sửa tài khoản</li>
                <li class="breadcrumb-item active">{{ $user->name }}</li>
            </ol>
        </div>

        <div class="border-0 shadow card mb-4">
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data"
                    class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="form-group col-md-4">
                        <label class="control-label">Tên tài khoản<span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required />
                    </div>

                    <div class="form-group col-md-4">
                        <label class="control-label">Email:<span style="color: red; font-weight: bold">(*)</span></label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}" required />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Số điện thoại:<span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <input type="number" name="phone" class="form-control" value="{{ $user->phone }}" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Địa chỉ<span style="color: red; font-weight: bold">(*)</span></label>
                        <input type="text" name="address" class="form-control" value="{{ $user->address }}" />
                    </div>

                    <div class="form-group col-md-3">
                        <label class="control-label">Ngày sinh:<span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <input type="date" name="birthdate" class="form-control" value="{{ $user->birthdate }}" />
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Giói tính:<span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <select class="form-control" name="gender" id="">
                            <option value="" {{ $user->gender == '' ? 'selected' : '' }}>Không xác định</option>
                            <option value="Nam" {{ $user->gender == 'Nam' ? 'selected' : '' }}>Nam</option>
                            <option value="Nữ" {{ $user->gender == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Trạng thái:<span
                                style="color: red; font-weight: bold">(*)</span></label>
                        <select class="form-control" name="role" id="">
                            <option value="0" {{ $user->role == 0 ? 'selected' : '' }}>Người dùng</option>
                            <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Quản trị viên</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-warning" type="submit">Lưu</button>
                        <a href="{{ route('users.index') }}" class="btn btn-danger">Hủy thay đổi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
