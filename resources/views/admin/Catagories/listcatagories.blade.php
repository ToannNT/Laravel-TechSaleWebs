@extends('layout.adminlayout')
@section('content')
    @if (session('successDeleteUser'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-success">{{ session('successDeleteUser') }}</div>
        </div>
    @endif
    <div class="container-fluid px-2">
        <div class="p-3 rounded border-0 my-3 shadow-lg">
            <h4 class="">Danh sách người dùng</h4>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none fw-semibold text-secondary" href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Người dùng</li>
            </ol>
        </div>


        <div class="border-0 shadow-lg card mb-4">
            <div class="card-body">

                <form action="#" method="GET" class="datatable-top border-bottom">
                    <label>
                        <select name="role" class="form-select rounded-5" onchange="this.form.submit()">
                            <option value="" selected>Lọc theo quyền</option>
                            <option value="">Tất cả</option>
                            <option value="0" {{ Request::get('role') == '0' ? 'selected' : '' }}>Người dùng</option>
                            <option value="1" {{ Request::get('role') == '1' ? 'selected' : '' }}>Quản trị
                            <option value="2" {{ Request::get('role') == '2' ? 'selected' : '' }}>Chặn
                            </option>
                        </select>
                    </label>
                    @if (request('search'))
                        <label class="ms-3">
                            Kết quả tìm kiếm với từ khóa:
                            <strong>{{ request('search') }}</strong>
                            {{-- <button class="ms-2 btn btn-warning btn-sm">Bỏ tìm kiếm</button> --}}
                            <a href="#" class="ms-2 btn btn-warning btn-sm">Bỏ tìm kiếm</a>
                        </label>
                    @endif
                    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <input name="search" class="form-control border-end-0 border rounded-pill" type="search"
                                placeholder="Nhập Email để tìm" value="{{ request('search') }}">
                            <span class="input-group-append">

                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill"
                                    type="submit">
                                    <!-- <i class="fa fa-search"></i> -->
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                </form>
                <div class="table-responsive">
                    <table class="table text-center align-middle table-striped">
                        <thead>
                            <tr class="col-12">
                                <th scope="">Tên danh mục</th>
                                <th scope="">Thứ tự ưu tiên</th>
                                <th scope="">Ẩn/Hiện</th>
                                <th scope="">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listCatagories as $index => $catagory)
                                <tr class="col-12">
                                    <td class=" fw-medium">
                                        <p>{{ $catagory->ten_dm }}</p>
                                    </td>

                                    <td class="">
                                        {{ $catagory->stt }}
                                    </td>

                                    {{-- <td class="col-1">
                                        <img style="width: 70px" class="img-fluid object-fit-cover"
                                            src="{{ $product->hinh }}" alt="" />
                                    </td> --}}
                                    <td class="">
                                        {{ $catagory->sethome }}
                                    </td>
                                    <td class="col-2">
                                        <div class="text-center">
                                            <a class="text-decoration-none btn btn-warning rounded-2"
                                                href="{{ route('catagories.edit', $catagory->id) }}">Sửa</a>
                                            <form action="{{ route('catagories.destroy', $catagory->id) }}"
                                                style="display:inline;" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Bạn có chắc chắn muốn danh mục này ?')"
                                                    class="text-decoration-none btn btn-danger rounded-2 ">Xóa</button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            {{-- <tr class="col-12">
                                <td class="col-1 fw-medium">1</td>
                                <td class="col-3 fw-medium">
                                    <p
                                        style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden">
                                        iPhone 15 Pro 256GB Blue Titanium (Singapore)</p>
                                </td>
                                <td class="col-1">
                                    <img style="width: 70px" class="img-fluid object-fit-cover"
                                        src="../../../../images/prod_3.png" alt="" />
                                </td>
                                <td class="col-2">32,000,000 ₫</td>
                                <td class="col-1 fw-medium">10</td>
                                <td class="col-1 fw-medium">Điện thoại</td>
                                <td class="col-1 fw-medium">
                                    <input class="btn btn-success" value="Đang bật" type="submit">
                                </td>
                                <td class="col-2">
                                    <div class="text-center">
                                        <a class="text-decoration-none btn btn-warning rounded-2" href="#">Sửa</a>
                                        <a class="text-decoration-none btn btn-danger rounded-2 " href="#">Xóa</a>
                                    </div>
                                </td>
                            </tr> --}}

                        </tbody>

                    </table>
                    {{-- {{ $listAllProducts->links('vendor.pagination.custom') }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- DataTales Example -->
