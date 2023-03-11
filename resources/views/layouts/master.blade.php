<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Front Office</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/pages/simple-datatables.css') }}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="{{ url('/') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/visitor') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Buku Tamu</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Data Guru</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/senin') }}">Senin</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/selasa') }}">Selasa</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/rabu') }}">Rabu</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/kamis') }}">Kamis</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/jumat') }}">Jumat</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ url('/siswa') }}" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Data Siswa</span>
                            </a>
                            {{-- <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/teacher') }}">Rekayasa Perangkat Lunak</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/teacher') }}">Bisnis Daring Pemasaran</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/teacher') }}">Akutansi Keuangan Lembaga</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/teacher') }}">Otomatisasi Tata Kelola Perkantoran</a>
                                </li> --}}
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            @yield('main')
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/js/pages/simple-datatables.js') }}"></script>


</body>

</html>
