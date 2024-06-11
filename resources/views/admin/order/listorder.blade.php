@extends('layout.adminlayout')
@section('content')
    {{-- @php
        $currentPage = $orders->currentPage();
        $perPage = $orders->perPage();
    @endphp --}}
    <div class="container-fluid px-2">
        <div class="p-3 rounded border-0 my-3 shadow-lg">
            <h4 class="">Danh sách đơn hàng</h4>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-decoration-none fw-semibold text-secondary" href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Đơn hàng</li>
            </ol>
        </div>


        <div class="border-0 shadow-lg card mb-4">
            <div class="card-body">

                {{-- <form action="{{ route('products.index') }}" method="GET" class="datatable-top border-bottom">
                    <label>
                        <select name="sortBy" class="form-select rounded-5" onchange="this.form.submit()">
                            <option value="" selected>Lọc theo giá</option>
                            <option value="">Tất cả giá</option>
                            <option value="gia" {{ request('sortBy') == 'gia' ? 'selected' : '' }}>Giá cao -> thấp
                            </option>
                            <option value="-gia" {{ request('sortBy') == '-gia' ? 'selected' : '' }}>Giá thấp -> cao
                            </option>
                        </select>
                    </label>
                    @if (request('search'))
                        <label class="ms-3">
                            Kết quả tìm kiếm với từ khóa:
                            <strong>{{ request('search') }}</strong>
                            <a href="{{ route('products.index') }}" class="ms-2 btn btn-warning btn-sm">Bỏ tìm kiếm</a>
                        </label>
                    @endif
                    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <input name="search" class="form-control border-end-0 border rounded-pill" type="search"
                                placeholder="Tìm tên sản phẩm" value="{{ request('search') }}">
                            <span class="input-group-append">

                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill"
                                    type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                </form> --}}
                <div class="table-responsive">
                    <table class="table text-center align-middle table-striped">
                        <thead>
                            <tr class="col-12">
                                <th scope="col-1">STT</th>
                                <th scope="col-2">Mã đơn hàng</th>
                                <th scope="col-1">Tên </th>
                                <th scope="col-1">Hình</th>
                                <th scope="col-2">
                                    Giá
                                </th>
                                <th scope="col-1">
                                    Số lượng
                                </th>

                                <th scope="col-2">Trang thái</th>
                                <th scope="col-2">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $index => $order)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $order->madh }}</td>
                                    <td>{{ $order->ten }}</td>
                                    <td class="col-1">
                                        <img style="width: 70px" class="img-fluid object-fit-cover"
                                            src="{{ asset($order->hinh) }}" alt="" />
                                    </td>
                                    <td>{{ number_format($order->gia, 0, ',', ',') }}đ</td>
                                    <td>{{ $order->soluong }}</td>
                                    <td>
                                        @switch($order->status)
                                            @case(0)
                                                <span class="fw-bold">Chờ duyệt</span>
                                            @break

                                            @case(1)
                                                <span class="text-warning fw-bold">Đang vận chuyển</span>
                                            @break

                                            @case(2)
                                                <span class="text-primary fw-bold">Đang giao</span>
                                            @break

                                            @case(3)
                                                <span class="text-success fw-bold">Hoàn thành</span>
                                            @break

                                            @case(4)
                                                <span class="text-danger fw-bold">Đã hủy</span>
                                            @break
                                        @endswitch
                                    </td>
                                    <td>
                                        <form action="{{ route('orders.updateStatus', $order->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary"
                                                {{ in_array($order->status, [3, 4]) ? 'disabled' : '' }}>
                                                Chuyển trạng thái
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>

                    </table>
                    {{-- {{ $orders->links('vendor.pagination.custom') }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- DataTales Example -->
