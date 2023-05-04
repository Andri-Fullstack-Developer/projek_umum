<head>
    <style>
        body {
            height: 2000px;
        }
    </style>
</head>

@extends('app/layout')

@section('content')
    

    <div class="conten">
        @section('home')
            @include('app.home')
        @show

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


        // var xArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        // var yArray = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

        // // Define Data
        // var data = [{
        //     x: xArray,
        //     y: yArray,
        //     mode: "markers"
        // }];

        // // Define Layout
        // var layout = {
        //     xaxis: {
        //         range: [40, 160],
        //         title: "Perbulan"
        //     },
        //     yaxis: {
        //         range: [5, 16],
        //         title: "Penigakatan pendapatan "
        //     },
        //     title: "Hasil Pertahun"
        // };

        // // Display using Plotly
        // Plotly.newPlot("myPlot", data, layout);
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
@endsection
