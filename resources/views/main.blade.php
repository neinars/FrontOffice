@extends('layouts.master')

@section('main')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="row">
            <div class="col-9">
                <div class="page-heading">
                    <h3>Data Pengunjung</h3>
                </div>
            </div>
            <div class="col-3">
                <div class="page-heading">
                    <h3>Profil</h3>
                </div>
            </div>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="card" style="background: transparent; ">
                                <div class="card-body px-4 py-4"style="background: #FFFDEC; border-radius: 1rem;">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="mb-2 me-2">
                                                <img src="assets/images/gg_profile1.png" alt="">
                                            </div>
                                            <div>
                                                <h6 class="font-semibold">Harian</h6>
                                                {{-- @foreach ($daily as $d)                                                     --}}
                                                <h6 class="font-extrabold mb-0">
                                                    @foreach ($daily as $d)
                                                        {{ $d->created_at->format('d') }}
                                                    @endforeach</h6>
                                                {{-- @endforeach --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6">
                            <div class="card" style="background: transparent">
                                <div class="card-body px-4 py-4" style="background: #FFFDEC; border-radius: 1rem;">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="mb-2 me-2">
                                                <img src="assets/images/gg_profile2.png" alt="">
                                            </div>
                                            <div>
                                                <h6 class="text-muted font-semibold">Harian</h6>
                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="background: #FFFDEC;">
                                <div class="m-3">
                                    <h4>Kunjungan Profil</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-profile-visit"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card" style="background: transparent">
                        <div class="card-body py-4 px-4" style="background: #FFFDEC; border-radius: 1rem;">
                            <div class="d-flex align-items-center">
                                <div class="mb-2 me-2">
                                    <img src="assets/images/gg_profile3.png" alt="">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Admin</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="background: #FFFDEC;">
                        <div class="m-3">
                            <h4>Profil Pengunjung</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-visitors-profile"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @yield('main')

    </div>

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script>
        var optionsProfileVisit = {
            annotations: {
                position: "back",
            },
            dataLabels: {
                enabled: false,
            },
            chart: {
                type: "bar",
                height: 300,
            },
            fill: {
                opacity: 1,
            },
            plotOptions: {},
            series: [{
                name: "Pengunjung",
                data: [
                    @foreach ($monthVisitor as $v)
                        {{ $v }},
                    @endforeach
                ],
            }, ],
            colors: "#224761",
            xaxis: {
                categories: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "Mei",
                    "Jun",
                    "Jul",
                    "Agu",
                    "Sep",
                    "Okt",
                    "Nov",
                    "Des",
                ],
            },
        }
    </script>
    <script>
        let optionsVisitorsProfile = {
            series: [
                {{ $kepsek }}, {{ $tu }}, {{ $bp }}, {{ $staff_m }}, {{ $staff_tu }}, {{ $guru }}, {{ $guru_piket }}, {{ $dll }}
            ],
            labels: ["Kepala Sekolah", "TU", 'BP', 'Staff Management', 'Staff TU', 'Guru', 'Guru Piket', 'Dan lain-lain'],
            colors: ["#435ebe", "#55c6e8"],
            chart: {
                type: "donut",
                width: "100%",
                height: "350px",
            },
            legend: {
                position: "bottom",
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: "30%",
                    },
                },
            },
        }
    </script>
    <script src="assets/js/pages/dashboard.js"></script>
@endsection
