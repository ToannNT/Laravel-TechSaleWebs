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

<body class="sb-nav-fixed">
    {{-- header  --}}
    @include('layout.partials.admin.header')

    <div id="layoutSidenav_content">
        {{-- main  --}}
        <main>
            @yield('content')
        </main>
        {{-- footer  --}}
        <footer class="py-4 bg-light mt-auto">
            @include('layout.partials.admin.footer')
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('admin/js/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/js/chart-bar-demo.js') }}"></script>
</body>

</html>
