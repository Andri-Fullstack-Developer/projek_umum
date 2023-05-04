<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT | Daharan</title>
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/Pt.daran.png') }}"> --}}
    {{-- Link Icon --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('public/app.css') }}">
    {{-- IMG --}}
    {{-- <link rel="stylesheet" href="{{ asset('img') }}"> --}}
    {{-- Boostrap --}}
    {{-- LInk Icon Google --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- Link Bootsrap --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    {{-- swiper scss --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>
    @section('nav')
        @include('app.nav')
    @show

    <div class="container container_berita mt-2">
        <h2 class="text-center kontak">Berita</h2>
        <div class="row mt-5">
            <div class="col">
                @foreach ($ho as $item)
                    <div class="card mb-5 mx-auto" style="width: 18rem;">
                        <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a class="btn btn-bg text-center" href="https://google.com" target="_">kunjugi</a>
                            <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col">
                <div class="card mb-5 mx-auto" style="width: 18rem;">
                    <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                        <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-5 mx-auto" style="width: 18rem;">
                    <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                        <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-5 mx-auto" style="width: 18rem;">
                    <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                        <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-5 mx-auto" style="width: 18rem;">
                    <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                        <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-5 mx-auto" style="width: 18rem;">
                    <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                        <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-5 mx-auto" style="width: 18rem;">
                    <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                        <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <a class="container btn btn-bg mb-4" href="">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Footer --}}

    <footer class="text-center">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="text-footer">
                        <h5>PORTAL RESMI</h5>
                        <h5>52 Jln Seaview, Singapore 438366</h5>
                        <p>&copy; 2022 Kota resmi </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- Script icon --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script type="text/javascript" src="https://example.com/fontawesome/v6.4.0/js/conflict-detection.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    {{-- icon --}}
    <script src="https://kit.fontawesome.com/e88adbb80f.js" crossorigin="anonymous"></script>
    {{-- swiper js --}}
    <script src="{{ asset('js/swiper.js') }}"></script>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['2019', 2.9],
                ['2020', 1.2],
                ['2021', 2],
                ['2022', 3],
                ['2023', 1.22],
            ]);
            var options = {
                title: 'Pendapantan Pertahun',
                backgroundColor: {
                    fill: 'transparent'
                },
            };

            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }

        // 2
        var xValues = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"];
        var yValues = [55, 55, 66, 61, 57];
        var barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChart12", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Hasil Laporan Setip Hari"

                }
            }
        });
        // 

        var xArray = ["Januari", "Februari", "Maret", "April", "Mei", "Jini", "Juli", "Agustus", "September", "Oktober",
            "November", "Desember"
        ];
        var yArray = [10, 15, 20, 10, 18, 17, 19, 16, 17, 15, 11, 13];

        var layout = {
            title: "Hasil Laporan Setip Bulan"

        };
        var options = {
            title: 'Pendapantan Pertahun',
            backgroundColor: {
                fill: 'transparent'
            },
        };

        var data = [{
            labels: xArray,
            values: yArray,
            hole: .4,
            type: "pie",

        }];

        Plotly.newPlot("myPlot", data, layout);
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            autoplay: {
                delay: 3000, // Waktu delay dalam milidetik (ms)
                disableOnInteraction: false,
            },
        });
    </script>
</body>

</html>
