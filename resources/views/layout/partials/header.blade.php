<div class="container" style="margin-bottom: 75px">
    <nav style="height: 75px" class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">
            <a class="col-4 col-sm-3 col-lg-2 navbar-brand me-auto" href="{{ route('home') }}"><img
                    class="w-75 img-fluid object-fit-contain"
                    src="https://e-tech.monamedia.net/wp-content/uploads/2024/03/mona-2-e1709794932514.png"
                    alt="" /></a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header pb-0">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <a href="#!home"><img class="img-fluid object-fit-contain" style="width: 50%"
                                src="https://e-tech.monamedia.net/wp-content/uploads/2024/03/mona-2-e1709794932514.png"
                                alt="" /></a>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="fs-6 nav-link mx-lg-2" href="{{ route('home') }}">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="fs-6 nav-link mx-lg-2" href="{{ route('home') }}">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="fs-6 nav-link dropdown-toggle" href="{{ route('product') }}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"> Sản phẩm </a>
                            <ul class="dropdown-menu">
                                <li><a class="fs-6 dropdown-item" href="{{ route('product') }}">Tất cả sản phẩm</a></li>

                                @foreach ($catalogs as $catalog)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('product', ['catalog' => $catalog->id]) }}">{{ $catalog->ten_dm }}</a>
                                    </li>
                                @endforeach
                                {{-- <li><a class="dropdown-item" href="#">Máy tính</a></li>
                                <li><a class="dropdown-item" href="#">Camera</a></li>
                                <li><a class="dropdown-item" href="#">Điện thoại</a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="fs-6 nav-link mx-lg-2" href="{{ route('news') }}">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="fs-6 nav-link mx-lg-2" href="{{ route('contact') }}">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <button type="button" class="nav-link p-3 btn" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fs-4 text-black fa-solid fa-magnifying-glass"></i>
                    </button>
                </li>

                {{-- Sau khi đăng nhập
          <li class="nav-item" ng-if="nameEmailUser">
            <div class="dropdown">
              <a class="nav-link p-3" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <span style="cursor: pointer; font-weight: 500; margin-right: 10px" class="fs-6">Thanh toàn</span>
                <i class="fs-4 text-black fa-solid fa-user"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#!myaccount/s" class="dropdown-item">Hồ sơ cá nhân</a></li>
                <li><a href="#!order/dsa" class="dropdown-item">Đơn hàng</a></li>
                <li ng-click="logout()"><span class="dropdown-item">Thoát</span></li>
              </ul>
            </div>
          </li> --}}

                <li class="nav-item" ng-if="!nameEmailUser">
                    <div class="dropdown">
                        {{-- check exist user login  --}}
                        @if (Auth::check())
                            <a class="nav-link p-3" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 text-black fa-solid fa-user"></i>
                                <span class="fs-6">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Hồ sơ</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Đơn hàng</a></li>
                                <form action="{{ route('logout.submit') }}" method="POST">
                                    @csrf
                                    <li><button type="submit" class="dropdown-item">Đăng xuất</button></li>
                                </form>
                            </ul>
                        @else
                            <a class="nav-link p-3" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 text-black fa-solid fa-user"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a></li>
                            </ul>
                        @endif
                        {{-- <a class="nav-link p-3" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-4 text-black fa-solid fa-user"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a></li>
                        </ul> --}}
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link p-3 position-relative" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#Cart_offcanvasRightt" aria-controls="Cart_offcanvasRightt">
                        <i class="fa-fade">
                            <i class="fs-4 text-black fa-solid fa-cart-plus fa-shake"></i>
                            <span
                                class="position-absolute top-75 start-100 translate-middle badge rounded-pill bg-warning">
                                0+
                            </span>
                        </i>
                    </a>

                    <!-- <a class="nav-link p-3 position-relative" href="#">
                <i class="fa-fade">
                  <i class="fs-4 text-black fa-solid fa-cart-plus fa-shake"></i>
                  <span class="position-absolute top-75 start-100 translate-middle badge rounded-pill bg-warning"> 0+ </span>
                </i>
              </a> -->

                </li>
            </ul>
            <button class="navbar-toggler btn-nav" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- cart navbar Hiddeneeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="Cart_offcanvasRightt"
        aria-labelledby="offcanvasRightLabel">
        <div style="border-bottom: 2px solid rgb(238, 238, 238)" class="offcanvas-header">
            <h6 class="offcanvas-title" id="offcanvasRightLabel">Giỏ hàng
                (<strong>0 sản phẩm</strong>)
            </h6>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="card mb-3 border-bottom border-0 rounded-0" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-4" style="padding: 16px">
                        <img style="height: 100px" src="{{ asset('clients/images/prod_2.png') }}"
                            class="img-fluid object-fit-cover" alt="..." />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden"
                                class="card-title">Meta Quest 2 128 GB All-in-One VR System Blazing-fast processor.
                            </h5>
                            <p class="card-text">Đơn giá 925,000 ₫.</p>
                            <div class="quantity">
                                <input type="button" value="-" class="minus btn rounded-0 m-0"
                                    style="background-color: #e3e3e3" />
                                <input class="btn btn-warning rounded-0 px-1" type="number" min="0"
                                    max="500" value="1" value="" />
                                <input type="button" value="+" class="plus m-0 btn rounded-0"
                                    style="background-color: #e3e3e3" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="total">
                <span class="fs-6 total-title fs-5">Tổng phụ : </span>
                <span class="total-Price-amount amount fs-6 fw-semibold"> 150.000đ<span
                        class="total-Price-currencySymbol">₫</span> </span>
            </div>
            <div class="row g-3 mt-2 mini-cart">
                <div class="col-6">
                    <a href="#"
                        class="w-100 btn mini-cart__checkout btn-dark text-white shadow border-0 rounded p-2"
                        style="border: 2px solid black">Mua</a>
                </div>
                <div class="col-6">
                    <a href="{{ route('cart') }}"
                        class="fs-6 w-100 btn mini-cart__viewcart btn-danger border-0 shadow rounded p-2"
                        style="border: 2px solid black">Giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Navbar Cartttttttttttttttttttttttttttttttttttttttttttttttttttttttt  -->
    <!-- Modal SEARCHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tìm kiếm</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- input search  -->
                    <form action="{{ route('product') }}" method="GET" class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" name="search" value="{{ request('search') }}"
                            class="form-control" />
                        <!-- <input type="text" class="form-control border-3" ng-model="keyword" placeholder="Tìm kiếm" /> -->
                        <input type="hidden" name="sortBy" value="{{ request('sortBy') }}">
                        <input type="hidden" name="catalog" value="{{ request('catalog') }}">

                        <button type="submit" class="btn btn-warning" value="Tìm"
                            data-bs-dismiss="modal">Lọc</button>

                        {{-- <input type="submit" class="btn btn-warning" value="Tìm" data-bs-dismiss="modal" /> --}}
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL SEARCHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH -->
</div>
