@extends('layout.adminlayout')
@section('content')
    <div class="container-fluid px-2">
        <div class="p-3 rounded border-0 my-3 shadow-lg">
            <h4 class="">Danh sách sản phẩm</h4>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none fw-semibold text-secondary" href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
        </div>


        <div class="border-0 shadow-lg card mb-4">
            <div class="card-body">
                <form action="{{ route('admin.listproduct') }}" method="GET" class="datatable-top border-bottom">
                    <label>
                        <select name="sortBy" class="form-select rounded-5" onchange="this.form.submit()">
                            <option value="" selected>Lọc theo giá</option>
                            <option value="">Tất cả giá</option>
                            <option value="gia" {{ request('sortBy') == 'gia' ? 'selected' : '' }}>Giá cao -> thấp
                            </option>
                            <option value="gia" {{ request('sortBy') == '-gia' ? 'selected' : '' }}>Giá thấp -> cao
                            </option>
                        </select>
                    </label>
                    <label class="form">
                        <select name="catalog" class="form-select rounded-5" onchange="this.form.submit()">
                            <option value="" selected>Lọc theo danh mục</option>
                            <option value="">Tất cả danh mục</option>

                            @foreach ($catagories as $catagory)
                                <option value="{{ $catagory->id }}"
                                    {{ request('catalog') == $catagory->id ? 'selected' : '' }}>
                                    {{ $catagory->ten_dm }}
                                </option>
                            @endforeach
                            {{-- <option value="2">Two</option> --}}
                            {{-- <option value="3">Three</option> --}}
                        </select>
                    </label>
                    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <input class="form-control border-end-0 border rounded-pill" type="search"
                                placeholder="Tìm theo mã sản phẩm">
                            <span class="input-group-append">

                                <!-- Ẩn các trường lọc hiện tại trong form này -->
                                <input type="hidden" name="catalog" value="{{ request('catalog') }}">
                                <input type="hidden" name="sortBy" value="{{ request('sortBy') }}">

                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill"
                                    type="button">
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
                                <th scope="col-1">STT</th>
                                <th scope="col-2">Tên</th>
                                <th scope="col-1">Hình</th>
                                <th scope="col-2">
                                    Giá
                                </th>
                                <th scope="col-1">
                                    Số lượng
                                </th>
                                <th scope="col-2">
                                    Danh mục
                                </th>
                                <th scope="col-1">Trang thái</th>
                                <th scope="col-2">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $currentPage = $listAllProducts->currentPage();
                                $perPage = $listAllProducts->perPage();
                            @endphp
                            @foreach ($listAllProducts as $index => $product)
                                <tr class="col-12">
                                    <td class="col-1 fw-medium">{{ ($currentPage - 1) * $perPage + $index + 1 }}</td>
                                    <td class="col-2 fw-medium">
                                        <p
                                            style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden">
                                            {{ $product->ten }}
                                        </p>
                                    </td>
                                    <td class="col-1">
                                        <img style="width: 70px" class="img-fluid object-fit-cover"
                                            src="{{ $product->hinh }}" alt="" />
                                    </td>
                                    <td class="col-2">

                                        @if ($product->giamgia > 0)
                                            {{ number_format($product->giamgia, 0, ',', ',') }}đ
                                        @else
                                            {{ number_format($product->gia, 0, ',', ',') }}đ
                                        @endif

                                    </td>
                                    <td class="col-1 fw-medium">{{ $product->quantity }}</td>
                                    <td class="col-2 fw-medium">{{ $product->catalog->ten_dm }}</td>
                                    <td class="col-1 fw-medium">
                                        @if ($product->status == 0)
                                            <input class="btn btn-secondary" value="Đang ẩn" type="submit">
                                        @else
                                            <input class="btn btn-success" value="Đang bật" type="submit">
                                        @endif
                                    </td>
                                    <td class="col-2">
                                        <div class="text-center">
                                            <a class="text-decoration-none btn btn-warning rounded-2" href="#">Sửa</a>
                                            <a class="text-decoration-none btn btn-danger rounded-2 " href="#">Xóa</a>
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
                    {{ $listAllProducts->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- DataTales Example -->
