<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>List Product - SB Admin</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="{{ asset('admin/css/styles.css') }}">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <section class="vh-100" style="background: linear-gradient(#fffbc7, #ef7d6b);">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <form action="{{ route('admin.login.submit') }}" method="POST">
                                            @csrf
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                                {{-- <span class="h1 fw-bold mb-0">Logo</span> --}}
                                            </div>
                                            <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Đăng nhập admin
                                            </h4>
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="form2Example17">Email address</label>
                                                <input type="email" id="form2Example17" name="email"
                                                    class="form-control" />
                                            </div>
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="form2Example27">Password</label>
                                                <input type="password" id="form2Example27" name="password"
                                                    class="form-control" />
                                            </div>
                                            <div class="pt-1 mb-4">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-dark btn-block" type="submit">Đăng nhập</button>
                                            </div>
                                            {{-- <a class="small text-muted" href="#!">Quên mật khẩu?</a> --}}
                                        </form>
                                        @if ($errors->any())
                                            <div class="alert alert-danger mt-3">
                                                @foreach ($errors->all() as $error)
                                                    <div>{{ $error }}</div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/js/chart-bar-demo.js') }}"></script>
</body>

</html>
