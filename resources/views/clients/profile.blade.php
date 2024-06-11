@extends('layout.clientlayout')
@section('tittle', 'Hồ sơ')
@section('content')
    <main>
        <!-- ... -->
        <div class="products-card container mt-4">
            @if (session('success'))
                <div style="z-index: 10000" id="success-message" class="position-fixed top-20 end-0 p-3 alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div style="z-index: 10000" id="success-message" class="position-fixed top-20 end-0 p-3 alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div style="z-index: 10000" id="success-message" class="position-fixed top-20 end-0 p-3 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form name="myForm" action="{{ route('profile.update') }}" method="post" class="row g-4"
                enctype="multipart/form-data">
                @csrf
                <div class="products-card-right col-md-3">
                    <div class="card rounded-1 border-0" style="background-color: rgb(246, 246, 246)">
                        <div class="card-body row d-flex justify-content-center">
                            <div style="width: 100px; height: 100px;" class="col-12">
                                <img style="border-radius: 5px;" class="w-100 h-100 object-fit-cover"
                                    src="{{ $user->profile_picture ? asset('images/user/' . $user->profile_picture) : asset('images/user/defaultImageUser.png') }}"
                                    alt="" />
                            </div>
                            <div class="col-12 text-center mt-3">
                                <input class="form-control form-control-sm" id="formFileSm" type="file"
                                    name="profile_picture">
                            </div>
                            <div class="col-12 text-center mt-3">
                                <h6>{{ $user->email }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="list-group mt-3">
                        <a href="{{ route('profile') }}" class="fw-semibold list-group-item list-group-item-action">
                            Hồ sơ cá nhân</a>
                        <a href="{{ route('order') }}" class="list-group-item list-group-item-action">Đơn hàng</a>
                        {{-- <a href="#!order/12" class="list-group-item list-group-item-action">Đơn hàng</a> --}}
                        {{-- <a href="#" class="list-group-item list-group-item-action">Đăng xuất</a> --}}
                        {{-- <form action="{{ route('logout.submit') }}" method="post"> --}}
                        {{-- @csrf --}}
                        <a href="#" class="list-group-item list-group-item-action">Đăng
                            xuất</a>
                        {{-- </form> --}}
                    </div>
                </div>
                <div class="products-card__list col-md-9">
                    <div name="myForm" class="row g-3">
                        <div class="col-lg-12">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" name="name" value="{{ $user->name }}" required />
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" name="phone" value="{{ $user->phone }}" />
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="birthdate" class="form-label">Ngày sinh</label>
                            <input type="date" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" name="birthdate" value="{{ $user->birthdate }}" />
                            @error('birthdate')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="gender" class="form-label">Giới tính</label>
                            <select class="form-select p-2" aria-label="Default select example" name="gender">
                                <option value="" {{ $user->gender == '' ? 'selected' : '' }}>Chọn giới tính</option>
                                <option value="Nam" {{ $user->gender == 'Nam' ? 'selected' : '' }}>Nam</option>
                                <option value="Nữ" {{ $user->gender == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                            </select>
                            @error('gender')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" name="email" value="{{ $user->email }}" required />
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <label for="address" class="form-label">Địa chỉ giao hàng</label>
                            <input type="text" class="form-control p-2 rounded border-2"
                                style="padding: 12px 0px 12px 10px" name="address" value="{{ $user->address }}" />
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="">
                            <button type="submit" class="w-auto btn btn-danger">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

@endsection
