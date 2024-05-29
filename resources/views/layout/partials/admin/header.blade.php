<nav class="sb-topnav navbar navbar-expand navbar-dark shadow text-bg-light" style="background-color: rgb(13, 30, 54);">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 text-dark" href="index.html">Start Bootstrap</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 ms-2 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="text-dark fas fa-bars"></i>
    </button>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="search">
            <span class="input-group-append">

                <!-- Ẩn các trường lọc hiện tại trong form này -->
                <input type="hidden" name="catalog" value="{{ request('catalog') }}">
                <input type="hidden" name="sortBy" value="{{ request('sortBy') }}">

                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill" type="button">
                    <!-- <i class="fa fa-search"></i> -->
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" style="background-color: rgb(11, 28, 52);"
            id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <!-- <div class="text-center mt-4">
                <img class="w-25 img-thumbnail rounded-pill"
                    src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png"
                    alt="">
                <p class="mt-3">xin chào Toàn</p>
            </div> -->

                <div class="nav">
                    <div class="sb-sidenav-menu-heading text-white opacity-75">Trang chủ</div>
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading text-white opacity-75">Sản phẩm</div>
                    <a class="nav-link" href="{{ route('products.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Danh sách sản phẩm
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Thao tác sản phẩm
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('products.create') }}">Thêm sản phẩm</a>
                            {{-- <a class="nav-link" href="layout-static.html">Xóa sản phẩm</a> --}}
                        </nav>
                    </div>


                    <!-- CATEGORY  -->
                    <div class="sb-sidenav-menu-heading text-white opacity-75">Danh mục</div>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Danh sách danh mục
                    </a>
                    <!-- collapse 2  -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Thao tác danh mục
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseCategory" aria-labelledby="headingTwo"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="layout-static.html">Thêm danh mục</a>
                            <a class="nav-link" href="layout-static.html">Sửa danh mục</a>
                        </nav>
                    </div>
                    <!-- End collapse 2  -->



                    <!-- CATEGORY  -->
                    <div class="sb-sidenav-menu-heading text-white opacity-75">Bài viết</div>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Danh sách Bài viết
                    </a>
                    <!-- collapse 2  -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                        data-bs-target="#collapseNews" aria-expanded="false" aria-controls="collapseNews">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Thao tác bài viết
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseNews" aria-labelledby="headingTwo"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="layout-static.html">Thêm bài viết</a>
                            <a class="nav-link" href="layout-static.html">Sửa bài viết</a>
                        </nav>
                    </div>
                    <!-- End collapse 3  -->
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
