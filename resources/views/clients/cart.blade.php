{{-- @extends('layout.clientlayout') --}}
@extends('layout.clientlayout')

@section('content')
    @if (session('success'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-success">{{ session('success') }}</div>
        </div>
    @endif
    @if (session('error'))
        <div class="position-fixed top-20 end-0 p-3 " style="z-index: 10000">
            <div id="success-message" class="alert alert-danger">{{ session('error') }}</div>
        </div>
    @endif
    <main>
        <!-- Navigation -->
        <nav class="d-none d-lg-block border-top border-bottom">
            <div class="container border-primary-subtle">
                <div class="row">
                    <div class="col-md-10">
                        <div class="navbar navbar-expand-lg bg-white">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#!product/all">
                                        <i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i>
                                        Phổ biến</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#!product/1">
                                        <i class="fa-solid fa-mobile-screen-button" aria-hidden="true"></i>
                                        Điện thoại</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-laptop" aria-hidden="true"></i>
                                        Máy tính</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-hat-wizard" aria-hidden="true"></i>
                                        Phụ kiện</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-headphones" aria-hidden="true"></i>
                                        Tai nghe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-regular fa-clock" aria-hidden="true"></i>
                                        Smart Watch</a>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-camera" aria-hidden="true"></i>
                                        Web Cam</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-end">
                        <div class="navbar bg-white">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="fs-6 nav-link" href="#">
                                        <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                                        0313728397
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section class="banner_introduce bg-secondary-subtle p-3">
            <div class="container">Trang chủ / Cart</div>
        </section>

        <div class="products-card container mt-4">
            <div class="row g-4">
                <div class="products-card__list col-md-8">
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <input type="checkbox" class="form-check-input">
                                </th>
                                <th scope="col">Hình</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Màu</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalProductCart = 0;
                            @endphp
                            @foreach ($listAllProductCart as $item)
                                <tr data-id="{{ $item->id }}">
                                    <td>
                                        {{-- <input type="checkbox" class="form-check-input"
                                            {{ $item->status == 1 ? 'checked' : '' }} /> --}}
                                        <input type="checkbox" class="form-check-input status-checkbox"
                                            data-id="{{ $item->id }}" {{ $item->status == 1 ? 'checked' : '' }} />

                                    </td>
                                    <td>
                                        <img style="width: 70px" class="img-fluid object-fit-cover"
                                            src="{{ asset($item->hinh) }}" alt="{{ $item->ten }}" />
                                    </td>
                                    <td class="fw-medium">{{ $item->ten }}</td>
                                    <td class="fw-medium">{{ $item->mau }}</td>
                                    <td style="color: rgb(255, 149, 21)" class="fw-bold">
                                        {{ number_format($item->gia, 0, ',', '.') }} ₫</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center quantity-control"
                                            data-id="{{ $item->id }}">
                                            <div class="">
                                                <button class="form-control fw-medium quantity-decrease"
                                                    type="button">-</button>
                                            </div>
                                            <div class="">
                                                {{-- <button
                                                    class="form-control text-center px-3 quantity-input">{{ $item->soluong }}</button> --}}
                                                <input class="form-control text-center quantity-input" type="button"
                                                    value="{{ $item->soluong }}" min="1" />

                                            </div>
                                            <div class="">
                                                <button class="form-control fw-medium quantity-increase"
                                                    type="button">+</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span style="cursor: pointer"
                                            class="text-decoration-none text-dark fw-medium delete-item"
                                            data-id="{{ $item->id }}">Xóa</span>

                                    </td>
                                </tr>
                                @php
                                    if ($item->status == 1) {
                                        $totalProductCart += $item->gia * $item->soluong;
                                    }
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="products-card-right col-md-4">
                    <div class="card rounded border-0" style="background-color: rgb(246, 246, 246)">
                        <div class="card-body">
                            <h4 class="card-title fw-medium mb-4">Tổng Số Giỏ Hàng</h4>
                            <div class="row g-1 mb-4">
                                <div class="col-8">
                                    <input class="form-control rounded" type="text" placeholder="Nhập mã giảm giá" />
                                </div>
                                <div class="col-4">
                                    <button class="col-4 form-control rounded text-bg-danger" type="submit">Áp
                                        dụng</button>
                                </div>
                            </div>
                            <div class="row mb-4 border-bottom pb-4">
                                <div class="col-6">Tổng phụ</div>
                                <div class="col-6 text-end" id="totalSub">
                                    {{ number_format($totalProductCart, 0, ',', '.') }} ₫</div>
                            </div>
                            <div class="row mb-4 border-bottom pb-4">
                                <div class="col-6">Voucher</div>
                                <div class="col-6 text-end">-0₫</div>
                            </div>
                            <div class="row fw-bold mb-4">
                                <div class="col-6">Tổng</div>
                                <div class="col-6 text-end" id="total">
                                    {{ number_format($totalProductCart, 0, ',', '.') }} ₫</div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{ route('payment') }}" style="background-color: rgb(255, 149, 21)"
                                        class="w-100 btn text-white rounded">Tiến hành thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const totalSubElement = document.getElementById('totalSub');
            const totalElement = document.getElementById('total');

            function updateTotal(totalProductCart, ) {
                totalElement.textContent = new Intl.NumberFormat('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                }).format(totalProductCart);

                totalSubElement.textContent = new Intl.NumberFormat('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                }).format(totalProductCart);
            }



            // Cập nhật trạng thái sản phẩm
            document.querySelectorAll('.status-checkbox').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    let status = this.checked ? 1 : 0;
                    let id = this.getAttribute('data-id');

                    fetch('{{ route('cart.update-status') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            id: id,
                            status: status
                        })
                    }).then(response => response.json()).then(data => {
                        if (data.success) {
                            console.log('Status updated successfully');
                            updateTotal(data.totalProductCart);

                        }
                    });
                });
            });

            // Tăng/giảm số lượng sản phẩm
            document.querySelectorAll('.quantity-control').forEach(function(control) {
                let id = control.getAttribute('data-id');
                let quantityInput = control.querySelector('.quantity-input');

                control.querySelector('.quantity-increase').addEventListener('click', function() {
                    let quantity = parseInt(quantityInput.value) + 1;
                    updateQuantity(id, quantity);
                });

                control.querySelector('.quantity-decrease').addEventListener('click', function() {
                    let quantity = parseInt(quantityInput.value) - 1;
                    if (quantity > 0) {
                        updateQuantity(id, quantity);
                    } else {
                        if (confirm('Bạn có muốn xóa sản phẩm này không?')) {
                            deleteItem(id);
                        }
                    }


                });

                quantityInput.addEventListener('change', function() {
                    let quantity = parseInt(quantityInput.value);
                    if (quantity > 0) {
                        updateQuantity(id, quantity);
                    } else {
                        if (confirm('Bạn có muốn xóa sản phẩm này không?')) {
                            deleteItem(id);
                        }
                    }
                });

                function updateQuantity(id, quantity) {
                    fetch('{{ route('cart.update-quantity') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            id: id,
                            soluong: quantity
                        })
                    }).then(response => response.json()).then(data => {
                        if (data.success) {
                            console.log('Quantity updated successfully');
                            quantityInput.value = quantity;
                            updateTotal(data.totalProductCart);
                            // location.reload(); // Tải lại trang để cập nhật tổng tiền

                        }
                    });
                }

                function deleteItem(id) {
                    fetch('{{ route('cart.delete-item') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            id: id
                        })
                    }).then(response => response.json()).then(data => {
                        if (data.success) {
                            console.log('Item deleted successfully');
                            document.querySelector(`tr[data-id="${id}"]`).remove();
                            updateTotal(data.totalProductCart);

                            // location.reload(); // Tải lại trang để cập nhật tổng tiền
                        }
                    });
                }

                // Xóa sản phẩm
                document.querySelectorAll('.delete-item').forEach(function(deleteButton) {
                    deleteButton.addEventListener('click', function() {
                        let id = this.getAttribute('data-id');
                        if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')) {
                            deleteItem(id);
                        }
                    });
                    //end delete
                    function deleteItem(id) {
                        fetch('{{ route('cart.delete-item') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                id: id
                            })
                        }).then(response => response.json()).then(data => {
                            if (data.success) {
                                console.log('Item deleted successfully');
                                document.querySelector(`tr[data-id="${id}"]`).remove();
                                updateTotal(data.totalProductCart);
                                location.reload(); // Tải lại trang để cập nhật tổng tiền

                            }
                        });
                    }
                    //end delete item
                });
            });
        });
    </script>
@endsection
