<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Logistik Farmasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofFJc3l5z5qXVoT7+6B5Bk1A2tc5g5F5tF" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">
    <!-- Custom styles for this template -->


</head>

<body>

    @include('pages.admin.navbar')

    <div class="container-fluid">
        <div class="row">
            <div class="px-4 sidebar border border-right col-md-3 col-lg-2 p-0 d-flex flex-column">
                <div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu"
                    aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">Logistik Farmasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto mt-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" aria-current="page" href="#">
                                    <i class="bi-house"></i>
                                    Dashboard
                                </a>
                            </li>

                            <h6
                                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                                <span>Master</span>
                            </h6>

                            <li class="nav-item">
                                <a class="nav-link {{ $title === 'jenisobat' ? 'active' : '' }} d-flex align-items-center gap-2"
                                    href="/jenisobat">
                                    <i class="bi bi-capsule-pill"></i>
                                    Jenis Obat
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $title === 'obat' ? 'active' : '' }} d-flex align-items-center gap-2"
                                    href="obat">
                                    <i class="bi bi-capsule"></i>
                                    Obat
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ $title === 'stock' ? 'active' : '' }} d-flex align-items-center gap-2"
                                    href="stock">
                                    <i class="bi-archive"></i>
                                    Stock
                                </a>
                            </li>
                        </ul>

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                            <span>Transaksi</span>
                        </h6>
                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi-cart"></i>
                                    Pengadaan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi-file-text"></i>
                                    Permintaan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi-truck"></i>
                                    Distribusi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi-trash"></i>
                                    Permusnahan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi-journal"></i>
                                    Riwayat Pengeluaran
                                </a>
                            </li>
                        </ul>

                        <hr class="my-3">

                        <ul class="nav flex-column mt-auto">
                            <li class="nav-item ">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi-gear"></i>
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item mb-5">
                                <a class="nav-link text-danger  d-flex align-items-center gap-2" href="#">
                                    <i class="bi-box-arrow-right"></i>
                                    Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    <script src="js/dashboard.js"></script>

</body>

</html>
